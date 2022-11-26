<?php
     $name="Warathep tanyaruk";
     $sid="6414421016";
     $program="Inpormation Technology";
     $wlecome="wlecome to web W02";
     $age=18;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web02 homework week2</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-center">
    <h1 class="text-center bg-green-400 text-8*l text-7xl">
        <?php echo "$name" ?>
     <div class="bg-purple-400">
        <h1 class="text-center text-red-600 text-5xl p-3">
            <?php echo "$sid"; ?>
        <h1 class="text-center text-red-600 text-5xl p-3">
            <?php echo "$program"; ?>
        <h1 class="text-center text-red-600 text-5xl p-3">
            <?php echo "$wlecome"; ?>
     </div>
       
    </h1>
    <?php
        if($age<18){
    ?>
        <h3 class="bg-green-200 m-10">You are under 18</h3>
    <?php 
        }else{
    ?>
       <div class="bg-blue-300 m-5 bg-clip-content p-6 bg-violet-600 border-4 border-violet-300 border-dashed text-center">
        <a href="Next01.php" class="text-7xl bg-bkue-200 m-5">Next</a>
       </div>
    <?php
        }
        ?>
</body>
</html>