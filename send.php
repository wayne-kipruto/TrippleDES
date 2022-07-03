<?php
$host ="localhost";
$user="root";
$pass="";
$db="cryptography";

$con= new mysqli($host,$user,$pass,$db);
if(!$con) {
    echo" Failed to connect"; 
 }
$message=$_POST['msgBox'];
$email=$_POST['emailAddress'];
$phone=$_POST['phoneNumber'];

$stmt = "INSERT INTO `webform`(`msgBox`, `phoneNumber`, `emailAddress`) VALUES ('$message',$phone,'$email')";

$insert = mysqli_query($con,$stmt);
if(!$insert){
    echo "Failed to insert";
}
else {
    echo "Data inserted";
}

?>