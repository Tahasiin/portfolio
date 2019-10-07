<nav class="uk-navbar-container uk-light" uk-navbar="mode: click" uk-sticky="animation: uk-animation-slide-top; show-on-up: true">
                <div class="uk-navbar-left nav-overlay">
                    <img src="img/tahasin handwriting logo-01.png"  style="width:150px;height: 80px;"/>

                </div>
                <div class="uk-navbar-right nav-overlay" >
                    <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav uk-visible@s">
                            <li><a class="a" href="index.php"><span id="about-nav">About Me</span></a></li>
                            <li><a class="a" href="projects.php"><span id="projects-nav">Projects</span></a></li>
                            <li><a class="a" href="effects.php"><span id="effects-nav">Effects & Animations</span></a></li>
                            <li><a class="a" href="resume.php"><span id="downloads-nav">Resume</span></a></li>
                            <li><a class="a" href="message.php"><span id="message-nav">Leave a Message</span></a></li>
                            <li><a class="a" href="contact-me.php"><span id="contact-nav">Contact Me</span></a></li>
                            <li><a class="a" id="url" href="" onclick="basicPopup(this.href); return false"><span uk-icon="sign-in" id="access-nav"></span></a></li>
                        </ul>

                        <ul class="uk-navbar-nav uk-hidden@s">
                            <li><a class="uk-navbar-toggle" style="color:black !important" uk-navbar-toggle-icon uk-toggle="target: #mobile-navbar"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="mobile-navbar" uk-offcanvas="mode: slide; flip: false">
                <div class="uk-offcanvas-bar">
                    <!-- off-canvas close button-->
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <!-- off-canvas close button-->
                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                        <!-- logo or title-->
                        <li class="uk-text-center" style="padding: 0 0 25px 0;">
                            <img src="img/tahasin handwriting logo-01.png"  style="width:150px;height: 80px;"/></li>

                        <li>
                            <hr>
                        </li>
                        <li class="uk-text-center">
                            <h3>Menu</h3>
                        </li>
                        <li><a href="index.php" id="about-sidenav">About Me</a></li>
                        <li><a href="projects.php" id="projects-sidenav">Projects</a></li>
                        <li><a href="effects.php" id="effects-sidenav">Effects & Animations</a></li>
                         <li><a href="download.php" id="downloads-sidenav-">Downloads</a></li>
                         <li><a href="message.php" id="message-sidenav">Leave a Message</a></li>
                        <li><a  href="contact-me.php" id="contact-sidenav">Contact Me</a></li>
                        <li><a  id="url2" href=""><span uk-icon="sign-in" id="access-sidenav" style="color:#cccccc"></span></a></li>
                    </ul>
                </div>
            </div>