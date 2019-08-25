<?php

// Start the session
session_start();
require 'config.php';
require "MyDb.php";

$dentist = new MyDb();



$first_name =$_POST['first_name'];
$last_name=$_POST['last_name'];
$website=$_POST['website'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$license=$_POST['license'];
$license_num=$_POST['license_num'];
$years_practice=$_POST['years_practice'];
$gender=$_POST['gender'];
$degree=$_POST['degree'];
$major=$_POST['major'];
$school=$_POST['school'];
$year=$_POST['year'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$street=$_POST['street'];
$postal=$_POST['postal'];

$result=$dentist->add($first_name,$last_name,$website,$email,$phone);
$result2=$dentist->add2($license,$license_num,$years_practice,$gender);
$result3=$dentist->add3($degree,$major,$school,$year);
$result4=$dentist->add4($country,$state,$city,$street,$postal);
  

header( "location: index.php");



?>