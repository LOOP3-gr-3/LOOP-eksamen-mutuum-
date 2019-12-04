<?php
$page = ('Forside');
require_once('includes/header.php');
?>

 <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
<header class="jumbotron my-4">
    
    <img id="logoforside" src="images/logo.png"> 

<!--For nu er styler jeg inde på siden så der kan holdes overblik med det-->
    
<style>
    #logoforside {
       width: 30%;
        height: auto;
    }
    .card-img-top {
        width: 40%;
        height: auto;
        margin-left: 30%;
    }
    .btn btn-primary btn-lg{
        background-color: forestgreen;
        border-bottom-color: forestgreen;
    }
    #forsideliste{
        text-align: left;
    }
</style>
    
      <p>Mutuum er et sted for alle. Der kan udlånes og lånes til hvem som helst eller til bestemt personer. <br><br>
    Siden er dannet på baggrund af sikkerhed og muligheden for at få hjælp og planlægge din økonomiske situationer</p>
      <a href="opretbruger.php" class="btn btn-primary btn-lg">OPRET BRUGER</a>
</header>
      
    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/lock.PNG" alt="">
          <div class="card-body">
            <h4 class="card-title">SIKKERHED</h4>
            <p class="card-text">Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</p>
            <p>Udfyld ansøgning til kreditgodkendelse - godkend den endelige rente og lånebetingelser. Alt står med stort, ingen skjulte gebyrer</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/checkbox.PNG" alt="">
          <div class="card-body">
            <h4 class="card-title">BETINGELSER</h4>
                <ul id="forsideliste">
                    <li>Du skal være fyldt 18 år</li>
                    <li>Have nemID</li>
                    <li>Alle punkter ved oprettelse skal udfyldes og med korrekte oplysninger</li>
                </ul> 
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/l%C3%A5ngiver.PNG" alt="">
          <div class="card-body">
            <h4 class="card-title">LÅNTAGER</h4>
            <p class="card-text">Start dit lån med kun ét klik. Mutuum står klar til at hjælpe dig, der er bl.a. mulighed for rådgivning gennem KFUM. <br>Du kan oprette dig som bruger med det samme og tage et lån på under 5 minutter. Det er et lån mellem dig og långiver, vi blander os ikke</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="images/l%C3%A5ntager.PNG" alt="">
          <div class="card-body">
            <h4 class="card-title">LÅNGIVER</h4>
            <p class="card-text">Start din investering med kun ét klik. Med Mutuum behøver du hverken være økonom eller millionær for at have en professionel investering. Opret dig med det samme og indsæt dit beløb ved, at lave en kontrakt - lån dig tilbage og tjen med god samvittighed. </p>
          </div>
        </div>
      </div>

    </div>
