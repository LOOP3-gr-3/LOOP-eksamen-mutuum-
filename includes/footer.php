
  <div class="footer-container">
    
    <div class="oplysninger-footer">
      <div class="las-tekst-hojre">
          <strong>CVR nr:</strong> 12345678 <br>
        <strong>Adresse:</strong> Birk Centerpark 15 <br>
        <strong>E-mail:</strong> mutuum@hotmail.com
    </div>
    </div>
    <div class="oplysninger-footer-2">
 
        <a class="las-tekst-venstre" href="./faq.php">FAQ</a> 
        <a class="las-tekst-venstre" href="./handelsbetingelser.php">&nbsp;&nbsp;&nbsp;Handelsbetingelser </a> 
        <a class="las-tekst-venstre" href="./kontakt.php" >&nbsp;&nbsp;&nbsp;Kontakt</a> 
   
      </div>
    <div class="billede-footer">
        <?php
            if(isset($_SESSION['user_id'])) {
            echo '<a href="minside.php"><img id="billede" src="images/B4.png"></a>';
            } else
            echo '<a href="opretbruger.php"><img id="billede" src="images/B3.png"></a>';
                
        
          ?>
    </div>
    
</div>

</body>
</html>