<?php


if(isset($_POST['register'])) {
    // $unique_id = 'COMD';


    // $get_last_id = "SELECT MAX(id) as last_id FROM users";
    // $get_last_id_result = mysqli_query($dbconnect, $get_last_id);

    // $last_id = mysqli_fetch_array($get_last_id_result)['last_id'];


    // echo $last_id;

    // Declearation of Variables

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];

    // including controller

    include '../database/connection.php';
    include 'function.php';

    // Query an Empty field
    if(emptySignup($fullname, $email, $phone, $location) === false){
        header('location: ../register.php?error=emptyinput');
        exit();
    }

    if(userExit($dbconnect, $phone, $location) === false){
        header('location: ../register.php?error=userexit');
        exit();
    }

    createuser($dbconnect, $fullname, $email, $phone, $location);
}else{
    header('location: ../register.php?error=notcheck');
    exit();
}

