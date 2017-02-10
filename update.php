<?php   	
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TODO - APP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-item.css" rel="stylesheet">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
</head>

<body>
    <div class="container">
        <center><h1><a href="index.php">TODO APP</a></h1></center>
        <div class="row">
           <div class="col-md-12">
             <p class="lead">UPDATE : </p>
<?php
$id= $_GET['item'];
	$sql = "SELECT * FROM todo_items where todo_item_id = {$id} ";
	$result = $conn->query($sql);
			$row = $result->fetch_assoc();

	?>
<form class="form-horizontal" role="form" method="post" action="inc/update_items.php?item=<?php echo $id; ?>">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="title" placeholder="Title" value="<?php echo $row['todo_item_title'];?>" required>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Description</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="description" required><?php echo $row['todo_item_description'];?></textarea>
		</div>
	</div>
	<div class="form-group">
		  <label for="category" class="col-sm-2 control-label">Select Catefory:</label>
		  <div class="col-sm-5">
			  <select class="form-control" name="category" id="sel1">
			   <?php   	
					$sql2 = "SELECT * FROM categories ";
					$result2 = $conn->query($sql2);
				      	while($row2 = $result2->fetch_assoc()) {
									if($row['cat_id'] == $row2['cat_id']){
									 	?>
											<option value="<?php echo $row2['cat_id'].'+'.$row2['cat_color']; ?>" selected><?php echo $row2['cat_name']; ?></option>
						      			<?php 
									 	}
									 else {
									 	?>
											<option value="<?php echo $row2['cat_id'].'+'.$row2['cat_color']; ?>" ><?php echo $row2['cat_name']; ?></option>
						      			<?php 
									 }
				      	}
			       ?>
			  </select>
			</div>
		</div>
       
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Update" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<! Will be used to display an alert to the user>
		</div>
	</div>
</form>
</div>
        </div>
    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                	
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
