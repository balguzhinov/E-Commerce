<?php
session_start();
require_once 'connectdb.php';

$username= $_POST['username'] ;
$password= md5($_POST['password']) ;
$check= mysqli_query($connect,"SELECT * FROM `customer` WHERE `username`='$username' AND `password` = '$password'");
if (mysqli_num_rows($check)>0){
$customer=mysqli_fetch_assoc($check);
$_SESSION['customer']=[
  "id"=>$customer['customer_id'],
  "fname"=>$customer['firstname'],
  "lname"=>$customer['lastname'],
  "email"=>$customer['email'],
  "phone"=>$customer['phone']
];
header('Location:../index.php');
//print_r($customer['firstname']);
}else {
  $_SESSION['message']='User is not found';
    header('Location:../login.php');
}
 ?>
