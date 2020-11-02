<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SACS Middle School Softball - CISD Games</title>
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <?php $currentPage = 'Games';
        $jumbotronHeading = 'CISD';
        $jumbotronPara = ' ';
     ?>
	<?php include('favicon.php') ?>
	  
  </head>
  <body class="bg-black">
    <?php include('navigation.php'); ?>
    <?php include('jumbotron.php') ?>
	  
	<section>
	  <div class="container">
		<div class="row">
			<div class="card" style="width: 18rem;">
				<a href="photos/cisd/week1/">
				<img class="card-img-top" src="images/cover_cisd1.jpg" alt="Game 1"></a>
		  		<div class="card-body school-colors">
					<p class="game_header">Game 1</p>
					<h5 class="card-title">Pieper Ranch vs SACS</h5>
					<div>
					  <p class="card-text score">2 - 5</p>
					</div>
		  		</div>
			</div>
			
			<div class="card" style="width: 18rem;">
				<!--<a href="photos/cisd/week2/">-->
				<img class="card-img-top" src="images/SACS-Logo.png" alt="Game 2"></a>
		  		<div class="card-body school-colors">
					<p class="game_header">Game 2</p>
					<h5 class="card-title">Canyon vs SACS</h5>
					<div><p class="card-text score">0 - 10</p></div>
		  		</div>
			</div>
			
			<div class="card" style="width: 18rem;">
				<a href="photos/cisd/week3/">
				<img class="card-img-top" src="images/cover_cisd3.jpg" alt="Game 3"></a>
		  		<div class="card-body school-colors">
					<p class="game_header">Game 3</p>
					<h5 class="card-title">SACS vs Smithson Valley</h5>
					<div><p class="card-text score">5 - 7</p></div>
		  		</div>
			</div>
			
			<div class="card" style="width: 18rem;">
				<!--<a href="photos/cisd/week4/">-->
				<img class="card-img-top" src="images/SACS-Logo.png" alt="Game 4"></a>
		  		<div class="card-body school-colors">
					<p class="game_header">Game 4</p>
					<h5 class="card-title">Danville vs SACS</h5>
					<div><p class="card-text score">0 - 8</p></div>
		  		</div>
			</div>			
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