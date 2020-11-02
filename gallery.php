<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photo Gallery</title>
	  
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
    <link href="css/simplelightbox.css" rel='stylesheet' type='text/css'>
    
	<?php $currentPage = 'Gallery';
        $jumbotronHeading = 'Photo Gallery';
        $jumbotronPara = 'Best Images of the Season';
    ?>  
	<?php include('favicon.php') ?>

  </head>
  <body class="bg-black">
    <?php include('navigation.php'); ?>
    <?php include('jumbotron.php') ?>
      
<section>
	<div class="container">
		<div class="row">
			<div class="gallery_container">
             <div class="gallery">
 
              <?php 
              // Image extensions
              $image_extensions = array("png","jpg","jpeg");

              // Target directory
              $dir = 'photos/gallery/';
              if (is_dir($dir)){

               if ($dh = opendir($dir)){
                $count = 1;

                // Read files
                while (($file = readdir($dh)) !== false){

                 if($file != '' && $file != '.' && $file != '..'){

                  // Thumbnail image path
                  $thumbnail_path = "photos/gallery/".$file;

                  // Image path
                  $image_path = "photos/gallery/".$file;

                  $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                  $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                  // Check its not folder and it is image file
                  if(!is_dir($image_path) && 
                     in_array($thumbnail_ext,$image_extensions) && 
                     in_array($image_ext,$image_extensions)){
               ?>

                   <!-- Image -->
                   <a href="<?php echo $image_path; ?>">
                    <img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                   </a>
                   <!-- --- -->
                   <?php

                   // Break
                   if( $count%4 == 0){
                   ?>
                     <div class="clear"></div>
                   <?php 
                   }
                   $count++;
                  }
                 }

                }
                closedir($dh);
               }
              }
             ?>
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
    <script type="text/javascript" src="js/simple-lightbox.js"></script>
    <!-- gallery Script -->
    <script type='text/javascript'>
        $(document).ready(function(){

         // Intialize gallery
         var gallery = $('.gallery a').simpleLightbox();

        });
    </script>
  </body>
</html>