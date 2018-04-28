
<html>

<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signUp.css">
</head>

<body>
    <div id="MainDiv">
        <form action="signUpPhp.php" method="POST">
            
        <img src="logo.png" alt="wedding halls" id="logo">

        <p>
            <img src="horizintal.png" id="Hline">
        </p>

        <div>
            <label>First Name</label>
        </div>
        <div class="paddbot">
            <input type="text" id="firstName" name="firstName" value="" required>
        </div>


         <div>
            <label>Last Name</label>
        </div>
        <div class="paddbot">
            <input type="text" id="lastName" name="lastName" value="" required>
        </div>
        
        <div>
            <label>Enter Your Email Address</label>
        </div>
        <div class="paddbot">
            <input type="email" id="email" class="email" name="email" value="" required>
        </div>
        <div>
            <label>Re-Enter Your Email Address</label>
        </div>
        <div class="paddbot">
            <input type="email" id="re-email" class="email" name="re-email" value="" required>
        </div>


        <div>
            <label>Enter Your Password</label>
        </div>
        <div class="paddbot">
            <input type="password" id="password" class="password" name="password" value="" minlength="8" required>
        </div>
        <div>
            <label>Re-Enter Your Password</label>
        </div>
        <div class="paddbot">
            <input type="password" id="re-password" class="password" name="re-password" value="" minlength="8" required>
        </div>
        
        <div>
            <label>Enter Your Phone Number</label>
        </div>
        <div class="paddbot">
            <input type="tel" id="PhoneNo" name="phoneNo" value="">
        </div>

        <div>
            <label>City</label>
        </div>
        <div class="paddbot">
            <input type="text" id="city" name="city" value="">
        </div>

        <button type="submit">Submit</button>
    </form>

    </div>

</body>

</html>
