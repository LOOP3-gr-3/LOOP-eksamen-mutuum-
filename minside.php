<?php  
$page = 'MinSide';
require_once('includes/header.php');
if (!isset($_SESSION)) session_start();
if(!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>';
        die(); /*Her bliver brugeren dirigeret til login, hvis de ikke er logget ind */
}
?>
<!-- Følgende er lavet vha. Bootstrap, hvor billederne bliver stilllet i Bootstraps grid system -->
<!-- Ikonerne er fra Word Documents 2016 -->
<div class="site-highlights">
    <hr>
    <h1><strong>MIN SIDE</strong></h1>
    <hr>
</div>
<div class="om-os-container">
    <div class="row mb-4">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mx-auto d-block">
            <a href="minprofil.php"><img class="img-fluid minsidefigur" src="images/profilny.png"></a>
        </div>

        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mx-auto d-block">
            <a href="statistik.php"><img class="img-fluid" src="images/statistikny2.png"></a>

        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mx-auto d-block">
            <a href="matchsite.php"><img class="img-fluid" src="images/matchny-kopi.png"></a>
        </div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 mx-auto d-block">
            <a href="kontrakt.php"><img class="img-fluid" src="images/kontraktny.png"></a>
        </div>
    </div>
    <div class="container-fluid">
        <a href="KFUM.php"><img id="KFUMfixed" src="images/hjaelpknaplille.png"></a>
    </div>
</div>
<?php
require_once('includes/footer.php');
?>