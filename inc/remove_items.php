<?php
	include "../config.php";
	$id = $_GET['item'];
	$sql = "DELETE FROM todo_items WHERE todo_item_id={$id}";

	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully";
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
	header('location:../index.php');
?>