<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="logsign.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
    <section class="side">
        <img src="img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome back</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>

            <form class="login-form" action="loginhandle.php" method="POST">
                <div class="form-control">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-control">
                    <select name="std" class="option1">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>                   
                </div>

                <h3>Dont Have Account?<a href="signup.php">Sign Up</a>

            <button class="submit" >Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>