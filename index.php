<!DOCTYPE html >

<html>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/slideshow.js"></script>
  <script type="text/javascript" src="js/maps.js"></script>


  <style>
    .why {
      height: 400px;
      width: 100%;
      text-align: center;
      object-fit: contain;
    }

    h1{
      font-family: Lucida Console;
      color: #243872;
      font-size: 60px;
      position: relative;
      display: inline-block;
      top: 0;
    }


    .reasons {
      background-color: #265593;
      height: calc(100% - 160px);
      padding: 10px;
      width: 100%
    }
    .reason {
      width: 30%;
      font-family: sans-serif;
      color: white;
      line-height: 25px;
      text-align: center;
      padding: 10px;
    }

    .team {
      text-align: center;
      width: 100%;
      object-fit: contain;
    }

    .team img {
      width: 100%;
      height: auto;
      object-fit: contain;
      margin: 0;
      padding: 0;
    }

    .reasons p {
      padding-top: 20px;
      font-size: 26px;
      font-family: monospace;
      color: white;
      line-height: 30px;
      margin: 0;

    }

    .button {
      font-family: monospace;
      font-size: 20px;
      padding: 20px;
      background-color: white;
      text-align: center;
      color: #243872;
      border-radius: 10px;
      display: inline-block;
      text-decoration: none;
      margin-top: 20px;
      margin-bottom: 20px;
      border: solid 2px #243872;
    }

    #map {
      height: 400px;
      width: 100%;
      position: relative;
    }
  </style>

  <?php
    include("templates/head.php");
  ?>

  <body onload="showSlide(0)">

    <div class="slideshow">

      <div class="slides fade">
        <img src="res/slide1.jpg">
      </div>

      <div class="slides fade">
        <img src="res/slide2.jpg">
      </div>

      <div class="slides fade">
        <img src="res/slide3.jpg">
      </div>

      <a class="prev" onclick="slideFlick(-1)">&#10094;</a>
      <a class="next" onclick="slideFlick(1)">&#10095;</a>

      <img src="res/icons/learn_more.png" class="learn_more" onclick="learnMore()">

    </div>

    <div class="why">
      <h1>Why Choose Us?</h1>
      <div class="reasons">
        <table style="width: 100%">
          <tr style="width: 100%">
            <td class="reason">We specialise in new beginners. All of our teachers are experts in bringing a quality understanding of music to anyone, young or old! We begin by placing an emphasis on learning by memory before later learning advanced music theory and reading. Name an instrument and we'll make sure you are a Maestro in no time!</td>
            <td class="reason" style="border-left: 1px solid white; border-right: 1px solid white;">We offer one on one, face to face interaction with our students. Students can avail of up to hour long tutorials with our amazing teaching staff in which they have the oppertunities to ask as many quesion as they like aswell as a chance to play side by side with a professional. We also provide group lessons in which you have the oppertunity to meet and play with fellow students.</td>
            <td class="reason">In addition to one on one lessons, Newsicians offers online web lessons. Our teachers upload videos, sheetmusic and many other resources that can aid our students in practising inbetween lessons. We recognise the imortance of the phrase "Practice makes Perfect!" and give our students the best resources to practice and listen to music every day.</td>
          </tr>
        </table>
      </div>
    </div>

    <div class="team">
      <h1>Learn From The Best<br>In Class</h1>
      <img src="res/teachers/cover.png"></img>
      <div class="reasons">
        <p>"All of our teachers are experts in their field.<br> They are driven to make a new generation of great musicians."</p>
        <a class="button" href="ourteam.php">Meet The Team!</a>
      </div>
    </div>

    <div class="team" style="margin-bottom: 20px;">
      <h1>Ready to get started?</h1><br>
      <a class="button" href="signup.php">Sign Up!</a>
    </div>

    <div id="map" onload="initMap()"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2OmIbhjLmRPy-NDvObkhFmcnQPt58y3E&callback=initMap"></script>

  </body>

  <?php
    include("templates/footer.php");
  ?>

</html>
