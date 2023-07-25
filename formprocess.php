<?php
include("configure.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`name`, `email`, `phone`, `branch`,`Query`) VALUES ('".$name."','".$email."',".$phone.",'".$branch."','".$message."')";
$query= mysqli_query($mysqli,$sql);
// if(!$query){
//     header("Location:contact.php");
//     exit();
// }
// else{
//     header("Location: contact.php?success=Thank You For Contacting Us");
//     exit();
// }

?>