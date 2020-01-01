<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/main.js"></script>

  <style>
    h1{
      font-family: Lucida Console;
      color: #243872;
      font-size: 60px;
      position: relative;
      display: inline-block;
      top: 0;
    }

    h2 {
      color: #243872;
      font-family: Lucida Console;
    }

    img {

    }

    .news p {
      font-family: monospace;
      color: #243872;
      font-size: 18px;
      margin-bottom: 50px;
      margin-left: 20px;
      margin-right: 20px;
    }

    .news {
      text-align: center;
      width: 100%;
    }

    .camp {
      width: 100%;
    }
  </style>

  <?php
    include("templates/head.php");
  ?>

  <body>
    <div class="news">
      <h1>News & Events</h1>
      <img src="res/camp.jpg" class="camp"><img>
      <h2>2019 Summer camps</h2>
      <p>This summer will see the return of Newsicians childrens Summer camps! All newsicians 18 years old and younger and invited to take part in the musical fun and games. This years camp will begin on June 16th to the 21st. As usual Newsicians summer camps provide an oppertunity for students to improve their skills through playing in large groups. However, during the camps we encourage students to have fun outside of the classroom with fun games and compettitions organised by our teachers.  Please show your interest by messaging us on our <a href="contact.php">contact page</a>. We look forward to seeing you there!</p>
    </div>
  </body>

  <?php
    include("templates/footer.php");
  ?>
</html>
