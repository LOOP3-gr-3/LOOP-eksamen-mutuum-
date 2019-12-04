<?php

//skaber connection til databasen
require_once('conn.php') 

//Her skal tilføjes, hvis der skal være forskel på navbarens udseende.                                                               
?>

<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <meta name="description" content="">
	   <meta name="author" content="Projektgruppe 3">
	   <title><?php echo $page;?></title>                                       <!-- Gør siderne dynamiske, så der ændres navn i toppen -->                      
         
        
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="images/mutuum.ico">
        <link rel="stylesheet" href="includes/styles/overallstyle.css" type="text/css">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="css/heroic-features.css" rel="stylesheet">
    

    <!-- js bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="maja-index.php">MUTUUM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="maja-index.php">Home
              <span class="sr-only">(current)</span>
            </a>
            </li><li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="opretbruger.php">Opret bruger</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="om_os.php">Om os</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
         
          </li>
        </ul>
      </div>
    </div>
  </nav>