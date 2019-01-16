
 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet"> 
<link href="styles.min.css" rel="stylesheet"> 
<title>Schedule</title>
</head>

<body>
<div class="sign-in-body" style="background: url(images/sign-in-bg.jpg) no-repeat 50% 50% /cover">
    <div class="sign-in-form">
        <div class="form-logo">
            <img class="bg-img" src="images/sign-in-logo.jpg" alt="sign-in" />
        </div>
        <form class="sign-form">
            <input type="text" id="sign-name" name="sign-name" placeholder="Username or Email">
            <input id="sign-assword" name="sign-name" type="password" placeholder="Password">
            <div class="form-options">
                <div class="rem">
                    <input type="checkbox" name="vehicle" value="Bike"> Remember me
                </div>
                <div class="forgot-pw">
                    <a href="#">Forgot password ?</a> 
                </div>
            </div>
            <input class="btn-submit" type="submit" value="Login">
        </form>
        <div class="form-bottom">
            Don't have an account ? <a href="/sign-up.php">Sign up</a>
        </div>
    </div>
</div>
</body>

</html> 
