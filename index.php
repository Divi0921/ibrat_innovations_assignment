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
                $querry = "SELECT * from membership";
                $result = mysqli_query($con,$querry);
                $row = mysqli_fetch_assoc($result);
            ?>
    <h1>Hi, Welcome Back!</h1>
    <div class="container">
        <h2><?php echo $row['membership_name'];?></h2>
       <button><a href="index.php" active>Details</a> </button>
       <button><a href="plan.php"> Plans</a></button>
       <button><a href="classes.php"> Classes</a></button>
       <hr>
        <div class="details">
            
            <p> <b>Duration</b> : <?php echo $row['membership_duration'];?></p>
            <p> <b>Price</b> : <?php echo $row['membership_price'];?></p>
            <p> <b>Classes</b> : <?php echo $row['membership_classes'];?> </p>
            <p> <b>Discount Percentage :</b> <?php echo $row['membership_discount_percentage'];?></p>
            <p> <b>Offer Name</b> : <?php echo $row['membership_offer_name'];?> </p>
            <p> <b>Status</b> : <?php echo $row['membership_status'];?></p>
            <button class="edit">Edit</button> <button class="delete">Delete</button>
        </div>
    </div>
    </div>
</body>
</html>