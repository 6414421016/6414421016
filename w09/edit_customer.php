<?php
include 'condb.php';
$id=$_GET['number_id'];
$sql="SELECT * from customer where number_id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter datails</title>
    <!-- Bootatrp css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class="container-xl form-control"> 
    <div class="row">
        <div class="col-sm-6">
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">แก้ไขข้อมูลลูกค้า</div> <br>
        <!-- Submit ข้อมูลไปยังฐานข้อมูล -->
        <form method="post" action="update_customer.php">

        <label for="">รหัส</label> <h1 style="display: inline; color:red;">(ไม่สามารถแก้รหัสได้)</h1>
        <input type="text" name="passwold" class="form-control" readonly value=<?=$row['number_id']?> > <br>
       

        <label for="">ชื่อ</label>
        <input type="text" name="fname" class="form-control" value=<?=$row['name']?>> <br>
        <label for="">นามสกุล</label>
        <input type="text" name="lname" class="form-control"value=<?=$row['surname']?>> <br>
        <label for="">เบอร์โทรศัพท์</label>
        <input type="number" name="telephone" class="form-control" value=<?=$row['telephone']?>> <br>
        <label for="">ที่อยู่</label>
        <input type="text" name="address" class="form-control"value=<?=$row['address']?>> <br>
        
        <input type="submit" value="update" class="">
        <a href="show_customer.php" class="btn btn-danger mb-1">Cancel</a>
    </form>
        </div>
    </div>
   </div> 
</body>
</html>