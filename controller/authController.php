<?php
$result;

function emptySignup($fullname, $email, $phone, $location, $password, $rpassword) {
    
    if(empty($fullname) || empty($email) || empty($phone) || empty($location) || empty($password) || empty($rpassword)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

function userExit($dbconnect, $phone, $location) {
    $query = "SELECT * FROM users WHERE phone = ? AND location = ?;";
    $stmt_init = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt_init, $query)) {
        header('localhost: ../register.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt_init, 'ss', $phone, $location);
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

function PMatch($password, $rpassword){
    
    if($password !== $rpassword){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}


function createuser($dbconnect, $fullname, $email, $phone, $location, $password) {
    $query = "INSERT INTO users (`name`, email, phone, `location`, `password`) VALUE (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt, $query)) {
        header('location: ../register.php?error=stmtfailed');
        exit();
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, 'sssss', $fullname, $email, $phone, $location, $hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../register.php?error=none');
    exit();
}

