<!-- Trey Moddelmog -->

<!DOCTYPE html>

<html lang="en">

 <head>

     <meta charset="utf-8">
  
     <title>Streaming</title>

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

  <!-- Main Content -->
  <div class="below_menu_container">
    <div class="container jumbotron text-center">
      <h1> Watch <b>Who Dunn It?</b> Now</h1>
      <p>Fill out your information below to instantly stream the show.</p>
    </div>

    <div class="container">        
        <form>
          <div class="form-group">
            <label>Cable Provider:</label>
            <input type="text" class="form-control" placeholder="Provider">
          </div>
          <div class="form-group">
            <label for="email">Account Username or Email address:</label>
            <input type="text" class="form-control" id="email" placeholder="Username or Email">
          </div>
          <div class="form-group">
            <label for="pwd">Account Password:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox">Remember me</label>
          </div>
          <button type="submit" class="btn btn-success">Watch Now</button>
        </form>
    </div>
  </div>

  <?php include '../resources/footer.php'; ?>

       <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
 </body>
   
</html>