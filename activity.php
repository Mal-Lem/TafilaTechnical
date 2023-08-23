<?php 
session_start();

if ((isset($_SESSION['id_number'])) && (isset($_SESSION['user_name']))) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Activity Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="activity">
     <div class="header">
     <h1>Hello,<span> <?php echo $_SESSION['name']; ?></span></h1> <br>
     <a href="logout.php"><h3>Logout</h3></a>
     </div>
     <div class="search">
        <input type="search" placeholder="Search" name="search">
     </div>
        <div class="title">
          <h2>Sport Area</h2>
          <h4>Tafila Technical University</h4>
        </div>
        <div class="box-container">
           <div class="box">
            <img src="images/sport1.jpg" alt="">
             <a href="calender.php"><p>PingPang</p></a>
           </div>
           <div class="box">
            <img src="images/sport2.jpg" alt="">
            <a href="calender.php">
            <p>Squassis</p>
            </a>
           </div>
           <div class="box">
            <img src="images/sport3.jpg" alt="">
            <a href="calender.php">
            <p>FootBall</p>
            </a>
           </div>
           <div class="box">
            <img src="images/sport4.jpg" alt="">
            <a href="calender.php">
            <p>VollyBoll</p>
            </a>
           </div>
           <div class="box">
            <img src="images/sport5.jpg" alt="">
            <a href="calender.php">
            <p>Swiming Pool</p>
            </a>
           </div>
           <div class="box">
            <img src="images/sport4.jpg" alt="">
            <a href="calender.php">
            <p>BasketBall</p>
            </a>
           </div>
        </div>
    
     </section>
     <script src="app.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>