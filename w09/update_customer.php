<?php
include 'condb.php';
$number_id=$_POST['passwold'];
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$_telephone=$_POST['telephone'];
$_address=$_POST['address'];

$sql ="UPDATE customer set name='$f_name',surname='$l_name'
,telephone='$_telephone',address='$_address' where number_id='$number_id'";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('แก้ไขลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_customer.php';</script>";
}else{
    echo "error : " .$sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

mysqli_close($conn);

?>