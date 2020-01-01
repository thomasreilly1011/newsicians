<!DOCTYPE html>

<?php
  include("templates/head.php");
?>
<html>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/maps.js"></script>

  <style>
    #map {
      height: 400px;
      width: 100%;
      position: relative;
     }

     .building {
      height: calc(-265px + 100vh);
      width: 100%;
      object-fit: cover;
      object-position: center;
     }

     .about p {
      font-family: monospace;
      color: #243872;
      font-size: 18px;
      margin-top: 50px;
      margin-bottom: 50px;
      margin-left: 20px;
      margin-right: 20px;
     }

     .about {
       text-align: center;
       width: 100%;
     }
  </style>



  <body>
    <div class="about">
    <img src="res/building.jpg" class="building"></img>

    <p>Situated in Dublin's city center Newsicians is dedicated to developing the musicians of tomorrow. We pride ourselves on bringing people from zero background in music to becoming fluent in an art that is recognised in all cultures. At Newsicians we recognise that music is an art that is recognised in all cultures and a gift for life. We aim to bring this gift to new people every day.</p>
    <p>We specialise in new beginners. All of our teachers are experts in bringing a quality understanding of music to anyone, young or old! We begin by placing an emphasis on learning by memory before later learning advanced music theory and reading. Name an instrument and we'll make sure you are a Maestro in no time!</p>
    <p>We offer one on one, face to face interaction with our students. Students can avail of up to hour long tutorials with our amazing teaching staff in which they have the oppertunities to ask as many quesion as they like aswell as a chance to play side by side with a professional. We also provide group lessons in which you have the oppertunity to meet and play with fellow students.</p>
    <p>In addition to one on one lessons, Newsicians offers online web lessons. Our teachers upload videos, sheetmusic and many other resources that can aid our students in practising inbetween lessons. We recognise the imortance of the phrase "Practice makes Perfect!" and give our students the best resources to practice and listen to music every day.</p>
    </div>

    <div id="map" onload="initMap()"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2OmIbhjLmRPy-NDvObkhFmcnQPt58y3E&callback=initMap"></script>
  </body>

  <?php
    include("templates/footer.php");
  ?>
</html>
