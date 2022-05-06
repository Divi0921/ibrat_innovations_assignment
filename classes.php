<?php
    include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bodys"><?php
                $querry = "SELECT * from classes";
                $result = mysqli_query($con,$querry);
                $row = mysqli_fetch_assoc($result);
               // $num = mysqli_fetch_rows($r);
            ?>
    <h1>Hi, Welcome Back!</h1>
    <div class="container">
        <h2><?php echo $row['class_name'];?></h2>
       <button><a href="index.php">Details</a> </button>
       <button><a href="plan.php"> Plans</a></button>
       <button><a href="classes.php"> Classes</a></button>
       <hr>
        <div class="details">
          <?php//  while($row){
              ?>
            <p> <b>Class Name</b> : <?php echo $row['class_name'];?></p>
            <p> <b>Price</b> : <?php echo $row['class_price'];?></p>
            <p> <b>Description</b> : <?php echo $row['class_short_description'];?></p>
            <p> <b>Class Date</b> : <?php echo $row['class_date'];?></p>
           
            <p> <b>Duration :</b> <?php echo $row['class_duration'];?></p>
            <p> <b>Class Member Limit</b> : <?php echo $row['class_member_limit'];?> </p>
            <p> <b>Class Level</b> : <?php echo $row['class_level'];?></p>
            <p> <b>Class Description :</b> <?php echo $row['class_description'];?></p>
            <p> <b>Class Benefits</b> : <?php echo $row['class_benefits'];?> </p>
            <p> <b>Class Cover :</b> <?php echo $row['class_cover'];?></p>
            <p> <b>Class Trainer</b> : <?php echo $row['class_trainer'];?> </p>
            <p> <b>Class Status</b> : <?php echo $row['class_status'];?></p>
            <button class="edit">Edit</button> <button class="delete">Delete</button>
            <?php
         // }
          ?>
        </div>
    </div>
          </div>
</body>
</html>