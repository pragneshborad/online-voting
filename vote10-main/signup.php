<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="logsign.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>SignUp landing page</title>
</head>
<body>
    <section class="side">
        <img src="img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide details to proceed and have access to all our services</p>

            <form class="login-form" action="register.php" method="post" enctype="multipart/form-data">
                <div class="form-control">
                    <input type="text" name="username"  placeholder="Username" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control"  id="password">
                    <input type="password" name="pass" placeholder="Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-control" id="confirm_password">
                    <input type="password"  name="cpass" placeholder="Confirm Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-control">
                    <input type="tel" name="mobile" placeholder="Mobile Number" maxlength="10"  required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-control" id="img_user">
                    <input type="file" name="photo" accept="image/*" capture />
                </div>
                <div class="form-control">
                    <select name="std">
                        <option value="Group">Group</option>
                        <option value="Voter">Voter</option>
                      </select>
                </div>
                <h3>Already Have Account?<a href="login.php">LogIn</a>
                
                <button type="submit" class="submit" >SIGN UP</button>
            
            </form>
        </div>
    </section>

    <script src="pass_confirm.js"></script>
    
</body>
</html>