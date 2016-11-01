<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="utf-8">
      
        <title>Episode List</title>

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

        <div class="jumbotron">
            <h1>Season 2 Coming Out Soon</h1>
            <p>Don't miss a second! Catch up now!</p>
            <a class="btn btn-info btn-lg" href="stream.html" role="button">Watch now!</a>
        </div>

        <div class="alert alert-warning">
          <strong>Warning!</strong> This page may contain spoilers!
        </div>

        <h1>List of Episodes</h1>

        <div>
          <ol>
              <li>"Pilot"
                <ul><li>Find out where the murder took place and all the possible suspects. We give you a look into the lives of all of those possibly involved!</li></ul>
              </li>
              <li>"Kent Find the Killer"
                <ul><li>New evidence has arisen that Ian was seen in Kent Campus Center the day he was murdered talking with Ethan. Suspects say that the conversation seemed very heated, but no one knows what they were talking about. Could Ethan be the killer?</li></ul>
              </li>
              <li>"Cowles Blooded Killer"
                <ul><li>On the day of Ian's murder Aaron was at basketball practice in Cowles Fitness Center. Aaron noticed that Ian was talking to Courtney on the sidelines and didn't like the looks of it. Was there something going on between Ian and Courtney?.</li></ul> 
              </li>
              <li>"Buxton of Leads"
                <ul><li>The night before Ian's murder he was seen by Kyle in Buxton Park with some friends. The boys were all very rowdy so Kyle decided to check out the situation. As he approached Ian seemed very frazzled, but Aaron and all his basketball buddies claimed that nothing was going on. Could Aaron be a murder suspect?</li></ul>
              </li>
              <li>"Pfeiff O'Clock Somewhere"
                <ul><li>The day before Ian's murder he was seen eating lunch at Pheiffer by himself. Courtney said she saw Ethan walk by and give Ian a weird look. Moments later Ian got up and left without even finishing his food. What was going on between Ian and Ethan?</li></ul>
              </li>
              <li>"Campus Carver"
                <ul><li>Everyone is a possible suspect on Kyle's list, but a shocking new piece of evidence could change that! In the anticipated finale of 'Who Dunn It?' we finally find out who really dunn it!</li></ul>
              </li>
          </ol>
        </div>
      </div>

      <?php include '../resources/footer.php'; ?>

            <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </body>
</html>