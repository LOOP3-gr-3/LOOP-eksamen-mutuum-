<!-- her henter jeg headeren ned -->
<?php
    $page = ('Om MUTUUM');
    require_once('includes/header.php');
?>

<title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="includes/styles/overallstyle.css" type="text/css" rel="stylesheet">
<div class="site-highlights">
<hr>
  <h3><strong>HVEM ER VI?</strong></h3>
<hr>
</div>
<div class="om-os-container">
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
       <p> <strong>MUTUUM</strong> startede på baggrund af et ønske fra Morten <br> Refsgaard, Jens Eriksen og Sander Dyrvig om at hjælpe dem,<br> der havde brug for lidt ekstra penge til indskud til diverse efter<br> nødssituationer - men også ønsket om at gøre det lettere for to<br> bekendte at låne penge til hinanden og samtidig sikre, at den<br> økonomiske situation ikke kommer mellem dem vha. af en juridisk<br> kontrakt, der skal holde begge parter ansvarlige for aftalen.<br> <br> Efterfølgende er hele designet, altså forretningmodellen og det<br> videre koncept udarbejdet af en gruppe 3. semester studerende<br> fra Aarhus Universitet.</p>
      </div>
    <br>
      <div class="well">
       <h2><strong>Hvorfor vælge os?</strong></h2> <p> Enkelte, overskuelige og juridiskbindende kontrakter<br><br></p>
        <p>Slip for at sende en reminder eller komme i uønskede situationer med nære relationer<br><br></p>
        <p>Kontrakter der tilgodeser både låntager og långiver<br><br></p>
        <p>Du sætter selv reglerne for dine penge</p>
      </div>
    </div>
    <div class="col-sm-4">
      <img src="images/teamet.PNG" class="img-responsive" style="width:100%" alt="Image">
    <br>
      <p>Teamet - Århus Universitet</p>
    <br>
    <div class="well">
       <p>Lasse Hvisthule <br> Maja Pallesen <br> Mette Weyergang <br> Mikkel Holt <br> Wasfia Hashemi <br> <br> Business Development studerende på 3. semester </p>
    </div>
    </div>
    <div class="col-sm-4"> 
      <img src="images/Morten.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Morten Refsgaard</p>
      <div class="well">
       <p>Uddannelse: Cand. Oecon. fra Århus Universitet <br> Erhvervserfaring: <br> Bankpartner, Selvstændig finansiel rådgiver (14-19)<br> Compliance og risikoansvarlig, Skjern Bank (12-13) <br> Stedfortrædende kreditchef, Skjern Bank (10-11) Erhvervsrådgiver, Sydbank (06-10)</p>
      </div>
    </div>
  </div>
</div>
<div class="site-highlights">
<hr>
<h3><strong>KONTAKT OS</strong></h3>
<hr>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-5">
      <p>Kontakt os og vi vil vende tilbage til dig inden 24 timer.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Birk Centerpark 15, 7400 Herning</p>
      <p><span class="glyphicon glyphicon-phone"></span> +45 12345678</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mutuum@hotmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Navn" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Besked" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <a href="index.php"><button class="btn btn-default pull-right" type="submit">Send</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require_once('includes/footer.php');
?>