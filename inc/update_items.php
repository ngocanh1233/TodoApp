<?php
include "../config.php";
$id= $_GET['item'];
$title=$_POST['title'];
$description=$_POST['description'];
$cat_date =  $_POST['category'];
$cat_date_explode = explode("+",$cat_date);

$cat_id= $cat_date_explode[0];
$cat_color= $cat_date_explode[1];


$create_at=date("Y-m-d h:i:sa");

$sql = "UPDATE todo_items SET todo_item_title='$title',todo_item_description='$description',cat_id='$cat_id',cat_color='$cat_color' WHERE todo_item_id={$id}";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header('location:../index.php');

 ?>