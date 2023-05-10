<!-- header top starts -->
<?php include 'layout/header_top.php'; ?>
<!-- // header top ends -->

    <div id="wrapper">
        <?php include 'layout/header.php'; ?>
        <section class="a-call contact">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wrap-title-a-call">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="inner">
                                <!-- controller/authController.php -->
                                    <h3>Register here to have access to our services</h3>
                                    <form action="controller/registerController.php" method="post" id="commentform" class="comment-form">
                                        <div class="text-wrap clearfix">
                                            <fieldset class="name-wrap">
                                                <input type="text" class="tb-my-input" name="fullname" tabindex="1" placeholder="Enter your Name...." size="32">
                                            </fieldset>
                                            <fieldset class="email-wrap">
                                                <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Enter your Email...."  size="32">
                                            </fieldset>
                                            <fieldset class="name-wrap">
                                                <input type="number" class="tb-my-input" name="phone" tabindex="1"  maxlength="11" placeholder="Enter your Phone Number...."  required="true">
                                            </fieldset>
                                            <fieldset class="select">
                                                <select name="location" id="" style="background:rgba(33, 36, 33, 0.5); border:solid black 3px; color:white; padding:16px; padding-left:25px; border-radius: 5px;" require='true'>
                                                        <option value="">Select your Transformer Location...</option>
                                                        <option value="Come">come</option>
                                                        <option value="Go">Go</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <p class="form-submit">
                                            <button name="register" class="font-style linear-color border-corner submit"> Submit Now</button>
                                        </p>
                                    </form>
                                </div>
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
                        <a href="#">Copyright © 2023 CordsMobile </a><span class="license"> All Rights
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
</body>


<!-- Mirrored from themesflat.co/html/soffets/location.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 02:49:39 GMT -->

</html>