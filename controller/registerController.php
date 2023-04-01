<?php

if(isset($_POST['register'])){
    
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
    $password = $_POST['password'];
    $rpassword = $_POST['Rpassword'];

    // including controller

    include '../database/connection.php';
    include 'authController.php';

    // Query an Empty field
    if(emptySignup($fullname, $email, $phone, $location, $password, $rpassword) == false){
        header('location: ../register.php?error=emptyinput');
        exit();
    }

    if(userExit($dbconnect, $phone, $location) !== false){
        header('location: ../register.php?error=userexit');
        exit();
    }

    if(PMatch($password, $rpassword) !== false){
        // Password Do not match
        header('location: ../register.php?error=Incorrectpassword');
        exit();
    }

    createuser($dbconnect, $fullname, $email, $phone, $location, $password);
}

