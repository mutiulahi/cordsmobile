<?php
$result;

function emptySignup($fullname, $email, $phone, $location) {
    
    if(empty($fullname) || empty($email) || empty($phone) || empty($location)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function userExit($dbconnect, $phone, $location) {
    $query = "SELECT * FROM users WHERE phone = ? OR location = ?;";
    $stmt_init = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt_init, $query)) {
        header('localhost: ../register.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt_init, 'ss', $phone, $location);
    mysqli_stmt_execute($stmt_init);
    $getresult = mysqli_stmt_get_result($stmt_init);

    if($row = mysqli_fetch_array($getresult)) {
        return $row;
    }else {
        $result = false;
    }

    mysqli_stmt_close($stmt_init);
}

function createuser($dbconnect, $fullname, $email, $phone, $location) {
    $query = "INSERT INTO users (name, email, phone, location) VALUE (?, ?, ?, ?);";
    $stmt_init = mysqli_stmt_init($dbconnect);
    if(!mysqli_stmt_prepare($stmt_init, $query)) {
        header('location: ../register.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt_init, 'ssss', $fullname, $email, $phone, $location);
    mysqli_stmt_execute($stmt_init);
    mysqli_stmt_close($stmt_init);
    header('location: ../register.php?error=none');
    exit();
}