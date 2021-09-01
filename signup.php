<!DOCTYPE html>
<html>

<head>
<title>ADchat | SignUp</title>
	<link rel="icon" href="images/WhatsApp.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <img class="wave" src="images/wave.png">
    <div class="container">
        <div class="img">
            <img class="img-fluid" src="images/lion.svg" alt="">
        </div>
        <div class="login-content">
            <form method="POST">
                <div class="words word-2">
                    <span>A</span>
                    <span>D</span>
                    <span>C</span>
                    <span>h</span>
                    <span>a</span>
                    <span>t</span>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input required type="text" name="user_name" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="bi bi-envelope-fill"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg></i>
                    </div>
                    <div class="div">
                        <h5>email</h5>
                        <input required type="text" name="user_email" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input required id="user_pass" type="password" name="user_pass" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Conform</h5>
                        <input required id="conform_pass" type="password" name="conform_pass" class="input">
                    </div>
                </div>
                
                <div class="text-center small">
					<a href="index.php">Alredy have an account?</a>
				</div>
                <button name="sign_up" onclick="conformPass()" type="submit" class="btn">Login</button>
                <?php
                    include("signup_user.php");
                ?>
            </form>
        </div>
    </div>
    <script>
        
        const inputs = document.querySelectorAll(".input");


        function addcl() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });
    </script>

</body>

</html>