<?php

session_start();
$username=filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','root','online_market');

$result=$mysql->query("SELECT  * FROM `customer` WHERE `username`='$username' AND `password` = '$password'");

$customer = $result->fetch_assoc();
if(count($customer)==0){
  echo "User is not found";
  exit();

  header('Location: /');
}
setcookie('customer', $customer['firstname'], time()+ 3600*24,"/");
$mysql->close();
header('Location: /')
?>
