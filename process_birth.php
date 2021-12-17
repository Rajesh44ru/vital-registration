<?php
$f_name=$_POST['father_name'];
$f_c_number=$_POST['f_citizenship_number'];
$m_name=$_POST['mother_name'];
$m_c_number=$_POST['m_citizenship_number'];
$c_name=$_POST['child_name'];
$date=$_POST['date_name'];
$Gender=$_POST['gend'];
$p_address=$_POST['address_name'];
$b_address=$_POST['birthPlace_name'];
$gname=$_POST['g_name'];


$conn=mysqli_connect("localhost","root","","vrs");
if(!$conn){
    die("Error".mysqli_connect_error());
}

$sql=" INSERT INTO  `birth`(`Father_name`,`f_citizenship_number`,`MOther_name`,`M_citizenship_number`,`child_name`,`Date_of_birth`,`Gender`,`permanent_address`,
`Birth_palace`,`grand_father_name`)VALUES('$f_name','$f_c_number','$m_name','$m_c_number','$c_name','$date','$Gender','$p_address','$b_address','$gname')";
 mysqli_query($conn,$sql);
 mysqli_close($conn);
 header("LOcation:user_dashboard.php")




?>