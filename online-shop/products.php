<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>shayma store | products</title>
</head>
<header class="c">
        <a href="Mazen_ahmed#" class="my_name">shayma store</a><i class="fa-solid fa-clothes-hanger"></i>
        <nav class="navi">
            <a href="index.php">Add products |</a>
            <a href="products.php">Products</a>
        </nav>
    </header>
<body>
    <center>
        <h3>all stock products</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM PROD");
    while ($row = mysqli_fetch_array($result)){
        echo "
         <center>
         <main>
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='$row[price]' style='margin: bottom 10px;'></p>
                    <a href='update.php? id=$row[id]' class='btn btn-primary'>edit product</a><a href='delete.php? id=$row[id]'  class='btn btn-danger'>delete product</a>
                </div>
            </div>
         </main>
         <center>
        ";
    }
    ?>




</body>
</html>