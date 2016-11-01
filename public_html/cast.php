<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="utf-8">
  
        <title>Meet the Cast</title>

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
         
        <h1>Meet the Cast</h1>
        
        <table class="table table-responsive table-bordered">
          <thead>
              <tr>
                  <th>The Jock</th>
                  <th>The Menace</th>
                  <th>The Dead Kid</th>
                  <th>The Cop</th>
                  <th>The Blonde</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td><img src = "img/jock.png" alt = "Jock" width = "200"/></td>
                  <td><img src = "img/menace.png" alt = "Menace" width = "200"/></td>
                  <td><img src = "img/deadKid.png" alt = "Dead Kid" width = "200"/></td>
                  <td><img src = "img/cop.png" alt = "Cop" width = "200"/></td>
                  <td><img src = "img/blonde.png" alt = "Blonde" width = "200"/></td>
              </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td> 
                    Aaron is the captain of the basketball team. He likes to carry his basketball wherever he goes.
                  </td>
                  <td>
                    Ethan is an angry guy who has a distinct look on his face all the time. Don't look him in the eye.
                  </td>
                  <td>
                    Ian is the dead kid. He is what he looks like he is.
                  </td>
                  <td>
                    Kyle is more of a protagonist. He is the cop who will take on the task of finding out who dunn it?
                  </td>
                  <td>
                    Courtney is the blonde who doesn't understand what is going on. She is clueless about everything.
                  </td>
              </tr>
          </tfoot>
        </table>
      </div>

      <?php include '../resources/footer.php'; ?>

          <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
    </body>
</html>
            