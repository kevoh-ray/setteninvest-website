<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $phonenumber = $_POST['phonenumber'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE phonenumber = '$phonenumber' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, phonenumber, password, user_type) VALUES('$name','$email','$phonenumber','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="register_form.php" method="post">
      <form id="registration-form">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" id="name" name="name" required placeholder="enter your name">
      <input type="email" id="email" name="email" required placeholder="enter your email">
      <input type="phonenumber" id="phonenumber" name="phonenumber" required placeholder="enter your phone number">
      <input type="password" id="password" name="password" required placeholder="enter your password">
      <input type="confirmpassword" id="confirm-password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option></option>
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" id="register-button" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>
<script src="registration.js"></script>
<script src="after.js"></script>
<script src="button.js"></script>

</body>
</html>