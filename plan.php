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
                $querry = "SELECT * from plans";
                $result = mysqli_query($con,$querry);
                $row = mysqli_fetch_assoc($result);
            ?>
    <h1>Hi, Welcome Back!</h1>
    <div class="container">
        <h2><?php echo $row['plan_name'];?></h2>
       <button><a href="index.php"> Details</a></button>
       <button><a href="plan.php"> Plans</a></button>
       <button><a href="classes.php">Classes</a> </button>
       <hr>
        <div class="details">
            
            <p> <b>Description</b> : <?php echo $row['plan_description'];?></p>
            <p> <b>Total Workouts</b> : <?php echo $row['plan_total_workouts'];?></p>
            <p> <b>Workouts Description </b> : <?php echo $row['plan_workouts_description'];?> </p>
            <p> <b>Average Duration :</b> <?php echo $row['plan_avg_duration'];?></p>
            <p> <b>Duration Unit</b> : <?php echo $row['duration_unit'];?> </p>
            <p> <b>Total Weeks</b> : <?php echo $row['plan_total_weeks'];?></p>
            <p> <b>Plan Image :</b> <?php echo $row['plan_image'];?></p>
            <p> <b>Plan Level</b> : <?php echo $row['plan_level'];?> </p>
            <p> <b>Status</b> : <?php echo $row['status'];?></p>
            <button class="edit">Edit</button> <button class ="delete">Delete</button>
        </div>
    </div>
</div>
</body>
</html>