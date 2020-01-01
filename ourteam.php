<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/main.js"></script>

  <style>
    div {
      width: 100%;
      text-align: center;
      padding: 0;
      margin: 0;
    }

    .team{
        width: 100%;
        height: auto;
        object-fit: contain;
        margin: 0;
        padding: 0;
    }

    h1{
      font-family: Lucida Console;
      color: #243872;
      font-size: 60px;
      position: relative;
      display: inline-block;
      top: 0;
    }

    .profile {
      float: right;
      position: relative;
      width: 300px;
      height: 300px;
    }

    .teacher {
      width: 100%;
      height: 300px;
      text-align: center;
      border-top: solid 2px #243872;
      margin-top: 5px;
      padding-top: 5px;
    }

    .teacher h3 {
      color: #243872;
      font-family: Lucida Console;
    }

    .teacher h2 {
      color: #243872;
      font-family: Lucida Console;
    }

    .teacher p {
      color: #243872;
      font-family: monospace;
    }

    .text {
      float: left;
      position: relative;
      width: calc(100% - 300px);
    }

  </style>

  <?php
    include("templates/head.php");
  ?>

  <body>
    <div>
      <h1>Meet The Team</h1>
      <img src="res/teachers/cover.png" class="team"></img>
    </div>

    <div class="teacher">
      <div class="text"><h2>Joe Smith</h2>
      <h3>Piano</h3>
      <p>""</p></div>
      <img class="profile" src="res/teachers/piano.jpg"></img>
    </div>
    <div class="teacher">
      <div class="text" style="float: right"><h2>Steven Matthews</h2>
      <h3>Violin</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/violin.jpg" style="float: left"></img>
    </div>
    <div class="teacher">
      <div class="text"><h2>James Williams</h2>
      <h3>Cello & Viola</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/cello.jpg"></img>
    </div>
    <div class="teacher">
      <div class="text" style="float: right"><h2>Daniel Woolley</h2>
      <h3>Guitar</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/guitar.jpg" style="float: left"></img>
    </div>
    <div class="teacher">
      <div class="text"><h2>Vickie Richards</h2>
      <h3>Percussion</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/percussion.jpg" ></img>
    </div>
    <div class="teacher">
      <div class="text" style="float: right"><h2>Mary Foley</h2>
      <h3>Singing</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/singing.jpg" style="float: left"></img>
    </div>
    <div class="teacher">
      <div class="text"><h2>Ray Brennan</h2>
      <h3>Brass</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/trumpet.jpg" ></img>
    </div>
    <div class="teacher">
      <div class="text" style="float: right"><h2>Ruben Mclaughlin</h2>
      <h3>Double Bass</h3>
      <p>"Quote"</p></div>
      <img class="profile" src="res/teachers/double-bass.jpg" style="float: left"></img>
    </div>
  </body>

  <?php
    include("templates/footer.php");
  ?>
</html>
