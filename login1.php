
 

 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <link rel="stylesheet" href="login1.css">
    
</head>
<body>
   
    <div class="login-container">
        <h2>Login</h2>
        <form action="connect1.php" method="post" >
            <input type="email" placeholder="Email" id="username" name="email" requird>
            <input type="password" placeholder="Password" id="password" name="password" requird>
            <p><a href="#">Forgot Password</a></p>
            <br>
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember Me</label>
            <br> <br>
            <input type="submit" value="Login">
        </form>
        
        <p>Don't have an account? <a href="signup1.html">Sign up</a></p>
    </div>
</body>
</html>
