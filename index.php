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
                      <a href="index.php" class="active" onclick="location.href='index.php'">Home</a>
                  </li>
                  <li class="text-center">
                      <a href="story.php" onclick="location.href='story.php'">Story</a>
                  </li>
                  <li class="dropdown text-center"><a class="dropdown-toggle" data-toggle="dropdown" href="team.php">Team<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="team.php" onclick="location.href='team.php'">Cast</a></li>
                          <li><a href="team-crew.php" onclick="location.href='team-crew.php'">Crew</a></li>
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
                <img src="assets/img/home/bg.jpg" />
            </div>
        </div>
    </section>

    <section id="buttons">
        <button id="pilot" class="btn-lev animated hiding" data-animation="fadeIn" data-delay="500">Pilot</button>
        <button id="story" class="btn-lev animated hiding" data-animation="fadeIn" data-delay="500" onclick="location.href='story.php'">Story</button>
    </section>


    <section id="home1" class="page">
      <div class="container-fluid">
        <div class="content cover text-center">
            <div class="row">
                <div class="col-xs-1 col-lg-3 col-md-2"></div>
                <div class="col-xs-10 col-lg-6 col-md-8" style="background-color: rgba(0, 0, 0, 0.5);">
                    <iframe style="align-content: center" class="animated hiding video" data-animation="fadeIn" data-delay="300" width="640" height="360" src="https://www.youtube.com/embed/voLKhaM2BUE" frameborder="1" allowfullscreen></iframe>
                    <br style="clear:both" />


                      <div class="row animated hiding" data-animation="fadeIn" data-delay="500" id="content" >
                        <div class="col-xs-1"></div>

                        <div class="col-xs-10">
                            <img class="img-responsive comingsoon" src="assets/img/logo/coming_soon.jpg" />
                        </div>

                        <div class="col-xs-1"></div>
                      </div>
                </div>
                <div class="col-xs-1 col-lg-3 col-md-2"></div>
            </div>


        </div>
      </div>
    </section>

    <section id="credits">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <img class="credits" src="assets/img/logo/credits.jpg" />
            </div>
            <div class="col-xs-3"></div>
        </div>
    </section>





<!-- include your own success html here -->

<?php
require_once "contact.php";
?>

<?php
require_once "php/footer-home.php";
?>

</body>
