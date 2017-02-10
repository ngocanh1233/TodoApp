<?php
	if(isset($_GET['case'])) {
		$case = $_GET['case'];
		switch ($case) {
		    case "detail_category":
		        include "views/detail_category.php";
		        break;
		    default:
		         include "views/404.php";
		}
	}
	else {
		include "views/todo_items.php";
	}
	
 ?>