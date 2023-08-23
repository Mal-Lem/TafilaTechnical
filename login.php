<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="enter.php" method="post">
        <div class="img" style="text-align: center;">
        <img src="images/loginIMG.jpg" alt="">
        </div>
        <?php if(isset($_GET['error'])){  ?>
         <p class="error"><?php echo $_GET  ['error'];?></p>
         <?php
        }
        ?>
        <input type="text" id="username" name="username" placeholder="user Name">
        <input type="number" name="idnumber" placeholder="id Number">
        <button onclick="min()" type="submit">Enter</button>
    </form>
    <script src="app.js"></script>
</body>
</html>