<?php


session_start();
// chect the reequest method in here
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $u = $_POST['uid'];
$p = $_POST['pwd'];
 }




include 'dbc.php';

$q = "select * from user where username = '$u' and password = '$p'";
$r = mysqli_query($c, $q);

$row = mysqli_fetch_array($r);

if($row['username'] == $u && $row['password'] == $p){

$_SESSION['up'] = $u;

header("location: ../profile.php?login = success");

}else{

header("location: ../login.php?login = error");

}



?>
