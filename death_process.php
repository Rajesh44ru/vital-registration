<?php 
$name=$_POST['d_name'];
$ID=$_POST['Id_name'];
$Date_of_death=$_POST['date_of_birth'];
$place_of_death=$_POST['p_Of_death'];
$p_address=$_POST['p_address'];
$father_name=$_POST['f_name'];
$wh_name=$_POST['hw_name'];
$i_name=$_POST['hw_name'];
$id_i_name=$_POST['Id_I_name'];
$conn=mysqli_connect("localhost","root","","vrs");
if(!$conn){
    die("Error".mysqli_connect_error);
}
//echo "sucessfully";
$sql="INSERT INTO `death`(`Deceased_full_name`, `Id_deceased`, `date_of_birth`, `place_of_death`, 
`permanent_address`, `Father_name`, `wife_name/husband_name`, `Informantant_name`, `informant-iD`) VALUES ('$name','$ID','$Date_of_death','$place_of_death',
'$p_address','$father_name','$wh_name','$i_name','$id_i_name')";
mysqli_query($conn,$sql);
mysqli_close($conn);
//echo "inserted sucessfully";
header("Location:user_dashboard.php");









?>