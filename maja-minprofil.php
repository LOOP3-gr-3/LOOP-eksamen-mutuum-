<?php
$page = ('Min profil');
require_once('includes/header.php');
?>

<hr><h1 class="text-center">MIN PROFIL</h1><hr><br>
    <div class="container text-left">    
      <div class="container">
        <div class="row">
            <div class="col-sm-4 text-left">
                <h4>DINE OPLYSNINGER</h4>
            <?php
                $user_id = $_SESSION['user_id'];
                $udfyld = "SELECT mail, fornavn, efternavn, mobil FROM users WHERE user_id = '$user_id'";
                $result = mysqli_query($con, $udfyld);
                $row = mysqli_num_rows($result);
                    if ($row > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                    echo "&nbsp;<strong>Brugernavn:</strong> " . $row['mail'] . "<br>&nbsp;<strong>Fornavn:</strong> " . $row['fornavn'] . "<br>&nbsp;<strong>Efternavn:</strong> " . $row['efternavn'] . "<br>&nbsp;<strong>Telefon nr.:</strong> " . $row['mobil'] . "<br><br>";
                    } 
                        } else {
                        echo "<br>Data er ikke blevet oplyst. Opret bruger eller oplys manglende data";
                        }
mysqli_close($con);   
?>
                <a href="retoplysninger.php" class="btn btn-default" role="button" aria-pressed="true">Ret Oplysninger</a>
</div>      
    
    <div class="col-sm-8">
      <h4>INFO</h4>
     
     <U>Kredit oplysninger</U>
    <p>Disse oplysninger skal hentes over kredit verificeringen, det er derfor udenfor afgrænsningen, da dette er outsourcet</p>

    <!-- U sikre at der kunne en understreg under skriften-->
    <U>Rating</U>
    <p>Denne sker gennem kreditvurderingen og der dermed udenfor afgrænsningen. Men I dette felt ville der skulle trækkes data fra kreditverificingen, denne data skal kunne aflæse om hvorvidt brugeren for en AAA, AA, A, B eller C rating</p><br>
    <p><I>Din rating er blevet givet på baggrund af din kreditvurdering. Denne kan anmodes om at blive fornyet under "ret oplysninger"</I></p>


    <!-- denne kode sikre, at brugeren bliver ført over til en nye side, når der klikkes på ret oplysninger-->

    <a href="retoplysninger.php" class="btn btn-default" role="button" aria-pressed="true">Ret Oplysninger</a><br><br>

</div>
