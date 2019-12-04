<?php  
$page = 'MinSide';
require_once('includes/header.php');



if(!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();   
     /*Her bliver brugeren dirigeret til login, hvis de ikke er logget ind */ 
}
?>


<!-- Følgende er lavet vha. Bootstrap, hvor billederne bliver stilllet i Bootstraps grid system -->
<!-- Ikonerne er fra Word Documents 2016 -->




<div class="site-highlights" style="text-align:center">
    <hr>
        <h1><strong>Min side</strong></h1>  
    <hr>
</div>

<div class="om-os-container">
<div class="container-las">
    <div class="container1-5">
        <div class="l-billede">
            <a href="minprofil.php"><img class="billede1" src="images/profilny.png"></a>
        </div>
        
        

    </div>
    
    <div class="container2-5">
        <div class="l-billede">
            <a href="KFUM.php"><img class="billede1" src="images/r%C3%A5dgivningny-kopi.png"></a>
            
        </div>
        
        
    </div>
    
    
    <div class="container3-5">
        <div class="l-billede">
            <a href="matchsite.php"><img class="billede1" src="images/matchny-kopi.png"></a>
        </div>
        
        
    </div>
    
    
    <div class="container4-5">
        <div class="l-billede">
            <a href="kontrakt.php"><img class="billede1" src="images/kontraktny.png"></a>
        </div>
        
        
    </div>
    
    <div class="container5-5">
        <div class="l-billede">
            <a href="statistik.php"><img class="billede2" src="images/statistikny.png"></a>
        </div>
        
        
    </div>
</div>
</div>
<?php
require_once('includes/footer.php');
?>




     