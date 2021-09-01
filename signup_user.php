<?php
include("include/connection.php");
  if (isset($_POST['sign_up'])) {
    $name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
    $email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
    $rand = rand(1, 2);
    $conformPass=htmlentities(mysqli_real_escape_string($con, $_POST['conform_pass']));
    if($name == ''){
      echo "<script>alert('We can not verify your name!')</script>";
    }
    if(strlen($pass) < 8){
      echo "<script>alert('Password should be minimum 8 characters!')</script>";
      exit();
    }
    if($pass!==$conformPass){
      echo"<script>alert('Passwords did not match')</script>";
      exit();
    }
    $check_email = "select * from user where user_email = '$email'";
    $run_email = mysqli_query($con, $check_email);

    $check = mysqli_num_rows($run_email);

    if($check == 1){
      echo "<script>alert('Email already exist, please try again!')</script>";
      echo "<script>window.open('signup.php', '_self')</script>";
      exit();
    }

    if($rand == 1){
      $profile_pic = "images/profpic1.png";
    }else if($rand == 2){
      $profile_pic = "images/profpic2.png";
    }

    $insert = "insert into user (user_name, user_pass, user_email, user_profile)
    values ('$name', '$pass', '$email', '$profile_pic')";

    $query = mysqli_query($con, $insert);

    if($query){
      echo "<script>alert('Congratulations $name, your account has been created
      successfully!')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
    }
    else{
      echo"$insert";
      echo"$name";
      echo "<script>alert('Registration failed, try again!')</script>";
      echo "<script>window.open('signup.php', '_self')</script>";
    }
  }

?>
