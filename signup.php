<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | SignUp</title>
</head>
<body onload="form.reset();">

    <form id="form" class="box" method="post">
        <h1>SignUp</h1>
        <input type="text" placeholder="username" name="user_name" required>
        <input type="password" id="password" placeholder="Choose Password" name="user_pass" required>
        <input type="email" placeholder="Enter email" name="user_email" required>
          <div class="form-group">
            <button type="submit" class="btn" name="sign_up">Sign Up</button>
          </div>
          <?php include("signup_user.php");?>
        <h5 class="forgot">Already have an account? <a href="index.php">signIn</a></h5>
          
    </form>

<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
  
}
.box{
  width: 400px;
  padding: 60px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: black;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"],.box input[type = "email"],.box input[type ="phone"]
{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #0004ff;
  padding: 14px 10px;
  width: 300px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus,.box input[type = "email"]:focus,.box input[type ="phone"]:focus
{
  width: 350px;
  border-color: #eff300;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #00ff0d;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

.box input[type = "submit"]:hover{
  background: #2ecc71;
}
.btn{
    border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #00ff0d;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}


.forgot {
  color: white;  
}

</style>
</body>
</html>