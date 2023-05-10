<?php 
session_start();
if(!isset($_SESSION["email"])){
    header("location: login.php?error=loginrequired");
}else{
    require_once 'layout/header_top.php';
}

;?>
    <!-- <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div> -->
    <div id="wrapper">
        <?php require_once 'layout/header.inc.php'?>
        <div class="page-title parallax parallax1 position-relative clearfix">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="breadcrumbs position-relative">
                    <div class="breadcrumbs-wrap">
                        <h1 class="title">Status Checker</h1>
                        <ul class="breadcrumbs-inner">
                            <li class="font"><a href="index.html" id="font">Home</a></li>
                            <li><span >Status</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="lead-team status">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wrap-title-solution style">
                            <div class="content">
                                <div class="inner">
                                    <button class="btn btn-success m-5 border-corner p-4" style="font-size:20px;" id="showHidden">Click Here to View Status</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mb-5">
                        <div class="swiper-leadteam swiper-container">
                            <div class="">
                            <form action="controller/registerController.php" style="width:50%; margin:auto;" method="post">
                              <div>
                                <input type="text" name="transformerID" id="textHidden1" placeholder="Enter your Transformer Location" style="color:black" class="d-none">
                              </div>
                              <br>
                               <textarea name="message" id="textHidden2" cols="20" rows="15" placeholder="Enter your status here!" style="color:black" class="d-none"></textarea>
                               <input type="submit" value="Submit" name="statusButton" id="submitHidden" class="d-none mt-3">
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div id="bottom" class="bottom-type1 position-relative">
            <div class="container">
                <div class="bottom-wrap text-center">
                    <div id="copyright">
                        <a href="#">Copyright © 2020 Themesflat </a><span class="license"> All Rights
                            Reserved</span>
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
    <script>
        $(document).ready (function(){
            $("#showHidden").on ("click", function(){
                $("#textHidden1").removeClass("d-none");
                $("#textHidden2").removeClass("d-none");
                $("#submitHidden").removeClass("d-none");
            })
        });
    </script>
</body>


<!-- Mirrored from themesflat.co/html/soffets/teammember.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 02:48:53 GMT -->
</html>
