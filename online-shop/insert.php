<?php

include("config.php");
if(isset($_POST["upload"])){
    $NAME = $_POST['name'];

    $PRICE = $_POST["price"];
 
    $IMAGE = $_FILES["image"];
    $image_location = $_FILES["image"]["tmp_name"];
    $image_name = $_FILES["image"]["name"];
    $image_up = "img/".$image_name;
    $insert = "INSERT INTO prod (name , price , image ) VALUES ('$NAME' , '$PRICE' , '$image_up')";
    mysqli_query($con, $insert);
    if(move_uploaded_file($image_location, 'img/'.$image_name)){
        echo "<script>alert('done')</script>";
    }else{
        echo "<script>alert('invaild')</script>";
    }
    header('location: index.php');
}

?>