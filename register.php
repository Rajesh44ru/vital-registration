<?php
$conn=mysqli_connect("localhost","root","","vrs");
$Id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST["password"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$sql="INSERT INTO `registered`(`id`,`full_name`, `Email`, `password`, `mobile_no`, `address`) VALUES ('$Id','$name','$email','$pass','$mobile','$address')";
mysqli_query($conn,$sql);
header("Location:index.php");
?>