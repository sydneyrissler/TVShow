<!DOCTYPE html>

<html lang="en">

  <head>
  
    <meta charset="utf-8">
  
    <title>Filming Locations</title>

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

      <div class="container below_menu_container">
          <h1>Where We're Filming</h1>
      </div>

      <div class="container col-lg-6">
          <div class="thumbnail">
              <img src="img/dunn_library.jpg" alt="Dunn Library" class="img-responsive"/> <br>
              <div class="caption post-content">
                <h3>Dunn Library</h3>
              </div>
          </div>
          <div class="thumbnail">
              <img src="img/cowles.jpg" alt="Steven Johnson Fitness Center" class="img-responsive"/><br>
              <div class="caption post-content">
                <h3>Cowles Fitness Center</h3>
              </div>
          </div>
         <div class="thumbnail">
              <img src="img/buxton.jpg" alt="Buxton Park" class="img-responsive"/><br>
              <div class="caption post-content">
                <h3>Buxton Park</h3>
              </div>
          </div>
        </div>

      <div class="container col-lg-6">
          <div class="thumbnail">
              <img src="img/plaza.jpg" alt="Pedestrian Plaza" class="img-responsive"/><br>
              <div class="caption post-content">
                <h3>Pedestrian Plaza</h3>
              </div>
          </div>
          <div class="thumbnail">
              <img src="img/college_hall.jpg" alt="College Hall" class="img-responsive"/><br>
              <div class="caption post-content">  
                  <h3>College Hall</h3>
              </div>
          </div>
          <div class="thumbnail">
              <img src="img/outside_carver.jpg" alt="Carver" class="img-responsive"/><br>
              <div class="caption post-content">
                <h3>Carver Campus</h3>
              </div>
          </div>
      </div>
  <div class="col-lg-12">
    <?php include '../resources/footer.php'; ?>
  </div>

        <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </body>
    
</html>