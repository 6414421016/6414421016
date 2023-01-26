<?php
include "condb.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show customer</title>
    <!-- Bootatrp css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
   <div class=""> 
    <div class="container-lg">
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">แสดงข้อมูลลูกค้า</div>
      
        <a href="fr_customer.php" class="btn btn-success mb-1">Add+</a>
        <div class="inline-block align-middle">
      <a href="show_product.php" class="btn btn-success mb-1">เพิ่มสินค้า</a>
      </div>
        <table class="table table-striped">
        <tr>
            <th>รหัสลูกค้า</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เบอร์โทรศัพท์</th>
            <th>ที่อยู่</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
      <?php
      $sql = "SELECT * from customer";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result)){
       ?>

        <tr>
            <td><?= $row["number_id"]?></td>
            <td><?= $row["name"]?></td>
            <td><?= $row["surname"]?></td>
            <td><?= $row["telephone"]?></td>
            <td><?= $row["address"]?></td>
            <td><a href="edit_customer.php?number_id=<?=$row["number_id"]?>" class="btn btn-warning mb-1">Edit</a></td>
            <td><a href="delete_customer.php?number_id=<?=$row["number_id"]?>" class="btn btn-danger mb-1"
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

<!--
onclick="Del(this.href);return false;"
    -->


<script language="JavaScript">
  function Del(mypage){
    var agree=confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
      window.location=mypage;
    }
  }
</script>
