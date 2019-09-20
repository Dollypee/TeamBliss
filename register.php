<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link rel="stylesheet" href="css/signup.css" type="text/css">
</head>
<body>
    <div id="logo">
        <img src="https://res.cloudinary.com/ottyhaq/image/upload/v1568702233/logo_p4pajp.png" alt="logo">
    </div>
    <div class="wel-pics">
        <img src="https://res.cloudinary.com/dkyb7lx0u/image/upload/v1568923976/stripe_payment_kru0d0.png" alt="business-pics">
    </div>
    <div>
        <h2>Welcome to Bliss Capital</h2>
        <p id="par1">Let's get you all setup so you can start managing<br> your financial transactions without stress. We are<br> excited to have you!</p>

        <p id="par2">Already have an account? <a href="index.php"> Log in </a></p>
    </div>

    <div>
        <form action="signup.php" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" required>

            <label for="uname"> Username</label>
            <input type="text" name="uname" id="uname" required>

            <label for="emai">Email Address</label>
            <input type="email" name="emai" id="emai" required>

            <label for="psword">Password</label>
            <input type="password" name="psword" id="psword" required>

            <label for="cpsword">Confirm Password</label>
            <input type="password" name="cpsword" id="cpsword" required>

            <input id="rec-email" type="checkbox" checked>
            <p id="receivemail">Yes, I want to receive Bliss Capital's emails</p>

            <input id="terms" type="checkbox" checked>
            <p id="term">I agree to the <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Fees</a></p>

            <button name="submit" type="submit">Create Account</button>
        </form>


    </div>
</body>
</html>
