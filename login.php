<script>
window.onload = function() {
<?php
if (isset($_GET["error"])) {
?>
alert('<?=str_replace("'","\\'",$_GET["error"])?>');
<?php
}
?>
}
</script>

<html>
<head>
    <meta charset="utf-8">
    <title>Booking Wedding Halls</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="loginPhp.php" method="POST">
    <div id="MainDiv">
        <img src="logo.png" alt="Wedding Halls" id="logo">

    
        <p>
            <img src="horizintal.png" id="Hline">
        </p>
        
        <div>
            <label for="email">Email Address</label>
        </div>
        <div class="paddbot">
            <input type="email" id="email" name="email" value="" required>
        </div>
        
        
        <div>
            <label for="password">Your Password</label>
        </div>
        <div class="paddbot">
            <input type="password" id="password" name="password" value="" required>
        </div>

        <div class="paddbot">
          <!--  <a href="https://ecc-test-aseelmfili.c9users.io/forgetPass.php">Forgot password?</a> -->
        </div>
        
        

        <div class="paddbot">
            <button class="btn" type="submit">Sign In</button>
        </div>
    </form>
    
    
        <div class="paddbot">
            <span>if you don't have an account please sign up here</span>
        </div>
        <div class="paddbot">
            <button class="btn" type="button" onclick="window.location.href='https://cpit-435-aseelmfili.c9users.io/signUp.php'">Sign up</button>
        </div>
   
    
        <div class="paddbot">
            <span>or you can view the halls from here</span>
        </div>
        <div class="paddbot">
            <button class="btn" type="button" onclick="window.location.href='https://cpit-435-aseelmfili.c9users.io/viewHall.html'">View Halls</a></button>
        </div>
    </div>
    
     </div>
</body>

</html>