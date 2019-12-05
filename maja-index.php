<?php
$page = ('Forside');
require_once('includes/header.php');
?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
<header class="jumbotron my-4" id="baggrundpaaforside">

<!--For nu er styler jeg inde på siden så der kan holdes overblik med det-->
        <img id="logoforside" src="images/logo.png">     
      <p>Mutuum er et sted for alle. Der kan udlånes og lånes til hvem som helst eller til bestemt personer. <br><br>
    Siden er dannet på baggrund af sikkerhed og muligheden for at få hjælp og planlægge din økonomiske situationer</p>
      <a href="opretbruger.php" class="btn btn-default btn-lg">OPRET BRUGER</a>
</header>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <div class="row slideanim">
      
    <div class="col-sm-4">
        <img class="forsidesymbol" src="images/lock.PNG">
      <h4>SIKKERHED</h4>
      <p class="card-text">Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</p>
            <p>Udfyld ansøgning til kreditgodkendelse - godkend den endelige rente og lånebetingelser. Alt står med stort, ingen skjulte gebyrer</p>
    </div>
      
    <div class="col-sm-4">
          <img class="forsidesymbol" src="images/checkbox.PNG">
            <h4>BETINGELSER</h4>
                <ul id="forsideliste">
                    <li>Du skal være fyldt 18 år</li>
                    <li>Have nemID</li>
                    <li>Alle punkter ved oprettelse skal udfyldes og med korrekte oplysninger</li>
                </ul> 
    </div>
    <div class="col-sm-4">
        <img class="forsidesymbol" src="images/l%C3%A5ntager.PNG">
        <h4>LÅNGIVER eller LÅNTAGER</h4>
             <p class="card-text">Start din investering eller dit lån med kun ét klik. Med Mutuum behøver du hverken være økonom eller millionær for at kunne drage nytte af hjemmesiden.</p>
    </div>
  </div>
 </div>      
     
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>Tanken bag MUTUUM</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Mutuum er skabt på baggrund af lysten til at ville hjælpe andre!"<br><span>Morten Refsgaard, opdragsgiver </span></h4>
      </div>
      <div class="item">
        <h4>"Teamet har arbejdet ud ud fra konceptet om at man skal kunne lån direkte mellem hinanden, udenom bankerne"<br><span>Jens Vindal Eriksen, opdragsgiver </span></h4>
      </div>
      <div class="item">
        <h4>"Visionen er at lave en app, der er professionel med sikkerhed i højsædet vha. samarbejdspartnere såsom nemID, Likvido etc."<br><span>Xander, opdragsgiver</span></h4>
      </div>

 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h1 class="text-center">Kontakt</h1>
  <div class="row">
    <div class="col-sm-5">
      <p>Kontak os på følgende informationer</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Birk Centerpark 15, 7400 Herning</p>
      <p><span class="glyphicon glyphicon-phone"></span> +45 12345678</p>
      <p><span class="glyphicon glyphicon-envelope"></span> mutuum@hotmail.com</p>
    </div>
    
        <button data-toggle="collapse" data-target="#demo" class="btn btn-default btn-lg">Åben kontaktformular</button>      
            <div id="demo" class="collapse">
                <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
      

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<?php 
require_once("includes/footer.php")
?>

</body>
</html>

