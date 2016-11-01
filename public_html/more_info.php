<!DOCTYPE html>
<html lang="en">

    <head>
    
       <meta charset="utf-8">
    
       <title>More information</title>

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

          <h1> Sign up for updates</h1>
              
          <p>There's a student dead at the library, and the whole campus is asking one question: "Who Dunn It?" In this thrilling 
              account on the campus of a small college in the middle
              of Iowa, interviewers search for the answer to that very 
              question. Along the way, they discover secrets of students and
              teachers and somehow find some humor in this grim situation.
              <br><br>For more information on this project or for updates, sign up for our newsletter so you can be in the know.
          </p><br>
              
          <form class="horizontal">
            <div class="form-group">
              <label for ="inputName3" class="col-sm-2 control-label">Your Name:</label>
              <div class = "col-sm-6">
                <input type="text" class="form-control" id="inputName3" placeholder="Name">
              </div>
            </div><br><br>
            <div class = "form-group">
              <label for ="inputEmail3" class="col-sm-2 control-label">Email Address:</label>
              <div class="col-sm-6">
                <input type="text" class = "form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div><br><br>
            <div class="form-group col-sm-2">
              <input class="btn btn-danger" type="submit" value="Submit">
            </div>
          </form>
          
        </div>

        <?php include '../resources/footer.php'; ?>

            <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    </body>
    
</html>