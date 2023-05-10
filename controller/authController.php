<?php
session_start();
$result;

function emptySignup($fullname, $email, $phone, $location) {
    
    if(empty($fullname) || empty($email) || empty($phone) || empty($location)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function checkComplainInput($complain, $message) {
    
    if(empty($complain) || empty($message)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function checkObservationInput($observation, $message) {
    
    if(empty($observation) || empty($message)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function checkStatusInput($transformerID, $message) {
    
    if(empty($transformerID) || empty($message)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function userExit($dbconnect, $phone, $email) {
    $query = "SELECT * FROM users WHERE phone = ? AND email = ?;";
    $stmt_init = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt_init, $query)) {
        header('localhost: ../register.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt_init, 'ss', $phone, $email);
    mysqli_stmt_execute($stmt_init);
    $getresult = mysqli_stmt_get_result($stmt_init);

    if($row = mysqli_fetch_assoc($getresult)) {
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt_init);
}

// function PMatch($password,$rpassword){
//     if($password !== $rpassword){
//         $result = true;
//     }else{
//         $result = false;
//     }

//     return $result;
// }

function createuser($dbconnect, $fullname, $email, $phone, $location) {

    $query = "INSERT INTO users (`name`, email, phone, `location`) VALUE (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt, $query)) {
        header('location: ../register.php?error=stmtfailed');
        exit();
    }


    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header('location: ../register.php?error=' . $email . 'is not a valid email address');
        exit();
    }
    // $hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'ssss', $fullname, $email, $phone, $location);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../register.php?error=none');
    exit();
}

function userOccur($dbconnect, $email, $phone) {

    $query = "SELECT * FROM users WHERE email = ? AND phone = ?;";
    $stmt_init = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt_init, $query)) {
        header('localhost: ../login.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt_init, 'ss', $email, $phone);
    mysqli_stmt_execute($stmt_init);
    $getresult = mysqli_stmt_get_result($stmt_init);

    if($row = mysqli_fetch_assoc($getresult)) {
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt_init);
}

function loginUser($dbconnect, $email, $phone){
    $existingUser = userOccur($dbconnect, $email, $phone);
    if($existingUser !== false){
        $_SESSION["email"] = $existingUser["email"];
        $_SESSION["name"] = $existingUser["name"];
        header("location: ../dashboard.php?success=successful");
}
}

function createStatus($dbconnect, $transformerID, $message) {

    $query = "INSERT INTO transformer (`transformer_id`, `message`) VALUE (?, ?);";
    $stmt = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt, $query)) {
        header('location: ../status.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $transformerID, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../status.php?error=none');
    exit();
}

function createComplain($dbconnect, $complain, $message) {

    $query = "INSERT INTO complaints (`userID`, `message`) VALUE (?, ?);";
    $stmt = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt, $query)) {
        header('location: ../complaint.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $complain, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../complaint.php?error=none');
    exit();
}

function createObservation($dbconnect, $observation, $message) {

    $query = "INSERT INTO observation (`userID`, `message`) VALUE (?, ?);";
    $stmt = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt, $query)) {
        header('location: ../observation.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'ss', $observation, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../observation.php?error=none');
    exit();
}




