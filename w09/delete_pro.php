<?php
include "condb.php";
$_idt=$_GET['pro_id'];
$sql="DELETE from pro where pro_id='$_idt'";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_product.php';</script>";
}else{
    echo "error : " .$sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn);

?>