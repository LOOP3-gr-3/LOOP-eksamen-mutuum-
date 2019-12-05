<?php
    $page = 'Spørgsmål og hjælp';
    require_once('includes/header.php');
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
} /* Her sikrer vi at brugeren er logget ind, og ellers så dirigeres brugeren ud på login siden */
?>
<div class="site-highlights">
    <hr>
        <h1><strong>Typisk stillede spørgsmål</strong></h1>
    <hr>
</div>

<div class="om-os-container">
<p><I>Denne side vil der blive arbejdet videre på til loop</I></p>
</div> 
<div class="site-highlights">
    <hr>
        <h1><strong>Økonomisk Rådgivning</strong></h1>
    <hr>
</div>
<div class="om-os-container">
    
</div>    

<?php
require_once('includes/footer.php');
?>