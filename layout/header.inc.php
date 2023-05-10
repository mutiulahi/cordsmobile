<header id="header" class="header header-type1 bg-header-s1 bg-color" style="background-color:rgba(0, 250, 0, 0.5); padding-top:25px;">
    <div class="container">
        <div class="flex-header d-flex" id="header-main">
            <div id="logo" class="logo d-flex align-items-center justify-content-start">
                <h2>Dashboard</h2>
            </div>
            <div class="mobile-button"><span></span></div>
            <nav id="main-nav-mobi" class="main-nav">
                <ul id="menu-primary-menu" class="menu">
                    <li class="menu-item current-menu-ite">
                        <a href="status.php" class="style">Status</a>
                    </li>
                    <li class="list">
                        <a href="observation.php" class="style">Observation</a>
                    </li>
                    <li class="list">
                        <a href="complaint.php" class="style">Complaints</a>
                    </li>
                </ul>
            </nav>
            <div class="btn" style="display:inline; margin-left:30%; font-size:12px; margin-top:20px;">
                <!-- <button style="margin-left: 120%; margin-top:20px; font-size:14px; outline:none;" type="submit" class="btn btn-dark"><a href="http://">Login</a></button> -->
                <p> <img src="assets/images/image-02.jpg" alt="" srcset="" width="25px"; style="border-radius:50%;">
                <?php if(isset($_SESSION["email"])){echo $_SESSION["name"];}?>
                </p>
            </div>
            <div class="button-slider" style="margin-top:23px; margin-left:20px;">
                <a class="button-header border-corner" href="logout.php" style="color:white;">Logout</a>
           </div>
        </div>
    </div>
</header>