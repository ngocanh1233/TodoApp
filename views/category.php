
<div class="col-md-3">
      <p class="lead">TO DO CATEGORIES</p>
      <div class="list-group">
      <?php   	
		$sql = "SELECT * FROM categories";
		$result = $conn->query($sql);
	      	while($row = $result->fetch_assoc()) {
	      		?>
					<a style="background-color:<?php echo $row['cat_color']; ?> " href="index.php?case=detail_category&category=<?php echo $row['cat_id']; ?>" class="list-group-item"><?php echo $row['cat_name']; ?></a>
	      		<?php 
	      	}
       ?>
     </div>
</div>