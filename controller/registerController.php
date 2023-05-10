<?php
 // including controller

 include 'authController.php';
 include '../database/connection.php';

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

   

    // Query an Empty field
    if(emptySignup($fullname, $email, $phone, $location) == false){
        header('location: ../register.php?error=emptyinput');
        exit();
    }

    if(userExit($dbconnect, $phone, $email) !== false){
        header('location: ../register.php?error=userexit');
        exit();
    }else{
        createuser($dbconnect, $fullname, $email, $phone, $location);
    }

    // if(PMatch($password,$rpassword) !== false){ 
    //     header('location: ../register.php?error=incorrectPassword');
    //     exit();
    // }

    
}



if(isset($_POST['login'])){

    // declaration of variable 

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Checkk if user email and password exist inside database

    
    if(userOccur($dbconnect, $email, $password) == false){
        header('location: ../login.php?error=usernotoccure');
        exit();
}
loginUser($dbconnect, $email, $password);
}

if(isset($_POST['complainButton'])){

    $complain = $_POST['complain'];
    $message = $_POST['message'];

    if(checkComplainInput($complain, $message) == false){
        header('location: ../complaint.php?error=emptyinput');
        exit();
    }
        createComplain($dbconnect, $complain, $message); 
}

if(isset($_POST['observationButton'])){

    $observation = $_POST['observation'];
    $message = $_POST['message'];
    
    if(checkObservationInput($observation, $message) == false){
        header('location: ../observation.php?error=emptyinput');
        exit();
    }
        createObservation($dbconnect, $observation, $message);
}

if(isset($_POST['statusButton'])){

    $transformerID = $_POST['transformerID'];
    $message = $_POST['message'];

    if(checkStatusInput($transformerID, $message) === false){
        header('location: ../status.php?error=emptyinput');
        exit();
    }
        createStatus($dbconnect, $transformerID, $message);
}
