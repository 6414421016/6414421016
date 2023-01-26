<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
     <!-- Bootatrp css -->
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class=""> 
    <div class="container-lg">
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">แสดงข้อมูลสินค้า</div>
        <a href="fr_product.php" class="btn btn-success mb-1">Add+</a>
        <div class="inline-block align-middle">
      <a href="show_customer.php" class="btn btn-success mb-1">เพิ่มลูกค้า</a>
      </div>
        <table class="table table-striped">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อหนังสือ</th>
            <th>รายละเอียด</th>
            <th>ราคาสินค้า</th>
            <th>รูปภาพ</th>


            <th>Edit</th>
            <th>Delete</th>
        </tr>
      <?php
      $sql = "SELECT * FROM pro";    // ,type where pro.pro_id =type.type_id 
      $hand=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($hand)){
       ?>

        <tr>
            <td><?= $row["pro_id"]?></td>
            <td><?= $row["pro_name"]?></td>
            <td><?= $row["detail"]?></td>
            <td><?= $row["price"]?></td>
            <td><img src="./img/<?=$row['image']?>" while='80px' hieght='100px'></td>
      
            
            <td><a href="edit_product.php?pro_id=<?=$row["pro_id"]?>" class="btn btn-warning mb-1">Edit</a></td>
            <td><a href="delete_pro.php?pro_id=<?=$row["pro_id"]?>" class="btn btn-danger mb-1"
            onclick="Del(this.href);return false;">Delete</a></td>
      
        </tr>
        <?php
      }
      mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
        ?>
    </table>
    
    </div>
   </div> 
</body>
</html>



<script language="JavaScript">
  function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
      window.location=mypage;
    }
  }
</script>
