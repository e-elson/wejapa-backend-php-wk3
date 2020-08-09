<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Details</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="alert-danger" id="error"></div>
      <form class="" id="form" action="action.php" method="post">
          <div class="form-group">
          <strong><label for="firstname">First Name</label><br></strong>
          <input placeholder="First Name"class="form-control" type="text" name="firstname" id="firstname"><br>
          <strong><label for="secondname">Second Name</label></strong><br>
          <input class="form-control" placeholder="Second Name" type="text" name="secondname" id="secondname"><br>
          <strong><label for="email">Email</label></strong><br>
          <input type="text" name="email" id="email"><br>
          <strong><label for="dateofbirth">Date of Birth</label></strong><br>
          <input type="date" name="date" id="dateID" max="<?php echo date("Y-m-d"); ?>"><br>
          <strong><label for="favcolor">Favorite Color</label></strong><br>
          <input class="" type="color" name="favcolor" id="color"><br>
          <strong><label for="">Gender</label></strong><br>
          <input class="" type="checkbox" name="gender" id="male" value="Male">
          <label for="male">Male</label>
          <input class="" type="checkbox" name="gender" id="female" value="Female">
          <label for="female">Female</label><br>
          <strong><label for="dept">Department</label></strong><br>
          <select class="form-control" name="dept" id="dept">
            <option value="">Select an Option</option>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Stuff">Stuff</option>
          </select><br>
          <strong><label for="password">Password</label></strong>
          <input type="password" name="password" value="" id="pwd">
          <input class="submit" type="submit" name="submit" value="Submit">

        </div>
      </form>
      </div>
      <script src="script.js"></script>
  </body>
</html>
