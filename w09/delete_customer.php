<?php
include "condb.php";
$_ids=$_GET['number_id'];
$sql="DELETE from customer where number_id='$_ids'";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_customer.php';</script>";
}else{
    echo "error : " .$sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn);

?>