<?php

 session_start();

  include 'phpconnect.php';

if (isset($_POST['submit'])){
  $uname = $_POST['username'];
  $psword = $_POST['password'];

  $query = "SELECT * FROM Bliss WHERE uname='$uname' AND psword='$psword'";

  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1){
    $_SESSION['uname'] = $uname;
    header("Location: home.php");
}else{
      header("Location:index.php");
    }
}

?>
