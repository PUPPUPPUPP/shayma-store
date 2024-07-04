<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>shayma store | My Cart</title>
</head>

<style>
    .main{
        width: 40%;
    }
</style>
<header class="c">
        <a href="Mazen_ahmed#" class="my_name">shayma store</a><i class="fa-solid fa-clothes-hanger"></i>
        <nav class="navi">
            <a href="card.php"><i class="fa-solid fa-cart-shopping"></i>My Cart</a>
            <a href=""></a>
        </nav>
    </header>
<body>
    <?php
    include("config.php");
    $result = mysqli_query($con,"SELECT * FROM cart");
    while ($row = mysqli_fetch_array($result)) {
        echo"    
        <center>
        <main>
            <table class='table'>
                <thead>
                    <th scope='col'>Product name</th>
                    <th scope='col'>Product Price</th>
                    <th scope='col'> delete product</th>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td> <a href='del_card.php? id=$row[id]' class='btn btn-danger'>delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
      ";}
    ?>
    <center>
        <a href="shayma_store.php">back to shop</a>
    </center>
</body>