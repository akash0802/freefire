<?php
require("db.php");
/*
$email = $_POST['email'];
$pass = $_POST['pass'];
*/
echo "gogo";
$email="ajju";
$pass="hgu";
$sql = "INSERT INTO `users` (`id`, `pass`) VALUES ('segtseyesy', 'esye')";
$result = mysqli_query($connection, $sql);
echo "hello";
if ($connection){
    echo "connected";
} 
if ($result){
    $showAlert = true;
    echo "Sucesssful";
}
?>