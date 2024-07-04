<?php
include('config.php');
$ID=$_GET['id'];
$UP = mysqli_query($con, "select * from prod where id=$ID");
$data = mysqli_fetch_assoc($UP);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>shayma store | confirm</title>
</head>
<header class="c">
        <a href="Mazen_ahmed#" class="my_name">shayma store</a><i class="fa-solid fa-clothes-hanger"></i>
        <nav class="navi">
            <a href="card.php"><i class="fa-solid fa-cart-shopping"></i>  My Cart</a>
            <a href=""></a>
        </nav>
    </header>
    <style>
        input{
            display: none;
        }
    </style>
<body>
    <center>
        <div class='input'>
            <form action="insert.card.php" method="post">
            <h2>Do yo really want to buy this product??</h2>
            <input type="text" name="name" value="<?php echo $data['name']?>">
            <br>
            <input type="text" name="price" value="<?php echo $data['price']?>">
            <br>
            <button name="add" type="submit" class="bt btn-warning">confirm</button></form>
            <br>
            <a href="shayma_store.php" class="back">Back</a>
        </div>
   </center> 
</body>
</html>