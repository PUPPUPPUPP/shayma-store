<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>shayma store | edit product</title>
</head>
<body>
    <?php
    include('config.php');
    $up = mysqli_query($con, 'select * from prod where id = id');
    $ID = $_GET['id'];
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>edit products</h2>
                <img src="dotSTORE.png" alt="img" width="450px">
                <br>
                <input type="" name="id" placeholder="id" value="<?php echo $data['id']?>" class="x">
                <br>
                <input type="text" name="name" placeholder="name" value="<?php echo $data['name']?>">
                <br>
                <input type="text" name="price" placeholder="price" value="<?php echo $data['price']?>">
                <br>
                <input type="file" id="file" name="image" style="display:none" style="border-radius:15px" style="background-color:black">
                <label for="file">Update image</label>
                <br>
                <button type="Sumbit" name="update">edit product</button>
                <br><br>
                <a href="products.php" class="products">products</a>
            </form>
        </div>
        <p>Dev by Mazen Ahmed</p>
    </center>
</body>
</html>
