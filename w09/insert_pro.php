<?php
include "condb.php";
$f_name=$_POST["fname"]; //ชื่อหน้าสือ
$l_name=$_POST["lname"];   //รายละเอียด
$tel = $_POST["price"]; //ราคาสินค้า

//อัพรูปภาพ
if (is_uploaded_file($_FILES['file01']['tmp_name'])){
    $new_image_name='pro_'.uniqid().".".pathinfo(basename($_FILES['file01']['name']),PATHINFO_EXTENSION);
    $image_upload_path = "./img/.".$new_image_name;
    move_uploaded_file($_FILES['file01']['tmp_name'],$image_upload_path);
} else {
    $new_image_name = "";
}

$sql = "INSERT into pro(pro_name,detail,price,image) values('$f_name','$l_name','$tel','$new_image_name')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกเรียบร้อย');</script>";
    echo "<script>window.location='show_product.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกได้');</script>";
}
mysqli_close($conn);

?>