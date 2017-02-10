<form class="form-horizontal" role="form" method="post" action="inc/insert_category.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Category Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="title" placeholder="Category Name" value="" required>
		</div>
	</div>
    <div class="form-group">
		<label for="name" class="col-sm-2 control-label">Category Color</label>
		<div class="col-sm-10">
			<input class="jscolor" name="color" value="">
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