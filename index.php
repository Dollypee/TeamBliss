<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Blisscapital</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/login.css" type="text/css">

</head>

<body>
  <div id="container">
    <div id="logo">
     <img logo src="https://res.cloudinary.com/ottyhaq/image/upload/v1568702233/logo_p4pajp.png" alt="logo">
    </div>
    <div class="login-ui">
      <img business-deal src="https://res.cloudinary.com/dkyb7lx0u/image/upload/v1568659290/undraw_business_deal_cpi9_mnc3mq.png" alt="business deal">
    </div>
    <div class="wel-sec">
      <h2>Welcome Back</h2>
      <p id="wel-text">To stay connected to your finance dashboard,<br>please login with your username and password</p>
      <div class="form-container">
        <form action="validation.php" method="POST">
          <div id="us-container">
            <i class="fa fa-user icon"></i>

            <input type="text" id="username" name="username"
            placeholder="Username">
          </div>

          <div id="ps-container">
              <i class="fa fa-key icon"></i>

              <input type="password" placeholder="Password" id="password" name="password" required>
            </div>

          <input id="check" type="checkbox" checked><p id="rem">Remember me</p>
          <a href="#" id="forgot-p">Forgot Password?</a>
          <button id="login" name="submit" type="submit">Login now</button>
        </form>

        <p id="create">Don't have an account yet? <a href="register.php" id="signup"> Sign up</a></p>
      </div>
    </div>
  </div>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
