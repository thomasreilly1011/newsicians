<!DOCTYPE html>
<html>
  <style>
    html, body {
      height: 100%;
      width: 100%;
      text-align: center;
      overflow: hidden;
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
      display: inline;
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

    img {
      margin-top: 5%;
      width: 150px;
      height: 150px;
    }

    p {
      font-family: sans-serif;
      font-size: 12px;
      margin: 0;
    }
  </style>

  <body>
    <form action="index.php">
      <a href="index.php"><img src="res/newsicians_logo.png"></img></a><br>
      <input class="input" type="text" placeholder="Username" name="Username"><br>
      <input class="input" type="text" placeholder="E-mail" name="email"><br>
      <input class="input" type="password" placeholder="Password" name="password"><br>
      <input class="input" type="password" placeholder="Confirm Password" name="cpassword"><br>
      <p>Already have an account? <a href="login.php">Log In</a></p>
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </body>
</html>
