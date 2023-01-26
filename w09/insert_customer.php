<?php
include "condb.php";
$f_name=$_POST["fname"];
$l_name=$_POST["lname"];
$tel = $_POST["telephone"];
$address=$_POST["address"];

$sql = "INSERT into customer(name,surname,telephone,address) values('$f_name','$l_name','$tel','$address')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกเรียบร้อย');</script>";
    echo "<script>window.location='show_customer.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกได้');</script>";
}
mysqli_close($conn);

?>