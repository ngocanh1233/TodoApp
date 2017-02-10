<form class="form-horizontal" role="form" method="post" action="inc/insert_items.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="title" placeholder="Title" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="description" required></textarea>
		</div>
	</div>
	<div class="form-group">
		  <label for="category" class="col-sm-2 control-label">Select Catefory:</label>
		  <div class="col-sm-5">
			  <select class="form-control" name="category" id="sel1">
			   <?php   	
					$sql = "SELECT * FROM categories";
					$result = $conn->query($sql);
				      	while($row = $result->fetch_assoc()) {
				      		?>
								<option value="<?php echo $row['cat_id'].'+'.$row['cat_color']; ?>"><?php echo $row['cat_name']; ?></option>
				      		<?php 
				      	}
			       ?>
			  </select>
			</div>
		</div>
       
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Create" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>
</form>