<?php  
$page = 'MinSide'; 
/* her hentes headeren ind */
require_once('includes/header.php');
/* Her sikrer vi at brugeren er logget ind, og ellers så dirigeres brugeren ud på login siden */
  if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
} 
?>
<div class="site-highlights">
    <hr>
    <h1><strong>Matchsite</strong></h1>
    <hr>
</div>
<div class="om-os-container">
    <div>
        <h3 style=text-align:center><strong>Kontraktanmodninger sendt til DIG</strong></h3>
    </div>
    <?php
    /* Her sættes user_id til den bruger som er logget ind */
	$user_id = $_SESSION['user_id'];
    /* Her joiner vi kontrakt tabellen med users, for at vise den dynamiske side for brugeren, så der kun bliver vist det der skal */
	$query5 = "SELECT * FROM kontrakt NATURAL JOIN users WHERE laantager_user_id = '$user_id'";
	$result5 = mysqli_query($con, $query5);
    $rows5 = mysqli_num_rows($result5);
		if ($rows5 > 0) { ?>
    <div>
    <!-- Her skaber vi tabellen til overblikket af de kontrakter, som er tildelt fra långiver (netværkslån) -->
        <table>
            <tr>
                <th>Kontrakt ID</th>
                <th>Långivers Navn</th>
                <th>Beløb</th>
                <th>Rente</th>
                <th>Løbetid</th>
                <th>Kontraktbrud</th>
                <th>Underskrevet af långiver</th>
            </tr>
    <!-- Her begynder vi at finde de værdier vi gerne vil lægge ind i tabellen, og placere værdierne i variable -->
            <?php
     while($row5 = mysqli_fetch_assoc($result5)){
        $kontrakt_id = $row5["kontrakt_id"];
        $laangiver_fornavn = $row5["fornavn"];
        $kontraktbrud_id = $row5["kontraktbrud_id"];
        $rente_id = $row5["rente_id"];
        $beloeb_id = $row5["beloeb_id"];
        $bindingsperiode_id = $row5["bindingsperiode_id"];
        $laangiver_underskrift_id = '2';}
            ?>
        <!-- Her tjekkes kontrakterne OG beloeb igennem for hvor variablen kontrakt_id fra sektionen over, passer med beloeb_id fra databasen -->       
                <?php $queryA = "SELECT * FROM kontrakt NATURAL JOIN beloeb WHERE beloeb_id = '$kontrakt_id'";
                if($resultA = mysqli_query($con,$queryA)){
                $objA = mysqli_fetch_assoc($resultA);}
                ?>  
        <!-- vi opstiller en tabel -->   
            <tr>
                <td><?php echo $kontrakt_id?></td>
                <td><?php echo $laangiver_fornavn ?></td>
                <td><?php echo $objA ?></td>                         
                <td><?php echo $rente_id ?></td>
                <td><?php echo $bindingsperiode_id ?></td>
                <td><?php echo $kontraktbrud_id ?></td>
                <td><?php echo $laangiver_underskrift_id ?></td>
            </tr>
                <?php
}
    ?>
        </table>
    </div>
    <!-- Der tjekkes om der er kommet et resultat, og hvis ikke der er, meddeles der at der ikke er nogle. -->
<?php
	if (!$result5) die(mysqli_error($con));
	else {
		$rows6 = mysqli_num_rows($result5);
		if ($rows6 == 0) {
			echo "Du har endnu ikke modtaget nogle kontrakter. Kontakt din långiver i dit netværk <b>";
      }
}      
?>
  <div>
        <h3 style=text-align:center><strong>Kontraktanmodningerer på markedet</strong></h3>
    </div>
<!--her sammenholdes det om der er nogle sammenfald mellem laantager_user_id og sessionens user_id i kontrakt tables -->
    <?php 
$query3 = "SELECT * FROM kontrakt WHERE laantager_user_id ='$user_id'";
   $result3 = mysqli_query($con, $query3);
if($result3){
        while($row3 = $result3->fetch_assoc()){
        $kredit_id1 = $row3["kredit_id"];}
/* kredit_id fra kontrakttablet og variablen kredit_id1 sammenholdes  */
$query2 = "SELECT * FROM kontrakt WHERE kredit_id ='$kredit_id1'";
$result2 = mysqli_query($con, $query2);
    if($result2){
        while($row2 = $result2->fetch_assoc()){
        $kontrakt_id = $row2["kontrakt_id"];
        $laangiver_user_id = $row2["laangiver_user_id"];
        $laantager_user_id= $row2["laantager_user_id"];
        $kredit_id = $row2["kredit_id"];
        $kontraktbrud_id = $row2["kontraktbrud_id"];
        $rente_id = $row2["rente_id"];
        $beloeb_id = $row2["beloeb_id"];
        $bindingsperiode_id = $row2["bindingsperiode_id"];    
        $maanedlig_afdrag = $row2["maanedlig_afdrag"];    
        $laangiver_underskrift_id = $row2["laangiver_underskrift_id"];    
        $reg_underskrift_1 = $row2["reg_underskrift_1"];
        $laantager_underskrift_id = $row2["laantager_underskrift_id"];    
        $reg_underskrift_2 = $row2["reg_underskrift_2"];
        $betalings_status_id = $row2["betalings_status_id"]; 
?>
    <!--Det sidste table opstilles til at hente variablene ind i  -->
    <table>
        <tr>
            <th>Kontrakt ID</th>
            <th>Långivers Navn</th>
            <th>Låntager ID</th>
            <th>Beløb</th>
            <th>Rente</th>
            <th>Løbetid</th>
            <th>Kontraktbrud</th>
            <th>Underskrevet af långiver</th>
        </tr>
        <tr>
            <td><?php echo $kontrakt_id ?></td>
            <td><?php echo $laangiver_user_id  ?></td>
            <td><?php echo $kredit_id ?></td>
            <td><?php echo $kontraktbrud_id ?></td>
            <td><?php echo $rente_id ?></td>
            <td><?php echo $beloeb_id ?></td>
            <td><?php echo $bindingsperiode_id ?></td>
            <td><?php echo $laangiver_underskrift_id ?></td>
        </tr>
    </table>
    <?php
        }
        }
    }
?>
</div>
<?php
require_once('includes/footer.php');
?>