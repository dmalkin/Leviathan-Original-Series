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
                          <li><a href="team-crew.php" onclick="location.href='team-crew.php'">Crew</a></li>
                      </ul>
                  </li>
                  <li class="text-center">
                      <a href="media.php" onclick="location.href='media.php'">Media</a>
                  </li>
                  <li class="text-center">
                      <a href="news.php" class="active" onclick="location.href='news.php'">News</a>
                  </li>
              </ul>
              <ul class="navbar-nav navbar-right">
                  <li><a href="https://www.facebook.com/leviathanoriginalseries" target="_blank"><img src="assets/img/icons/facebook.png" class="icon"/></a></li>
                  <li><a href="https://twitter.com/LeviathanTVShow" target="_blank"><img src="assets/img/icons/twitter.png" class="icon"/></a></li>
                  <li><a href="http://www.youtube.com/playlist?list=PL6o3OPKHYQ6ZAglExl7mSvZ6kqsgDcjfu" target="_blank"><img src="assets/img/icons/youtube.png" class="icon" id="youtube"/></a></li>
              </ul>
          </div>
        </div>
      </nav>
    </div>
    </section>

<section id="bgImage">
    <div class="row">
        <div class="col-lg-12 pickgradient1">
            <img src="assets/img/cover/Candles.jpg" />
        </div>
    </div>
</section>

<section id="news-content">
    <div class="animated hiding" data-animation="fadeIn" data-delay="300">

        <div class="row">
            <div class="col-xs-1 col-lg-3 col-md-2"></div>
            <div class="col-xs-10 col-lg-6 col-md-8" style="background-color: rgba(0, 0, 0, 0.8);">
                <img class="img-responsive news-title" src="assets/img/cover/news.png" />

                <h3 class="title text-left">April 27, 2015<br/><span style="color:white">Tony Todd joins Leviathan Cast as "Dantalion"</span></h3>
                <hr style="display: inline-block;float: left;border-top: 5px #6B0000 solid;"/>

                <p>We are immensely honored and excited to announce a world-class talent who will be appearing in ‪#‎Leviathan‬ as the Daemonae Commander "Dantalion": <a href="http://www.imdb.com/name/nm0865302/" target="_blank">Tony Todd</a> (Platoon, Candyman, The Rock)</p>
                <br/>

                <h3 class="title text-left">April 1, 2015<br/><span style="color:white">James Duval joins Leviathan Cast as "Rimmon"</span></h3>
                <hr style="display: inline-block;float: right;border-top: 5px #6B0000 solid;"/>
                <br/>
                <p>Very excited to announce a new member of our Cast who will play a Daemonae Lieutenant named "Rimmon" in Episodes 2 and 7 -- <a href="http://www.imdb.com/name/nm0001166/?ref_=fn_al_nm_1" target="_blank">James Duval</a> (Donnie Darko, Independence Day, The Doe Boy)! Stay tuned for Behind the Scenes of filming this summer, and Updates on Leviathan Season 1 coming February 2016! Check it out!</p>
                <br/>

                <h3 class="title text-left">March 18, 2015<br/><span style="color:white">The first full draft of the Story of Leviathan Season 1 is complete!</span></h3>
                <hr style="display: inline-block;float: left;border-top: 5px #6B0000 solid;"/>
                <img src="assets/img/news/draft.jpg" class="img-responsive news-img">
                <br style="clear:both" /><br/>

                <p style="width: 59%;font-size: 12px;margin:auto" class="text-center">"Script Editor Philip Abraham (Left), Creator/Writer Cody DeLisa (Second from Left), Director/Executive Producer Cory Malkin (Center), Co-Creator/Writer Keach James Siriani-Madden (Second from Right), Second Assistant Director Paul Nathan (Right)."</p>

                <br/>

                <h3 class="title text-left">April 1, 2015<br/><span style="color:white">Chalet Lizette Brannan joins Leviathan Cast as "Mandy"</span></h3>
                <hr style="display: inline-block;float: left;border-top: 5px #6B0000 solid;"/>
                <br/>
                <p>We are very excited to announce the newest member of the Leviathan Cast, the immensely talented <a href="http://www.imdb.com/name/nm5192551/" target="_blank">Chalet Lizette Brannan</a>, who will play the supporting role of 'Mandy'! Check it out!</p>
                <br/>

                <h3 class="title text-left">January 30, 2015<br/><span style="color:white">Leviathan Red Carpet Premiere</span></h3>
                <hr style="display: inline-block;float: right;border-top: 5px #6B0000 solid;"/>
                <img src="assets/img/news/premiere.jpg" class="img-responsive news-img pull-left">
                <p><em>Leviathan Original Series' </em>  Pilot premiered at the Harkins Scottsdale 101 Theatre in Scottsdale, Arizona. We had a great turnout. Thanks to everyone who came to support the Show! </p>

                <br style="clear:both" /><br/>

                <p style="width: 65%;font-size: 12px">"Creator/Writer Cody DeLisa (Left), Director/Executive Producer Cory Malkin (Center), Actress Joy Flatz ("Anna") (Right)."</p>
                <br/><br/>

                <h3 class="title">August 7, 2014<br/><span style="color:white">Leviathan Pilot Production Begins</span></h3>
                <hr style="display: inline-block;float: left;border-top: 5px #6B0000 solid;"/>
                <img src="assets/img/news/production.jpg" class="img-responsive news-img">
                <br/><br/>

                <?php
                require_once "contact.php";
                ?>

                <?php
                require_once "php/footer-home.php";
                ?>

            </div>
            <div class="col-xs-1 col-lg-3 col-md-2"></div>
        </div>
    </div>

</section>
<br/><br/>
