

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup1.css">
    <script defer src="signup1.js"></script>
</head>
<body>
    <div class="signup-container">
        <h2>
            <span>Register</span>
            
        </h2>
        <form action="connect.php" method="post" id="form">
            <input type="text" placeholder="First Name" id="first-name"  name="firstname" type="text">
            <div class="error"></div>
            <input type="text" placeholder="Last Name" id="last-name" name="lastname" type="text">
            <div class="error"></div>
            <input type="text" placeholder="College Name" id="college-name" name="collegename" type="text">
            <div class="error"></div>
            <input type="email" placeholder="Email" id="email" name="email" type="text">
            <div class="error"></div>
            <input type="password" placeholder="Password" id="password" name="password" type="password">
            <div class="error"></div>
           <!--- <input type="re-enter password" placeholder="re-enter Password" id="re-password" name="repassword">-->
            <input type="submit" value="Register" >
        </form>
        <p>Already registered? <a href="login1.html">Log in</a></p>
</body>
</html>