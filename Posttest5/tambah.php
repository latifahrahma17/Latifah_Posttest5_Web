<?php
require "config.php";

if(isset($_POST['rSubmit'])){
  $Fullname = $_POST['Fullname'];
  $rUsername = $_POST['rUsername'];
  $rPassword = $_POST['rPassword'];
  $konfirpass = $_POST['konfirpass'];
  $BirthDate = $_POST['BirthDate'];
  $Gender = $_POST['Gender'];
  $query = mysqli_query($db,"INSERT INTO pengguna (Fullname,rUsername,rPassword,konfirpass,BirthDate,Gender) VALUES ('$Fullname','$rUsername','$rPassword','$konfirpass','$BirthDate','$Gender)");
  if($query){
    header("Location:index.php");
  } else {
    echo "Tambah data error";
  }
}
?>