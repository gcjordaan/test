<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">


    <?php

     $post_titles = ["Hello world",
      "zambezi", "the drive"];
      // Create an array of post objects using the display_post function

     foreach($post_titles as $post_title){

       display_title($post_title);
     }





      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $title ) {
            echo $title;
        // Echo an <h3> tag with the $title inside

      }

    ?>

  </div>

</body>
</html>
