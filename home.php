<?php

session_start();
if(!isset($_SESSION['uname'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bliss capital Dashboard</title>
    <link rel="stylesheet" href="css/dash_success.css" type="text/css">
</head>
<body>
    <div id="logo">
        <img src="https://res.cloudinary.com/ottyhaq/image/upload/v1568702233/logo_p4pajp.png" alt="logo">
    </div>
    <a href="logout.php" class="logout">Logout</a>
    <h2><?php echo $_SESSION['uname']; ?>, Welcome to Your Dashboard</h2>
        <p>Congratulations! You're now a member of Bliss Capital.</p>
        <div id="main-img">
            <img src="https://res.cloudinary.com/ottyhaq/image/upload/v1568913460/undraw_work_time_lhoj_1_ucwghu.png" alt="work_time">
        </div>
</body>


</html>
