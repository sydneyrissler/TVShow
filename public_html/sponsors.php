<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="utf-8">
  
        <title>Sponsors</title>

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

          <h1>Our Sponsors</h1>

          <p>
            Our sponsors are the heart and soul of our studio. Without their endearing support, our television magic would never happen. Below are the backstage supporters of what we do here at Hovey Kirkpatrick Studios.
          </p>

          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Commissioner Sponsor
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                Thanks to Gotham Industries for their generous support, specifically Gordon. He and his team has done a fantastic job of encouraging and teaching our team to push the limits of film creation to the max. Who Dunn It? would not be possible without this fantastic company.
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Sheriff Sponsor
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                The local sheriffs of Indianola have given their time and labor to improving the productivity of Who Dunn It? Each week, the local sheriff’s department takes care of blocking off roadways, high-traffic areas, and other important duties to ensure we can do our business as quickly as possible.
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Detective Sponsor
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                Sherlock Holmes has done an amazing job showing us around. His tips and tricks of how to catch bad guys has helped immensely to improve the realism of our show. Thank you!
              </div>
            </div>
          </div>
       </div>

       <?php include '../resources/footer.php'; ?>

          <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </body> 
    
</html> 