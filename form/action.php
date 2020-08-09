<?php
  $msg = '';
  $msgClass = '';
  if (filter_has_var(INPUT_POST, 'submit')) {
    // pull info
    $name = $_POST['firstname'].' '.$_POST['secondname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $favColor = $_POST['favcolor'];
    $gender = $_POST['gender'];
    $dept = $_POST['dept'];
    $pwd = $_POST['password'];

      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'INVALID EMAIL';
        $msgClass = 'alert-danger';
      }else {
        $msg = 'FORM SUBMITTED SUCCESSFULLY';
        $msgClass = 'alert-success';
      }
    }


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Personal Details</title>
     <link rel="stylesheet" href="style.css">
     <style>
       .container{
         background-color: <?php echo $favColor; ?>;
       }
     </style>

   </head>
   <body>
    <div class="container" >
      <h2>Thank you, <?php echo $name; ?></h2>
      <p>Please see your other details</p>
      <p><strong>Name: </strong><?php echo $name; ?></p>
      <p><strong>Email: </strong><?php echo $email; ?></p>
      <p><strong>Date of Birth: </strong><?php echo $date; ?></p>
      <p><strong>Favorite Color Code: </strong><?php echo $favColor; ?></p>
      <p><strong>Gender: </strong><?php echo $gender; ?></p>
      <p><strong>Department: </strong><?php echo $dept; ?></p>
      <a class="btn" href="form.php">Back to form</a>
    </div>
   </body>
 </html>
