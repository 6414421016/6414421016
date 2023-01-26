<?php
include 'condb.php';
$pro_id=$_GET['pro_id'];
$sql="SELECT * FROM pro where pro_id='$pro_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
         <!-- Bootatrp css -->
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container-xl form-control"> 
    <div class="row">
        <div class="col-sm-6">
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">แก้ไขข้อมูลหนังสือ</div> <br>
        <!-- Submit ข้อมูลไปยังฐานข้อมูล -->
        <form method="post" action="update_product.php">


        <label for="">รหัส</label> <h1 style="display: inline; color:red;">(ไม่สามารถแก้รหัสได้)</h1>
        <input type="text" name="pro_id" class="form-control" readonly value=<?=$row['pro_id']?> > <br>
       

        <label for="">ชื่อหนังสือ</label>
        <input type="text" name="pro_name" class="form-control" value=<?=$row['pro_name']?>> <br>
       
        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">รายละเอียด</label>
             <textarea input type ="text" name="detail" class="form-control" id="exampleFormControlTextarea1" 
             rows="3" value=<?=$row['detail']?>></textarea> 
         </div>

      
        <!-- <label for="">รายละเอียด</label>
        <input type="text" name="lname" class="form-label" placeholder="...รายละเอียด" required> <br>
        -->
        <label for="">ราคาสินค้า</label>
        <input type="number" name="price" class="form-control" value=<?=$row['price']?> > <br>

       

        <input type="submit" class="btn btn-success mb-1" value="submit">
        <a href="show_product.php" class="btn btn-danger mb-1">Cancel</a>
    </form>
        </div>
    </div>
   </div> 
</body>
</html>