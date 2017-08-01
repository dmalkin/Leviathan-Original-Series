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
        	<div id="inner1" class="animated hiding" data-animation="fadeIn" data-delay="300">
        	<img class="img-responsive bios" src="Team/Photos/Anna_JoyFlatz.jpg" id="anna" />
            <img class="img-responsive bios" src="Team/Photos/Peter_LiamHawley.jpg" id="peter" />
            <img class="img-responsive bios" src="Team/Photos/Aiden_EmmanuelBeniamine.jpg" id="aiden" />
            <img class="img-responsive bios" src="Team/Photos/Alex_ZacLarson.jpg" id="alex" />
            <img class="img-responsive bios" src="Team/Photos/Raymond_BlairSouter.jpg" id="raymond" />
            <img class="img-responsive bios" src="Team/Photos/Berith_TonyMandarich.jpg" id="berith" />
            <img class="img-responsive bios" src="Team/Photos/Mandy_ChaletLizetteBrannan.jpg" id="mandy" />
            <img class="img-responsive bios" src="Team/Photos/Bertram_Mark-s.jpg" id="bertram" />
            <img class="img-responsive bios" src="Team/Photos/Gabriel_HaydenDomenico-s.jpg" id="gabriel" />
            <img class="img-responsive bios" src="Team/Photos/Mephistopheles_Josiah-s.jpg" id="mephistopheles" />


            </div>
        </div>
      </div>

   <div id="bio-content" class="animated hiding" data-animation="fadeIn" data-delay="500">
      <div id="anna-bio" class="row">
      		<div class=" col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Anna_JoyFlatz.jpg" />
           </div>
           <div class=" col-sm-6">
           	<h1 class="title">ANNA</h1>
            	<hr/>
            	<p>Anna is the daughter of an angel named Bertram. She discovers that her survival is critical to ending the war on Earth between Heaven and Hell. Unaware of her father's true nature and the spiritual conflict surrounding her, Anna quickly realizes that the peaceful world she grew up in was only an illusion -- things are not as they seem.</p>

                <h1 class="title">Joy Flatz</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Joy Flatz is a film and theater actress from Ridgefield, Washington. She was nominated for an AriZoni Award for her portrayal of Beatrice in Ethington Theater’s Much Ado About Nothing in 2014. Joy made an appearance in the pilot episode of the TV show Grimm (NBC) and has appeared in numerous stage productions and commercials. She currently studies theater at Grand Canyon University and plays the lead female role of Anna in Leviathan.</p>
               <a href="http://www.imdb.com/name/nm4747617/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="peter-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Peter_LiamHawley.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">Peter</h1>
            <hr/>
            	<p>Peter is a fresh recruit of the Akero. Orphaned as a boy, Peter was taken in by his friend Alex, a fellow Akero. When Alex felt Peter was ready to learn of the violent world that exists near-invisibly within our own, he invited Peter to join the order of the Akero, which gave Peter his first sense of family-like belonging, but also a great burden of responsibility.</p>

                <h1 class="title">Liam Hawley</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Liam Hawley began acting in student and independent films in 2012. He has starred in short films including Dearly Departed and Dog Days, which won the F. Miguel Valenti Distinguished Capstone Award in 2014. Liam has also appeared in commercials and web series, and he performs in the comedic web series Dudes, which consists of sketch comedy and improvisation. Most recently, Liam starred in the feature film Teen Warlock directed by David DeCoteau, and co-starred in an episode of the Discovery ID series Cell Block Sisterhood, both set to premiere in 2015. Liam plays the role of the newly-inducted Akero, Peter, in Leviathan.</p>
                <a href="http://www.imdb.com/name/nm6415574/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="aiden-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Aiden_EmmanuelBeniamine.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">Aiden Clark</h1>
            	<hr/>
            	<p>Aiden Clark, a fallen angel, is a lieutenant in the ancient order of The Daemonae. He serves under Commander Berith, alongside other demons such as Mephistopheles. Aiden, who fell far from home in heaven, is not pleased with his current status, and seeks to re-define the world around him to work in his favor, often in seemingly conflicting ways.</p>

                <h1 class="title">Emmanuel Beniamine</h1>
                <hr/>
                <h4 class="titlex">Actor / Producer</h4>
                <p>Emmanuel Beniamine is an Actor and Producer who currently lives in Phoenix, Arizona. He first began acting at a young age in school programs and local community plays, and he sang in a choir in his early teens. In High School, Emmanuel worked alongside his father in his family’s business -- a full digital photo lab and studio. It was his work in photography that fueled his creativity and introduced him to the world of film, acting and storytelling. Emmanuel has appeared in short films including The Composer, Liv and The Heist. He currently studies Stanislavsky methods of acting with Brandy Hotchner at the Arizona Actors Academy. Emmanuel plays Aiden in Leviathan, and he is also an Associate Producer on the Show.</p>
               <a href="http://www.imdb.com/media/rm1786508032/nm6903403?ref_=nmmd_md_pv" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="raymond-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Raymond_BlairSouter.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">Raymond</h1>
            	<hr/>
            	<p>Raymond is the leader of his Akero cell. He has been on the front lines of the ongoing war between Heaven and Hell for many years, and in some ways has also become jaded to their cause. In spite of this, he cares deeply for his team, taking each loss personally. However, it is his search for comfortable safety that makes his team the most vulnerable.</p>

                <h1 class="title">Blair Souter</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Blair is an actor and philanthropically-minded inventor. Blair’s interest in acting began at the young age of 7 when he would memorize favorite lines from Ace Ventura and quote them at the dinner table and around town (to the embarrassment and excitement of his family). Blair graduated from the University of California Los Angeles (UCLA) with a degree in Microbiology, Immunology, and Molecular Genetics, has performed work in intellectual property rights for developing advanced technologies, and more recently has found a path to develop his passion for acting. Blair’s professional debut in performance came on stage in improv comedy. He now performs regularly with a Jesterz, a Phoenix-based improv comedy troupe, and he made his film debut as Raymond in Leviathan.</p>
               <a href="http://www.imdb.com/name/nm6903404/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="alex-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Alex_ZacLarson.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">Alex</h1>
            	<hr/>
            	<p>Alex is Peter’s best friend and lieutenant in Raymond's Akero group. Alex took Peter in as a young child, and cares deeply for his friend, later recruiting him to serve alongside himself in the Akero. Alex is a servant-leader, who willingly puts the needs of the Akero ahead of his own. Yet he struggles to serve in his role with patience.</p>

                <h1 class="title">Zac Larson</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Zac Larson is an actor who frequently performs with Collective Chaos Comedy, which was just recently voted Phoenix's top Improv Troupe. Zac has also starred in several independent films including Hood Man, The Voss Code, and Pieces of Mary Jane. He is currently completing his two-year Meisner Technique acting studies with Matt Dearing and Thomas DeMott (who studied under William Esper in New York). </p>
               <a href="http://www.imdb.com/name/nm6903405/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="berith-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Berith_TonyMandarich.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">Berith</h1>
            	<hr/>
            	<p>Berith is the leader of the Daemonae on Earth. He is brutal and tolerates neither failure nor cowardice. Berith strives to dominate the world of men and will do so by any means necessary. There are few he fears, and even fewer who can match him in a brawl. Given his position of power, he will also stop at nothing to preserve his reign.</p>

                <h1 class="title">Tony Mandarich</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Tony Mandarich is a former NFL offensive lineman who played for the Green Bay Packers and Indianapolis Colts, twice appearing on the cover of Sports Illustrated in 1989 and 1992. He is the only football player to make the All Madden Team while still attending college at Michigan State University and earned Comeback Player of the Year in 1996 with the Indianapolis Colts. Tony has made appearances in several sports documentaries and an independent feature film. Tony currently lives and works in Phoenix as a photographer.</p>
               <a href="http://www.imdb.com/name/nm5373179/?ref_=fn_al_nm_2" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="mandy-bio" class="row">
      		<div class="col-sm-6">
            	<img class="img-responsive bio" src="Team/Photos/Mandy_ChaletLizetteBrannan.jpg" />
           </div>
           <div class="col-sm-6">
           	<h1 class="title">MANDY</h1>
            	<hr/>
            	<p>Mandy is a young girl who is rescued by the Akero. After witnessing a violent attack by the Daemonae in which her parents were killed, Mandy holds information that is vital to Heaven’s success against the Forces of Hell. Feeling alone and afraid, Mandy has difficulty trusting any of her new friends and protectors.</p>

                <h1 class="title">CHALET LIZETTE BRANNAN</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Chalet has appeared in Television Shows including The Sparrows: Nesting, Paranormal, and the upcoming thriller The Trees. Chalet began acting and modeling at the age of 6, and has been recognized for her talent by awards including the Los Angeles Nollywood Film Awards "Young Artist Award" in 2014. Chalet will be playing the character "Mandy" in Leviathan</p>
               <a href="http://www.imdb.com/name/nm5192551/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="bertram-bio" class="row">
          <div class="col-sm-6">
              <img class="img-responsive bio" src="Team/Photos/Bertram_Mark-s.jpg" />
           </div>
           <div class="col-sm-6">
            <h1 class="title">Bertram</h1>
              <hr/>
              <p>Bertram is an angel sent by God to serve the Akero and discern Daemonae from the innocent. Bertram left Raymond’s Akero cell in order to protect his family, most importantly, Anna. The Daemonae have finally found Bertram and after years of hiding, Bertram must face his enemy at his doorstep.</p>

                <h1 class="title">Mark Stoddard</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Mark Stoddard is an award-winning Director, Actor, Playwright and Educator, and holds a Master's Degree in Educational Theater from New York University. He has received numerous ‘AriZoni – Excellence in Theater’ nominations and awards for performing and directing. Mark has directed more than 200 main stage plays, musicals, and original works on stages across Arizona. He is also an award-winning playwright, and his original works have been performed both throughout the US and abroad. He is currently adapting many of his original stage pieces for film. </p>
               <a href="http://www.imdb.com/name/nm6903406/?ref_=fn_al_nm_5" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="gabriel-bio" class="row">
          <div class="col-sm-6">
              <img class="img-responsive bio" src="Team/Photos/Gabriel_HaydenDomenico-s.jpg" />
           </div>
           <div class="col-sm-6">
            <h1 class="title">Gabriel</h1>
              <hr/>
              <p>The Archangel Gabriel has been sent to earth with one task: guide Peter and Anna to safety. Gabriel seeks out one of his brothers, Raphael, and his Akero cell to protect Anna from the Daemonae threat.</p>

                <h1 class="title">Hayden Domenico</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Hayden first began acting at a young age in several youth theaters in Phoenix, Arizona. He has performed on stage in roles including "Tom" in Tom Sawyer, "Chino" in West Side Story, and "Sid Bernstein" in Curtain the Musical, and has appeared in several independent films including Closer than a Brother and Easily Amused Productions' Silent Echo. Hayden currently studies Theater at Grand Canyon University where he has received formal training in the Stanislavsky Method.</p>
               <a href="http://www.imdb.com/name/nm3790261/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
           </div>
      </div>

      <div id="mephistopheles-bio" class="row">
          <div class="col-sm-6">
              <img class="img-responsive bio" src="Team/Photos/Mephistopheles_Josiah-s.jpg" />
           </div>
           <div class="col-sm-6">
            <h1 class="title">Mephistopheles</h1>
              <hr/>
              <p>Mephistopheles is a lieutenant in the ancient order of The Daemonae where he serves under Commander Berith. Mephistopheles constantly undermines Aiden’s authority and seeks Berith’s approval. It has taken him centuries to work up through the Demon ranks, and he will stop at nothing to defeat the angels that were once his brothers, and the God who was once his Lord.</p>

                <h1 class="title">Josiah Burgess</h1>
                <hr/>
                <h4 class="titlex">Actor</h4>
                <p>Josiah Burgess is an actor from Greenville, South Carolina. After living in Los Angeles for nearly 3 years, he hitchhiked his way to Phoenix, where has appeared in several independent films including Alabama Smith, Have a Nice Flight, and Blind Vision. Josiah is currently involved in a handful of short films and music videos. He plays Mephistopheles in Leviathan.</p>
               <a href="http://www.imdb.com/name/nm6570704/?ref_=fn_al_nm_1" target="_blank"><img class="img-responsive inlineBlock" src="assets/img/icons/IMDb_Logo.png" /></a>
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
