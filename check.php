<?php
session_start();
$fname=filter_var(trim($_POST['fname']),FILTER_SANITIZE_STRING);

$lname=filter_var(trim($_POST['lname']),FILTER_SANITIZE_STRING);

$username=filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);

$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

$phone=filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);

$password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password2=filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);


if(mb_strlen($username)<5 || mb_strlen($username)>30){

  echo "Unsuitable length for username";
  exit();
}
if(mb_strlen($password)<5 || mb_strlen($password)>30){
  echo "Unsuitable length for password";
  exit();
}
if(mb_strlen($fname)<1 || mb_strlen($fname)>20){
  echo "Unsuitable length for name";
  exit();
}
if(mb_strlen($lname)<1 || mb_strlen($lname)>20){
  echo "Unsuitable length for surname";
  exit();
}
if($password!=$password2){
  echo "Password mismatch";
  exit();
}


$mysql = new mysqli('localhost','root','root','online_market');

$result=$mysql->query("SELECT  * FROM `customer` WHERE `username`='$username'");
$customer = $result->fetch_assoc();
if(count($customer)>0){
  echo "Person with this username already exists";
  exit();
}
$result2=$mysql->query("SELECT  * FROM `customer` WHERE `phone`='$phone'");
$customer2 = $result2->fetch_assoc();
if(count($customer2)>0){
  echo "Person with this phone already exists";
  exit();
}
$result3=$mysql->query("SELECT  * FROM `customer` WHERE `email`='$email'");
$customer3 = $result3->fetch_assoc();
if(count($customer3)>0){
  echo "Person with this email adress already exists";
  exit();
}

$mysql->query("INSERT INTO `customer` (`email`,`firstname`,`lastname`,`password`,`phone`,`username`)
VALUES('$email','$fname','$lname','$password','$phone','$username')");

$mysql->close();
header('Location: /');
?>
