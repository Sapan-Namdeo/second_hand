<?php

session_start();
include('conn.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$dept=$_POST['dept'];
$pic=$_FILES['pic']['name'];
$tmp=$_FILES['pic']['tmp_name'];
$arr=explode(".",$pic);
$_SESSION['new']=$new=time().".".$arr;
move_uploaded_file($tmp,'userpics/'.$new);

$q="insert into item values ('$fname','$lname',$rollno,'$email','$gender',$phno,'$dept','$new')";
$res=mysql_query($q)or die(mysql_error());
$_SESSION['success']=true;
header('location:index.php');



}


?>