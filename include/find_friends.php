<!DOCTYPE html>
<?php
  session_start();
  include("find_friends_function.php");

  if(!isset($_SESSION['user_email'])){
    header("location: index.php");
  }
  else {
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search for friends</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/find_people.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" href="#">
      <a class="navbar-brand" href="#">
        <?php
          $user = $_SESSION['user_email'];
          $get_user = "select * from user where user_email='$user'";
          $run_user = mysqli_query($con, $get_user);
          $row = mysqli_fetch_array($run_user);

          $user_name = $row['user_name'];
          echo "<a class='navbar-brand' href='../home.php?user_name=$user_name'>ChatApplication</a>";
        ?>
      </a>
      <ul class="navbar-nav">
        <li><a style="color: white; text-decoration: none; font-size: 20px;"
               href="../account_settings.php">Settings</a></li>
      </ul>
    </nav><br>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
        <form class="search_form" action="">
          <input type="text" name="search_query" placeholder="Search friends"
          autocomplete="off" required>
          <button class="btn" type="submit" name="search_btn">Search</button>
        </form>
      </div>
      <div class="col-sm--4"></div>
    </div><br><br>
    <?php search_user(); ?>
  </body>
</html>
<?php } ?>
