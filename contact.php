<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pointSevenFive Contact Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="form.css" >
	<script src="form.js"></script>

    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<?php $currentPage = 'Contact'; 
        $jumbotronHeading = 'Lions Softball';
        $jumbotronPara = 'Middle School 2019';
      ?>
	<?php include('favicon.php') ?>  
	  
  </head>
  <body class="bg-black">
    <?php include('navigation.php'); ?>
    <?php include('jumbotron.php') ?>
    	  
    <section> <!--Contact Form-->
      <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 mx-auto text-white">
                    <h2>Contact Form</h2>
                    <form role="form" method="post" id="reused_form" >
                        <div class="form-group">
                            <label for="name"> Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                        </div>
                        <div class="form-group">
                            <label for="name"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success pull-right float-right" id="btnContactUs">Send &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
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