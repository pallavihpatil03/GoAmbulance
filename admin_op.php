<?php

$con=mysqli_connect('localhost:3307','root','','databse');



if(isset($_POST['de-submit-c']))
{
	$id=$_POST['id'];
	$drivername=$_POST['drivername'];

	$sql="DELETE FROM `registration` WHERE id=$id and drivername='$drivername'";
	$result = mysqli_query($con,$sql);
	header('location:admin.php');
}

if(isset($_POST['in-submit-a']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$feed=$_POST['feedbk'];

	$sql1="INSERT INTO `feedback`(`id`,`name`,`email`,`feedbk`) VALUES ($id,'$name','$email','$feedbk')";
	$result = mysqli_query($con,$sql1);
	header('location:admin.php');
}

if(isset($_POST['de-submit-a']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];

	$sql2="DELETE FROM `feedback` WHERE id=$id and name='$name'";
	$result = mysqli_query($con,$sql2);
	header('location:admin.php');
}

if(isset($_POST['ins-submit-p']))
{
	$hid=$_POST['hid'];
	$nhame=$_POST['hname'];
	$haddress=$_POST['haddress'];
    $hphone=$_POST['hphone']
    $hcity=$_POST['hcity']

	$sql3="INSERT INTO `hospitals`(`hid`,`hname`,`haddress`,`hphone`,`hcity`) VALUES ($hid,'$hname','$haddress','$hphone','$hcity')";
	$result = mysqli_query($con,$sql3);
	header('location:admin.php');
}

if(isset($_POST['de-submit-p']))
{
	$pid=$_POST['hid'];
	$pname=$_POST['hname'];

	$sql4="DELETE FROM `hospitals` WHERE id=$pid and hname='$pname'";
	$result = mysqli_query($con,$sql4);
	header('location:admin.php');
}
?>