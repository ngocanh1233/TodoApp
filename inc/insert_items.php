<?php
include "../config.php";
$title=$_POST['title'];
$description=$_POST['description'];
$cat_date =  $_POST['category'];
$cat_date_explode = explode("+",$cat_date);

$cat_id= $cat_date_explode[0];
$cat_color= $cat_date_explode[1];


$create_at=date("Y-m-d h:i:sa");
$sql = "INSERT INTO todo_items (todo_item_title, todo_item_description, cat_id,cat_color,create_at)
VALUES ('$title', '$description', '$cat_id','$cat_color','$create_at')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:../index.php');
 ?>