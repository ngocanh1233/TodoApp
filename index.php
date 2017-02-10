<?php
	include 'config.php';
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
             <p class="lead">ADD NEW CATEGORY : </p>
             <?php
                include 'views/add_category.php';
            ?>
                
            </div>
        </div>
        <hr>
        <div class="row">
           <div class="col-md-12">
             <p class="lead">ADD NEW ITEM : </p>
             <?php
                include 'views/add_items.php';
            ?>
                
            </div>
        </div>
        <hr>
        <div class="row">
			
			<?php
				include 'views/category.php';
            	include 'main.php';
            ?>
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
    <script src="js/jscolor.js"></script>
    <script>
    function setTextColor(picker) {
        document.getElementsByTagName('body')[0].style.color = '#' + picker.toString()
    }
    </script>
</body>

</html>
