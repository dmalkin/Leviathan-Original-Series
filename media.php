<?php
	session_start();

	require_once "header.php";
?>

    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
<script>
$(function(){

  $('#home').hide();
    $('#home2').hide();

  $('#photos').click(function(){
      $('#home').fadeIn();
      $('#buttons1').hide();
  });
    $('#videos').click(function(){
        $('#home2').fadeIn();
        $('#buttons1').hide();
        $('#footer').hide();
    });
    $('#videos1').click(function(){
        $('#home2').fadeIn();
        $('#footer').hide();
        $('#home').hide();
    });
    $('#photos1').click(function(){
        $('#home').fadeIn();
        $('#footer').fadeIn();
        $('#home2').hide();
    });
    $('#close').click(function(){
        $('#home').hide();
        $('#home2').hide();
        $('#buttons1').fadeIn();
    });
    $('#close1').click(function(){
        $('#home').hide();
        $('#home2').hide();
        $('#buttons1').fadeIn();
        $('#footer').fadeIn();
    });
});
</script>

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
                      <a href="media.php" class="active" onclick="location.href='media.php'">Media</a>
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
                <img src="assets/img/media/bg.jpg" />
            </div>
        </div>
    </section>

    <section id="buttons1">
        <button id="photos" class="btn-lev animated hiding" data-animation="fadeIn" data-delay="300">Photos</button>
        <button id="videos" class="btn-lev animated hiding" data-animation="fadeIn" data-delay="300">Videos</button>
    </section>

 <section id="home" class="page1">
     <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
     <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
         <!-- The container for the modal slides -->
         <div class="slides"></div>
         <!-- Controls for the borderless lightbox -->
         <h3 class="title"></h3>
         <a class="prev">‹</a>
         <a class="next">›</a>
         <a class="close">×</a>
         <a class="play-pause"></a>
         <ol class="indicator"></ol>
         <!-- The modal dialog, which will be used to wrap the lightbox content -->
         <div class="modal fade">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" aria-hidden="true">&times;</button>
                         <h4 class="modal-title"></h4>
                     </div>
                     <div class="modal-body next"></div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default pull-left prev">
                             <i class="glyphicon glyphicon-chevron-left"></i>
                             Previous
                         </button>
                         <button type="button" class="btn btn-primary next">
                             Next
                             <i class="glyphicon glyphicon-chevron-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="row" id="news-content">
         <div class="col-xs-1"></div>
         <div class="col-xs-10" style="background-color: rgba(0, 0, 0, 0.5);">
             <div id="links" class="animated hiding" data-animation="fadeIn" data-delay="1000">
                 <br/>
                 <button style="float: right" id="close" class="btn-lev1 animated hiding" data-animation="fadeIn" data-delay="300">X</button>
                 <br style="clear: both"/>
                 <a href="assets/img/gallery/g1.jpg" title="Bertram" data-gallery>
                     <img class="media" src="assets/img/sm/g1.gif" alt="Bertram">
                 </a>
                 <a href="assets/img/gallery/g2.jpg" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g2.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g3.jpg" title="Peter" data-gallery>
                     <img class="media" src="assets/img/sm/g3.gif" alt="Peter">
                 </a>
                 <a href="assets/img/gallery/g4.jpg" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g4.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g5.jpg" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g5.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g6.png" title="Akero" data-gallery>
                     <img class="media" src="assets/img/sm/g6.gif" alt="Akero">
                 </a>
                 <a href="assets/img/gallery/g7.png" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g7.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g8.png" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g8.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g9.png" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g9.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g10.png" title="Alex" data-gallery>
                     <img class="media" src="assets/img/sm/g10.gif" alt="Alex">
                 </a>
                 <a href="assets/img/gallery/g11.png" title="Aiden and Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g11.gif" alt="Aiden and Anna">
                 </a>
                 <a href="assets/img/gallery/g12.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g12.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g13.png" title="Bertram and Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g13.gif" alt="Bertram and Anna">
                 </a>
                 <a href="assets/img/gallery/g14.png" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g14.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g15.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g15.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g16.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g16.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g17.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g17.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g18.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g18.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g19.png" title="Anna" data-gallery>
                     <img class="media" src="assets/img/sm/g19.gif" alt="Anna">
                 </a>
                 <a href="assets/img/gallery/g20.png" title="Berith" data-gallery>
                     <img class="media" src="assets/img/sm/g20.gif" alt="Berith">
                 </a>
                 <a href="assets/img/gallery/g21.png" title="Bertram" data-gallery>
                     <img class="media" src="assets/img/sm/g21.gif" alt="Bertram">
                 </a>
                 <a href="assets/img/gallery/g22.png" title="Bertram" data-gallery>
                     <img class="media" src="assets/img/sm/g22.gif" alt="Bertram">
                 </a>
                 <a href="assets/img/gallery/g23.png" title="Akero" data-gallery>
                     <img class="media" src="assets/img/sm/g23.gif" alt="Akero">
                 </a>
                 <a href="assets/img/gallery/g24.png" title="History" data-gallery>
                     <img class="media" src="assets/img/sm/g24.gif" alt="History">
                 </a>
                 <a href="assets/img/gallery/g25.png" title="History" data-gallery>
                     <img class="media" src="assets/img/sm/g25.gif" alt="History">
                 </a>
                 <a href="assets/img/gallery/g26.png" title="Aiden" data-gallery>
                     <img class="media" src="assets/img/sm/g26.gif" alt="Aiden">
                 </a>
                 <a href="assets/img/gallery/g27.png" title="Daemonae" data-gallery>
                     <img class="media" src="assets/img/sm/g27.gif" alt="Daemonae">
                 </a>
                 <a href="assets/img/gallery/g28.png" title="Bertram" data-gallery>
                     <img class="media" src="assets/img/sm/g28.gif" alt="Bertram">
                 </a>
             </div>
         </div><br/><br/>


         <div class="col-xs-1"></div>
</section>

<section id="home2" class="page">
    <div class="row videos" id="news-content">
        <div class="col-xs-1 col-lg-3 col-md-2"></div>
        <div class="col-xs-10 col-lg-6 col-md-8" style="background-color: rgba(0, 0, 0, 0.5);">
            <br/>
            <button style="float: right" id="close1" class="btn-lev1 animated hiding" data-animation="fadeIn" data-delay="300">X</button>
            <br style="clear: both"/><br/>
            <iframe style="align-content: center" class="animated hiding video" data-animation="fadeIn" data-delay="300" width="640" height="360" src="https://www.youtube.com/embed/voLKhaM2BUE" frameborder="0" allowfullscreen></iframe>
            <br style="clear:both" />
            <iframe style="align-content: center" class="animated hiding video" data-animation="fadeIn" data-delay="300" width="640" height="360" src="https://www.youtube.com/embed/HXIkn_TuGEI" frameborder="0" allowfullscreen></iframe>
            <br style="clear:both" />
            <iframe class="animated hiding video" data-animation="fadeIn" data-delay="300" width="640" height="360" src="https://www.youtube.com/embed/-d4cSuDzNOs" frameborder="0" allowfullscreen></iframe>
            <br style="clear:both" />
            <iframe class="animated hiding video" data-animation="fadeIn" data-delay="300" width="640" height="360" src="https://www.youtube.com/embed/ZZZuxt4NS1c" frameborder="0" allowfullscreen></iframe>
            <br/><br/><br/>
        </div>
        <div class="col-xs-1 col-lg-3 col-md-2"></div>
    </div>
</section>

    <br style="clear: both"/><br/><br/>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>


<?php
require_once "contact.php";
?>

<div id="footer">
    <?php
    require_once "php/footer-home.php";
    ?>
</div>
