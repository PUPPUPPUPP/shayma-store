<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>shayma store</title>
</head>
<header>
        <a href="Mazen_ahmed#" class="my_name">shayma store</a><i class="fa-solid fa-clothes-hanger"></i>
        <nav class="navi">
            <a href="index.php">Add products |</a>
            <a href="products.php">Products</a>
        </nav>
    </header>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>shayma store</h2>
                <img src="dotSTORE.png" alt="img" width="450px">
                <br>
                <input type="text" name="name" placeholder="name">
                <br>
                <input type="text" name="price" placeholder="price">
                <br>
                <input type="file" id="file" name="image" style="display:none" style="border-radius:15px" style="background-color:black">
                <label for="file">Upload image</label>
                <br>
                <button type="Sumbit" name="upload">sumbit</button>
                <br><br>
                <a href="products.php" class="products">products</a>
            </form>
        </div>
        <p>Dev by Mazen Ahmed</p>
    </center>
</body>
</html>