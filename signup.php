<?php

session_start();


 include 'phpconnect.php';
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emai = $_POST['emai'];
    $uname = $_POST['uname'];
    $psword = $_POST['psword'];
    
    $query = "SELECT * FROM Bliss WHERE uname = '$uname'";
    
    $result = mysqli_query($con, $query);
    
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo "Username Already Taken";
    } else{
        $reg = "INSERT INTO Bliss(fname, lname, emai, uname, psword) VALUES('$fname', '$lname', '$emai', '$uname', '$psword')";
        mysqli_query($con, $reg);
        header('location:Reg_success.php');
    }
}
?>
