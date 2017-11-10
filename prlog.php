<?php

$u = $_POST['uid'];
$p = $_POST['pwd'];


include 'dbc.php';

$q = "select * from user where username = '$u' and password = '$p'";
$r = mysqli_query($c, $q);

$row = mysqli_fetch_array($r);

if($row['username'] == $u && $row['password'] == $p){

echo "login success welcome ".$row['username'];

}else{

header("location: ../login.php?login = error");

}



?>