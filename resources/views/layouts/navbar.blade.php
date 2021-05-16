<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" style="color: #B8566E !important" href="index.html">
            GENEO LARAVEL TASK
        </a>
        <div class="buy-button">
            <a href="{{ route('create.contact') }}" target="_blank">
                <div class="btn btn-primary login-btn-primary">Get in touch</div>
                <div class="btn btn-light login-btn-light">Get in touch</div>
            </a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="#" target="_blank" class="btn btn-primary"></a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
