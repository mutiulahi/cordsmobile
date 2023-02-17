<?php
include '../database/connection.php';

if(isset($_POST['register'])) {

    $unique_id = 'COMD';


    $get_last_id = "SELECT MAX(id) as last_id FROM users";
    $get_last_id_result = mysqli_query($dbconnect, $get_last_id);

    $last_id = mysqli_fetch_array($get_last_id_result)['last_id'];


    echo $last_id;
}