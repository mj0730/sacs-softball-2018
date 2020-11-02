<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SACS Middle School Softball</title> 
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	 <?php $currentPage = 'Home';
        $jumbotronHeading = 'Lions Softball';
        $jumbotronPara = '2019 ISAL Champions';
      ?> 
	 <?php include('favicon.php') ?>
  </head>
  <body class="bg-black">
    <?php include('navigation.php'); ?>
    <?php include('jumbotron.php') ?>
  	  
    <section>
      	<div class="container-fluid bg-dark main_bg">
			<div class="row">
				<div class="mx-auto text-center"><img src="images/main_bg2.jpg" style="max-width: 90%;"alt="team background"></div>
			</div>
		</div>
    </section>
    
	<hr>
   
<?php include('footer.php') ?>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>