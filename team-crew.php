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
                        <li class="dropdown text-center"><a class="dropdown-toggle active" data-toggle="dropdown" href="team.php">Team<span class="caret"></span></a>
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

<section id="home" class="page">
<div class="container-fluid">
<br/>
<div class="row">
    <div class="col-xs-12" id="accordian">
        <div id="inner2" class="animated hiding" data-animation="fadeIn" data-delay="300">


            <img class="img-responsive cbios" src="Team/Photos/CoryMalkin-s.jpg" id="cory" />
            <img class="img-responsive cbios" src="Team/Photos/KyleMalkin-s.jpg" id="kyle" />
            <img class="img-responsive cbios" src="Team/Photos/CodyDelisa-s.jpg" id="cody" />
            <img class="img-responsive cbios" src="Team/Photos/KeachJamesSiriani-Madden-s.jpg" id="keach" />
            <img class="img-responsive cbios" src="Team/Photos/BradleyBeamon-s.jpg" id="brad" />
            <img class="img-responsive cbios" src="Team/Photos/JoelKreimeyer-Kelly-s.jpg" id="joel" />
            <img class="img-responsive cbios" src="Team/Photos/BrianMTang-s.jpg" id="brian" />
            <img class="img-responsive cbios" src="Team/Photos/MichaelRitter-s.jpg" id="michael" />
        </div>
    </div>
</div>

<div id="bio-content" class="animated hiding" data-animation="fadeIn" data-delay="500">

<div id="cory-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/CoryMalkin-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Cory Malkin</h1>
        <hr/>
        <h4 class="titlex">Director / Producer</h4>
        <p>Cory Malkin is an award-winning American Film Director and Producer. Cory co-founded Easily Amused Productions alongside his oldest brother Kyle in 2012 to produce his first feature film, Silent Echo. In April 2014, Cory's narrative short film, The Woodsman and The Farmer, won the Special Marquee Award at the American Movie Awards. Cory began acting and making short action films as a young child with his four brothers. While in high school, Cory acted in local theater productions and competed nationally with an improv troupe. Cory currently studies in the University of Southern California’s School of Cinematic Arts and was awarded the prestigious Nasser and Watar Foundation Scholarship.</p>
        <a href="http://www.imdb.com/name/nm3790911/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
        <a href="https://www.facebook.com/EasilyAmusedProductions?fref=ts" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/EAP-whitesm.jpg" /></a>
    </div>
</div>

<div id="kyle-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/KyleMalkin-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Kyle Malkin</h1>
        <hr/>
        <h4 class="titlex">Executive Producer / Director of Music</h4>
        <p>Kyle Malkin is an award-winning American Film Producer and Composer. Kyle co-founded Easily Amused Productions, a film production company, with his brother Cory in 2012, and later created his own studio in 2014, Kyle Malkin Films. Kyle has produced all of Cory Malkin's films to date including the award-winning The Woodsman and The Farmer, which won the Special Marquee Award at the 2014 American Movie Awards. Kyle's music has been heard in motion pictures and concert halls worldwide. His score to the award-winning short film Dinner with Fred won Best Original Score at the 2011 Van Wert International Film Festival, and his concert music has been performed by groups including the USC Symphony, the Tucson Symphony's Paloma Winds Quintet, and his own group, Suite Strings Quartet. Kyle graduated with honors from the University of Southern California with a Bachelors Degree in Music Composition in May 2011, and currently lives and works as a filmmaker and musician in Phoenix, Arizona.</p>
        <a href="http://www.imdb.com/name/nm3536395/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
        <a href="http://www.kylemalkin.com/#!home-kyle-malkin-films/c18xn" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/KMFsm.jpg" /></a>
    </div>
</div>

<div id="cody-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/CodyDelisa-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Cody DeLisa</h1>
        <hr/>
        <h4 class="titlex">Creator / Writer</h4>
        <p>Cody DeLisa is a Writer and Creator of Leviathan. Cody began making films with his friends as a child, and has performed both on stage in theater productions and on screen in independent films including Silent Echo, Last Call, and Expeditionary Force 343. In early 2014, Cody's frustration with the trend in television programming of a near constant barrage of reboots led him to dream up something new and original -- the world of Leviathan.</p>
        <a href="http://www.imdb.com/name/nm3794084/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

<div id="keach-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/KeachJamesSiriani-Madden-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Krassiss</h1>
        <hr/>
        <p>Krassiss serves in the ancient order of the Daemonae as an assistant to Mephistopheles. The war between the Akero and Daemonae has taken a physical and mental toll on Krassiss. Recently captured by the Akero, the Daemonae seek to return Krassiss to their ranks at any cost. Krassiss, unable to speak, tortures the victims of the Daemonae’s conquests.</p>

        <h1 class="title">Keach James Siriani-Madden</h1>
        <hr/>
        <h4 class="titlex">Creator / Writer / Actor</h4>
        <p>Keach James Siriani-Madden is an American Actor, Director, and Screenwriter. Keach has performed on stage in roles including “Tybalt” in Romeo and Juliet and “Professor James Moriarty” in Sherlock Holmes: The Final Adventure, and he has appeared on screen in several short films for the Act IV film group. Keach has Directed stage productions including an adaptation of Kurt Vonnegut Jr.’s Who Am I This Time? and J.M. Barrie’s Dear Brutus. Having studied and taught Tae-Kwon-Do, Keach helped bring the action to life in Leviathan as a Fight Choreographer. Keach is one of the two original Creators of the Leviathan universe. He plays "Krassis" in the Show, and is now co-writing the remainder of the full story. Keach is currently completing his studies in Theatre Arts at Grand Canyon University in Phoenix, Arizona. </p>
        <a href="http://www.imdb.com/name/nm6611037/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

<div id="brad-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/BradleyBeamon-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Bradley Beamon</h1>
        <hr/>
        <h4 class="titlex">Writer</h4>
        <p>Bradley Beamon is an Actor and Screenwriter from Phoenix, Arizona. He graduated Summa Cum Laude from Grand Canyon University and holds Bachelor of Arts degrees in both Theatre and Screenwriting. Bradley has appeared on stage in roles including “Charles” in Dial P for Peanuts, “Peter” in The Lion, The Witch, and the Wardrobe, and “Danny” in Prodigy. He has performed in several Easily Amused Productions films including Silent Echo as “Director Connolly”, and he was Associate Producer for the award-winning The Woodsman & The Farmer (2014). Bradley has written screenplays including Phobos Bridge and Reflection, and he co-wrote Silent Echo. He is currently engaged writing Leviathan.</p>
        <a href="http://www.imdb.com/name/nm3795357/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

<div id="joel-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/JoelKreimeyer-Kelly-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Joel Kreimeyer-Kelly</h1>
        <hr/>
        <h4 class="titlex">Composer</h4>
        <p>Joel Kreimeyer-Kelly is an American award-winning Composer and Graduate of the University of Southern California’s Scoring for Motion Pictures Program. Joel first began working with the Easily Amused Productions Team when he scored The Woodsman and The Farmer in 2013. He is now the Composer of Leviathan. Joel's music has been performed by groups including the Tucson Symphony Orchestra and the Tucson Pops Orchestra, and received merit recognition from the National Foundation for the Advancement of the Arts.</p>
        <a href="http://www.imdb.com/name/nm3303292/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

<div id="brian-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/BrianMTang-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Brian M. Tang</h1>
        <hr/>
        <h4 class="titlex">Director of Photography</h4>
        <p>Brian M. Tang is an award-winning Cinematographer and Director. Brian has shot numerous short films, viral videos, and music videos, and has directed films including the award-winning action film Prebirth: The Eternal War, as well as two video game trailers, which have garnered over 1.2 million views on YouTube. Brian was awarded Best Cinematography at the 2014 USC Film and Science Competition as well as Best Editing at the 2013 Ed Wood film festival. He currently studies Film Production at the University of Southern California’s School of Cinematic Arts. Brian is the Director of Photography for Leviathan.</p>
        <a href="http://www.imdb.com/name/nm4720533/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

<div id="michael-bio" class="row">
    <div class="col-sm-6">
        <img class="img-responsive bio" src="Team/Photos/MichaelRitter-s.jpg" />
    </div>
    <div class="col-sm-6">
        <h1 class="title">Michael Ritter</h1>
        <hr/>
        <h4 class="titlex">Editor</h4>
        <p>Michael Ritter is a prolific Film Editor. Michael was first drawn to the world of film while editing a short film project in high school. He decided soon after to pursue a career in filmmaking. Michael’s work has been recognized on films including It’s Like Gold for Alphies. He has edited several dozen student and independent films, and he is currently studying Film & Television Production at the USC School of Cinematic Arts, where he is crafting his Junior Film Thesis.</p>
        <a href="http://www.imdb.com/name/nm6903414/?ref_=fn_al_nm_2" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
    </div>
</div>

</div>
</div>
</section>

<?php
require_once "contact.php";
?>

<?php
require_once('php/footer-home.php');
?>

</body>
