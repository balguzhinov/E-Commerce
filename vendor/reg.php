<?php
session_start();
require_once 'connectdb.php';
$fname= $_POST['fname'] ;

$lname= $_POST['lname'] ;

$username= $_POST['username'] ;

$email= $_POST['email'] ;

$phone= $_POST['phone'] ;

$password= $_POST['password'] ;

$password2= $_POST['password2'] ;
if ($password === $password2){

  if(mb_strlen($username)<5 || mb_strlen($username)>30){
    $_SESSION['message']='Unsuitable length for username';
    header('Location:../signup.php');
  }
  if(mb_strlen($password)<5 || mb_strlen($password)>30){
    $_SESSION['message']='Unsuitable length for password';
    header('Location:../signup.php');
  }
  if(mb_strlen($fname)<1 || mb_strlen($fname)>20){
    $_SESSION['message']='Unsuitable length for name';
    header('Location:../signup.php');
  }
  if(mb_strlen($lname)<1 || mb_strlen($lname)>20){
    $_SESSION['message']='Unsuitable length for surname';
    header('Location:../signup.php');
  }

  $mysql = new mysqli('localhost','root','root','online_market');

  $result=$mysql->query("SELECT  * FROM `customer` WHERE `username`='$username'");
  $customer = $result->fetch_assoc();
  if(count($customer)>0){
    $_SESSION['message']='Person with this username already exists';
      header('Location:../signup.php');
  }
  $result2=$mysql->query("SELECT  * FROM `customer` WHERE `phone`='$phone'");
  $customer2 = $result2->fetch_assoc();
  if(count($customer2)>0){
    $_SESSION['message']='Person with this phone already exists';
      header('Location:../signup.php');
  }
  $result3=$mysql->query("SELECT  * FROM `customer` WHERE `email`='$email'");
  $customer3 = $result3->fetch_assoc();
  if(count($customer3)>0){
    $_SESSION['message']='Person with this email address already exists';
      header('Location:../signup.php');
  }
$password = md5($password);
  $mysql->query("INSERT INTO `customer` (`email`,`firstname`,`lastname`,`password`,`phone`,`username`)
  VALUES('$email','$fname','$lname','$password','$phone','$username')");

  $mysql->close();
header('Location:../index.php');
} else {
  $_SESSION['message']='Password mismatch';
  header('Location:../signup.php');
}

 ?>
