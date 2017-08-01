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
                      <a href="story.php" class="active" onclick="location.href='story.php'">Story</a>
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
                  <li><a href="http://www.youtube.com/playlist?list=PL6o3OPKHYQ6ZAglExl7mSvZ6kqsgDcjfu" target="_blank"><img src="assets/img/icons/youtube.png" class="icon" id="youtube"/></a></li>
              </ul>
          </div>
        </div>
      </nav>
    </div>
    </section>

    <section id="bgImage">
        <div class="row">
            <div class="col-lg-12 pickgradient">
                <img src="assets/img/cover/Moloch.jpg" />
            </div>
        </div>
    </section>

    <section id="story-content">
        <div class="animated hiding container-fluid" data-animation="fadeIn" data-delay="300">

            <div class="row" >
                <div class="col-xs-1 col-lg-3 col-md-2"></div>
                <div class="col-xs-10 col-lg-6 col-md-8" >
                    <img src="assets/img/cover/TheStory.png" class="img-responsive" />
                    <br/><br/><br/>
                </div>
                <div class="col-xs-1 col-lg-3 col-md-2"></div>
            </div>
            <div class="row" >
                    <div class="col-xs-1 col-lg-3 col-md-2"></div>
                    <div class="col-xs-10 col-lg-6 col-md-8" style="background-color: rgba(0,0,0,0.6)">
                    <br/>
                    <div class="content cover">
                        <div class="row">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-10">
                                <h4 class="text-center">In The War between Heaven and Hell, Anna Sawyer discovers that she alone has the ability to destroy all evil.</h4><br/>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                        <h2 class="title">Synopsis</h2>
                        <hr style="float: left;border-top: 5px #6B0000 solid;"/>
                        <p><em><b>Leviathan</b></em> is an original story set during what many believe to be mankind’s final days on earth. We follow the journey of a young girl named Anna who finds herself caught amidst the ancient spiritual war between Angels and Demons that has persisted since the beginning of human history. As the daughter of the Angel Bertram, Anna is believed to possesses the ability end to the war by causing the destruction of evil.</p>
                        <h2 class="title">The Akero</h2>
                        <hr style="float: left;border-top: 5px #6B0000 solid;"/>
                        <p>Shortly after the destruction of the Tower of Babel, the Akero took up their role as secretive protectors of humanity. The Akero are men who serve covertly alongside angels. This holy order is tasked with keeping the forces of Hell at bay -- defending the weak, protecting the innocent, and preventing the Daemonae from completely destroying mankind.</p>
                        <h2 class="title">The Daemonae</h2>
                        <hr style="float: left;border-top: 5px #6B0000 solid;"/>
                        <p>After Lucifer and the angels loyal to him rebelled against God and were expelled from Heaven, their angelic bodies died and their spirits were forced to wander the earth until the end of time when they will be destroyed. To spite their Creator, whom they call "the Tyrant", the Daemonae seek to corrupt and destroy the hearts of God's most beloved creation -- mankind. The Daemonae steal bodies of their consenting human victims by either possessing or inhabiting them. They seek to make themselves "gods" on the earth and spite God in all they do.</p>
                        <h2 class="title">The Prophecy & Anna</h2>
                        <hr style="float: left;border-top: 5px #6B0000 solid;"/>
                        <p>The Book of Revelation in the Christian Bible foretells the coming of a murderous world leader commonly known as "The Antichrist." When this ruler comes to power, he will usher in a world war worse than any in history. At the war’s end, it is prophesied that the Antichrist and all evildoers will be destroyed in a "lake of burning sulfur". The irony of the prophecy is that it causes a game of survival -- because Hell’s Demons will be destroyed if the prophecy comes to pass, they want to kill the Antichrist, and God’s angels thus want to expedite the ruler's rise to power.</p>
                        <br/>
                        <p>Anna, our young and innocent protagonist, finds herself caught directly in the middle of this conflict when it is discovered that she may be the one living soul able to trigger the rise of the Antichrist, and thus the ultimate destruction of evil.</p>
                    </div>
                    <br/>
                    <?php
                    require_once "contact.php";
                    ?>

                    <?php
                    require_once "php/footer.php";
                    ?>

                </div>
                <div class="col-xs-1 col-lg-3 col-md-2"></div>
            </div>
        </div>

    </section>

<br/><br/>
