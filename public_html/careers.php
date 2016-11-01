<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
    
        <title>Careers</title>

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

        <h1> Interested in working for<br>Hovey Kirkpatrick Studios? </h1>

        <p>We are looking to hire camera men, actors/actresses, make-up artists, <br>costume designers, photographers, and writers.</p>
                
        <p><strong>Provide your information and we'll contact you!</strong></p>

        <form>
          <div class="form-group">
            <label>First name:</label>
            <input type="text" class="form-control" placeholder="First Name" />
          </div>
          <div class="form-group">
            <label>Last name:</label>
            <input type="text" class="form-control" placeholder="Last Name" />
          </div>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="text" class="form-control" placeholder="Email" />
          </div>
          <div class="radio">
            <strong>Dogs or Cats?</strong><br>
            <label>
              <input type="radio" name="dogsOrCats" value="dogs" checked /> Dogs<br>
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="dogsOrCats" value="cats" disabled/> Cats<br><br>
            </label>
          </div>
          <input class = "btn btn-danger" type="submit" value="Submit" /><br><br>
        </form>
      </div>

      <?php include '../resources/footer.php'; ?>

          <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </body>
</html>
