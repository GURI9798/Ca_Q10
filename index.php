<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>LPU</title>
</head>
<body>
    <div class="main-container">
        <div class="heading">
            <h3>ENTER THE SYSTEM</h3>
        </div>
        <div class="sub-heading">
            It is necessary to login in Your account in order to sign up for a course.
        </div>
        <div class="container">
            <div class="signup-container">
                <div class="heading">
                    <font color="grey">ARE YOU NEW?</font> REGISTER
                </div>
                <div class="form-container">
                    <form onsubmit="return checkform()" action="./register.php" method="POST">
                        <div class="form-input">
                            <input type="text" class="form-element" name="user_name" id="user_name" placeholder="User name" required/>
                        </div>
                        <div class="form-input">
                            <input type="email" class="form-element" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-input">
                            <input type="password" class="form-element" name="password" id="password" placeholder="Password" required/>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-element" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required/>
                        </div>
                        <div class="form-input">
                            <input type="submit" class="register_btn" name="register" id="register" value="Register"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="login-cotainer">
                <div class="heading">
                    <font color="white">ALREADY A STUDENT? LOGIN</font>
                </div>
                <form action="./login.php" method="POST">
                        <div class="form-input">
                            <input type="text" class="login-element" name="user_name" id="login_user_name" placeholder="User name" required/>
                        </div>
                        <div class="form-input">
                            <input type="password"  class="login-element" name="password" id="login_password" placeholder="Password" required/>
                        </div>
                        <div class="form-input">
                            <input type="submit" class="login_btn" name="login" id="login" value="Login"/>
                        </div>
                </form>
            </div>
        </div>
    </div>
<script src="./main.js"></script>
</body>
</html>