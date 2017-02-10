<?php
include "../config.php";
$title=$_POST['title'];
$color=$_POST['color'];
$color2 = "#".$color;


$create_at=date("Y-m-d h:i:sa");
$sql = "INSERT INTO categories (cat_name,cat_color,cat_create_at)
VALUES ('$title', '$color2','$create_at')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:../index.php');
 ?>