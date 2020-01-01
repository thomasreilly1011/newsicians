<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/maps.js"</script>

  </script>

  </script>
  <?php
    include("templates/head.php");
  ?>

  <style>
  .contact {
    width: 100%;
    position: relative;
    text-align: center;
    margin-top: 15px;
  }

  .contact-form {
    height: inherit;
    width: 100%;
    display: inline-block;
    position: relative;
    text-align: center;
  }

  .input{
    height: 28px;
    width: 300px;
    border-color: #243872;
    border-width: medium;
    font-size: 16px;
    text-align: left;
    position: relative;
    margin: 10px;
    padding: 3px;
  }

  .half{
    position: relative;
    height: 180px;
  }

  button {
    background-color: #243872;
    color: white;
    width: 300px;
    height: 28px;
    border-color: #243872;
    position: relative;
    margin: 10px;
    display: inline-block;
    float: left;
    margin-left: calc(50% - 150px);
    margin-top: 10px;
    font-size: 16px;
  }

  h1{
    font-family: Lucida Console;
    color: #243872;
    float: left;
    position: relative;
    margin-left: 20px;
    display: inline-block;
  }

  #map {
    height: 400px;
    width: 100%;
    position: relative;
   }
  </style>

  <body>
    <div style="height:calc(100vh - 312px + 35px); width: 100%;">
      <h1>Send Us A Message</h1>
      <div class="contact">
        <form class="contact-form" action="contactform.php" method="post">
          <div class="half" style="float: left; margin-left: calc(50% - 340px);">
            <input class="input" type="text" name="name" placeholder="Your Full Name"><br>
            <input class="input" type="text" name="email" placeholder="Your Email"><br>
            <select class="input" name="subject">
              <option class="input" label="I want to leave advice/comments about this Website"></option>
              <option class="input" label="I have a quesion about Newsicians" value="I have a quesion about Newsicians"></option>
              <option class="input" label="I am a student and I have a question" value="I am a student and I have a question about my homework"></option>
              <option class="input" label="I wish to apply for job at Newsicians" value="I wish to apply for job at Newsicians"></option>
              <option class="input" label="Other" value="Other"></option>
            </select>
          </div>
          <div class="half" style="float: right; margin-right: calc(50% - 340px);">
            <textarea style="height: 150px; "class="input" name="msg" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" name="submit">Send</button>
        </form>
      </div>
    </div>
    <div id="map" onload="initMap()"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2OmIbhjLmRPy-NDvObkhFmcnQPt58y3E&callback=initMap"></script>
  </body>

  <?php
    include("templates/footer.php");
  ?>
</html>
