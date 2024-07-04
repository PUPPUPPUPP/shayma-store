<?php

include("config.php");
if(isset($_POST["update"])){
    $NAME = $_POST['name'];
    $ID = $_POST['id'];
    $PRICE = $_POST["price"];
    $image_up = $_FILES['image'];
    $image_location = $_FILES["image"]["tmp_name"];
    $image_name = $_FILES["image"]["name"];
    $image_up = "img/".$image_name;
    $update = "UPDATE prod SET NAME = '$NAME', price = '$PRICE', image = '$image_up' WHERE id = '$ID'";
    mysqli_query($con, $update);
    if(move_uploaded_file($image_location, 'img/'.$image_name)){
        echo "<script>alert('done')</script>";
    }else{
        echo "<script>alert('invaild')</script>";
    }
    header('location: products.php');
}

?>