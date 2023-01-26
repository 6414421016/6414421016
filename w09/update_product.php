<?php
include 'condb.php';
$number_id=$_POST['pro_id'];
$f_name=$_POST['pro_name'];
$l_name=$_POST['detail'];
$_telephone=$_POST['price'];


$sql ="UPDATE pro set pro_name='$f_name',detail='$l_name'
,price='$_telephone' where pro_id='$number_id'";

if(mysqli_query($conn,$sql)){
    echo "<script>alert('แก้ไขลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_product.php';</script>";
}else{
    echo "error : " .$sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

mysqli_close($conn);

?>