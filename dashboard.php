<?php
session_start();
if(!isset($_SESSION["email"])){
    header("location: login.php?error=loginrequired");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cords Mobile - Power Scheduling</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/icon.png">
    <style>

        .me-center a {
            display: flex;
            justify-content: center;
            align-items: center;
            color:rgba(0, 200, 0, 0.7);
        }
        .btn-me {
            color: white;
            font-size: 16px;
            padding: 10px 12px;
            background-color: rgba(0, 200, 0, 0.7);
        }

        .btn-me:hover {
            color: white;
            font-size: 16px;
            padding: 10px 12px;
            background-color: rgba(0, 200, 0, 1);
            transition: 0.5s ease-in-out;
        }
        hr {
            width: 80%;
        }

        .text-me {
            font-size: 20px;
            font-weight: bold;
            color: rgba(0, 200, 0, 10);
            text-align: center;
        }
        .card-me {
            border-radius: 10px;
            transition: 0.5s ease-in-out;
        }
        .card-me:hover {
            border: 1.5px solid rgba(0, 200, 0, 0.7);
            border-radius: 10px;
            transition: 0.5s ease-in-out;
        }
    </style>
</head>

<body class="counter-scroll home1 home header-fixed">
    <!-- <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div> -->
    <div id="wrapper">
        <?php
        require_once "layout/header.inc.php";
        ?>
        <div class="row" style="padding: 50px;">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 card-me">
                    <div class="card-body">
                        <div class="row no-gutters ">
                            <div class="col mr-2 align-item-center me-center">
                                <div class="text-me">
                                    Click below botton to have access to Status room</div><br>
                                <hr>
                                <a href="status.php" class="btn text-white btn-me"> Status </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 card-me">
                    <div class="card-body">
                        <div class="row no-gutters ">
                            <div class="col mr-2 align-item-center me-center">
                                <div class="text-me">
                                    Click below botton to have access to observation room</div><br>
                                <hr>
                                <a href="observation.php" class="btn text-white btn-me"> Observation </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2 card-me">
                    <div class="card-body">
                        <div class="row no-gutters ">
                            <div class="col mr-2 align-item-center me-center">
                                <div class="text-me">
                                    Click below botton to have access to complaints room</div><br>
                                <hr>
                                <a href="complaint.php" class="btn text-white btn-me"> Complaint </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <a id="scroll-top"></a>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-validate.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/countto.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>

</body>


<!-- Mirrored from themesflat.co/html/soffets/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 02:47:21 GMT -->

</html>