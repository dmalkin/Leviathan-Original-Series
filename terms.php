<?php
  session_start();

  require_once "header.php";
?>

<body>

<!-- Navbar Section -->
    <section id="header">
        <div id="navbar-top">
            <nav class="navbar navbar-default navbar-top" role="navigation">

                <div class="container-fluid" >
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <div class="collapse navbar-collapse mynavbar">
                        <ul class="nav navbar-nav" id="nav">
                            <li class="text-center">
                                <a href="index.php" onclick="location.href='index.php'">Home</a>
                            </li>
                            <li class="text-center">
                                <a href="story.php" onclick="location.href='story.php'">Story</a>
                            </li>
                            <li class="dropdown text-center"><a class="dropdown-toggle" data-toggle="dropdown" href="team.php">Team<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="team.php" onclick="location.href='team.php'">Cast</a></li>
                                    <li><a href="team.php" onclick="location.href='team-crew.php'">Crew</a></li>
                                </ul>
                            </li>
                            <li class="text-center">
                                <a href="media.php" onclick="location.href='media.php'">Media</a>
                            </li>
                            <li class="text-center">
                                <a href="news.php" onclick="location.href='news.php'">News</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-right">
                            <li><a href="https://www.facebook.com/leviathanoriginalseries" target="_blank"><img src="assets/img/icons/facebook.png" class="icon"/></a></li>
                            <li><a href="https://twitter.com/LeviathanTVShow" target="_blank"><img src="assets/img/icons/twitter.png" class="icon"/></a></li>
                            <li><a href="http://www.youtube.com/playlist?list=PL6o3OPKHYQ6ZAglExl7mSvZ6kqsgDcjfu" target="_blank"><img src="assets/img/icons/youtube.png" class="icon"/></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section id="bgImage">
        <div class="row">
            <div class="col-lg-12 pickgradient">
                <img src="assets/img/cover/Krassiss.png" />

                <section id="term-content1">
                    <div class="animated hiding" data-animation="fadeIn" data-delay="300">

                        <div class="row">
                            <div class="col-xs-1 col-lg-3 col-md-2"></div>
                            <div class="col-xs-10 col-lg-6 col-md-8" style="background-color: rgba(0, 0, 0, 0.3);">
                                <h2>Terms of Use</h2>
                                <hr/>
                                <p>Information and promotional media published on this website may be used and republished for informational and promotional purposes pertaining to the betterment of the Franchise, Leviathan, without further written consent, so long as proper credit is attributed in publication to the original author(s) or creator(s) of content and/or media.</p>
                                 
                                <p>All other uses of copyrighted material and protected intellectual property, including the creation of derivative works, unauthorized re-use or resale for profit, or unauthorized dissemination is strictly prohibited and punishable under the current copyright laws of the United States of America. All ownership of intellectual and physical property pertaining to Leviathan is the sole property of Easily Amused Productions, LLC and/or its affiliates.</p>
                                <br/><br/>

                                <div class="row">
                                    <div class="col-xs-3"></div>
                                    <div class="col-xs-6">
                                        <?php
                                        require_once "php/footer-home.php";
                                        ?>
                                    </div>
                                    <div class="col-xs-3"></div>
                                </div>

                            </div>
                            <div class="col-xs-1 col-lg-3 col-md-2"></div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </section>



<br/><br/>

<?php
require_once "contact.php";
?>
