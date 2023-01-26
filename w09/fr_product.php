<?php 
include "condb.php";
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
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">เพิ่มข้อมูลหนังสือ</div> <br>
        <!-- Submit ข้อมูลไปยังฐานข้อมูล -->
        <form method="post" action="insert_pro.php" name="form1" enctype="multipart/form-data">

        <label for="">ชื่อหนังสือ</label>
        <input type="text" name="fname" class="form-control" placeholder="...ชื่อ" required> <br>
      
        <label for="">ประเภทสินค้า</label>
        <select class="form-select" name="typeid" id="">
            <?php 
            $sql="SELECT * from type ORDER by type_name";
            $hand=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($hand)){
              ?>
              <option value="<?=$row['type_id'] ?>"><?=$row['type_name'] ?></option>
              <?php 
            }
               mysqli_close($conn);
              ?>
        </select>  
       

        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">รายละเอียด</label>
             <textarea input type ="text" name="lname" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
         </div>

      
        <!-- <label for="">รายละเอียด</label>
        <input type="text" name="lname" class="form-label" placeholder="...รายละเอียด" required> <br>
        -->
        <label for="">ราคาสินค้า</label>
        <input type="number" name="price" class="form-control" placeholder="...ราคาสินค้า" required> <br>
       
         
        <label for="">รูปภาพ</label>
        <input type="file" name="file01" required> <br>
       <!-- <button type="submit" class="btn btn-primary">submit</button>  -->
        

        <input type="submit" class="btn btn-success mb-1" value="submit"> 
        <a href="show_product.php" class="btn btn-danger mb-1">Cancel</a>
    </form>
        </div>
    </div>
   </div> 
</body>
</html>