
 <div class="col-md-9">
	 <p class="lead">TO DO LIST</p>
	 <?php   	
		$sql = "SELECT * FROM todo_items order by todo_item_title ASC";
		$result = $conn->query($sql);
	      	while($row = $result->fetch_assoc()) {
	      		?>
	      			<div class="thumbnail" style="background-color:<?php echo $row['cat_color']; ?> ">
			             <div class="caption-full">
			                        <h4><a href="#"><?php echo $row['todo_item_title']; ?></a></h4>
			                        <p><?php echo nl2br($row['todo_item_description']); ?></p>
			                        <a href="update.php?item=<?php echo $row['todo_item_id']; ?>">Update</a> | <a href="inc/remove_items.php?item=<?php echo $row['todo_item_id']; ?>">Remove</a>
			        	 </div>
			         </div>
	      		<?php 
	      	}
       ?>
        
</div>