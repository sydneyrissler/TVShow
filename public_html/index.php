<!DOCTYPE html>

<html lang="en">

   <head>

       <meta charset="utf-8">
    
       <title>Who 'Dunn' It?</title>

      <!--CSS is compatible with tablets/phones -->
      <meta name="viewport" content="width-device-width, initial-scale=1">

      <!--Main CSS styles for Bootstrap-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!--Optional theme add-on-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    
   </head>

   <body>
      
      <?php include '../resources/navigation.php'; ?>

      <div class = "container below_menu_container">
        <div class="jumbotron">
          <h1>Who Dunn It?</h1>
             
          <h2>A grim yet hilarious show that people are literally dying to see!</h2>

          <img src = "img/dunn_library.jpg" alt = "Dunn Library" class="img-responsive img-circle"/><br><br>
        </div>
      </div>

      <!-- Media bar code from https://www.addtoany.com/buttons/customize/floating_share_buttons -->
	<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;padding: 10px;">
		    <a class="a2a_button_facebook"></a>
		    <a class="a2a_button_instagram"></a>
		    <a class="a2a_button_twitter"></a>
	</div>
	<script async src="https://static.addtoany.com/menu/page.js"></script>

      <?php include '../resources/footer.php'; ?>

         <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
   </body>
   
</html>