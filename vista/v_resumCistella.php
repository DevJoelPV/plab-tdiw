<?php
    $preuTotal = getPreuTotal();
?>
<html>
    <div style="grid-area:resumCistella" id="resumCistella">
        <footer>
            <h3>RESUM CISTELLA: </h3> <br/>
            <h4>Productes: <?php echo $_SESSION['cart']['elementsTotals'] ?> </h4> <br/>
            <h4>Preu total: <?php echo $_SESSION['cart']['importTotal'] . "€" ?> </h4> <br/>
        </footer>
    </div>

</html>