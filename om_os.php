<!-- her henter jeg headeren ned -->
<?php
    $page = ('Om MUTUUM');
    require_once('includes/header.php');
?>

<link href="includes/styles/overallstyle.css" type="text/css" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=MUTUUM" alt="Image">
        <div class="carousel-caption">
          <h3>HVORFOR VÆLGE OS?</h3>
          <p>MUTUUM startede på baggrund af et ønske - fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig, om at hjælpe dem, der havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer. Men også ønsket om at gøre det lettere for to bekendte at låne penge til hinanden, men sikre at den økonomiske situation ikke kommer mellem dem vha. af en juridisk kontrakt, der skal holde begge parter ansvarlige for aftalen. <br> Efterfølgende er hele designet, forretningmodellen og det videre koncept udarbejdet af en gruppe 3. semester studerende fra Aarhus Universitet:</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>HVEM ER VI?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

</body>
</html>


<div class="site-highlights">
    <hr>
        <h1><strong>Om os</strong></h1>
    <hr>


<div id="om-os-container"> 
<!-- Dette er overskriften for dette indhold -->
<h3><strong>HVEM ER VI?</strong></h3>                                

<p>MUTUUM startede på baggrund af et ønske - fra Morten Refsgaard, Jens Eriksen og Sander Dyrvig, om at hjælpe dem, der havde brug for lidt ekstra penge til indskud til diverse efter nødssituationer. Men også ønsket om at gøre det lettere for to bekendte at låne penge til hinanden, men sikre at den økonomiske situation ikke kommer mellem dem vha. af en juridisk kontrakt, der skal holde begge parter ansvarlige for aftalen. <br> Efterfølgende er hele designet, forretningmodellen og det videre koncept udarbejdet af en gruppe 3. semester studerende fra Aarhus Universitet:
</p>
<!-- her laves der er en unummeret liste over teammedlemmerne /ul -->
    <div>   
        <p>Mette Weyergang</p>
        <p>Maja Pallesen</p>
        <p>Wasfia Hashemi</p>
        <p>Mikkel Niklassen</p>
        <p>Lasse Hvisthule</p>
    </div>

<h3><strong>HVORFOR VÆLGE OS?</strong></h3>
<div>
    <p>Enkelte, overskuelige og juridiskbindende kontrakter</p>
    <p>Slip for at sende en reminder eller komme i uønskede situationer med nære relationer</p>
    <p>Kontrakter der tilgodeser både låntager og långiver</p>
    <p>Du sætter selv reglerne for dine penge</p>
</div> <br>
    <hr>
        <h1><strong>Kontakt os</strong></h1>
    <hr> <br>
    <strong>CVR nr:</strong> 12345678 <br>
    <strong>Adresse:</strong> Birk Centerpark 15 <br>
    <strong>E-mail:</strong> mutuum@hotmail.com <br> <br>
    <img class="wbillede1" src="images/Udklip4.PNG"> <br> <br>
</div>
</div>

<?php require_once('includes/footer.php'); ?>
</html>
          