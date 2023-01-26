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
        <div class="h4 text-center  alert alert-success  mb-4 mt-4" role="alert">เพิ่มข้อมูลลูกค้า</div> <br>
        <!-- Submit ข้อมูลไปยังฐานข้อมูล -->
        <form method="post" action="insert_customer.php">

        <label for="">ชื่อ</label>
        <input type="text" name="fname" class="form-control" placeholder="...ชื่อ" required> <br>
        <label for="">นามสกุล</label>
        <input type="text" name="lname" class="form-control" placeholder="...นามสกุล" required> <br>
        <label for="">เบอร์โทรศัพท์</label>
        <input type="number" name="telephone" class="form-control" placeholder="...เบอร์โทรศัพท์" required> <br>
        <label for="">ที่อยู่</label>
        <input type="text" name="address" class="form-control" placeholder="...ที่อยู่ปัจจุบัน" required> <br>
        <input type="submit" value="submit" class="">
        <a href="show_customer.php" class="btn btn-danger mb-1">Cancel</a>
    </form>
        </div>
    </div>
   </div> 
</body>
</html>