<div id="historialComanda" class="contenidor">
    <h1>HISTORIAL COMANDES: </h1> <br/>
<?php
    if(!$buit){
        $i=0;
        foreach ($compres as $comanda){
            ?>
            <table id="taulaHistorial">
                <tr>
                    <td><h3>Compra realitzada: <?php echo $comanda['data'] ?> </h3></td>
                    <td><h3> Preu total: <?php echo $comanda['importTotal'] . "€" ?> </h3></td>
                </tr>
            <?php
            for ($j=0;$j<sizeof($dadesProductes[$i]);$j++){
                ?>
                    <tr>
                        <td class="fotoHistorial"><img src="<?php echo $dadesProductes[$i][$j]['imatge'] ?>"></td>
                        <td><h3>Nom: <?php echo $dadesProductes[$i][$j]['nom'] ?></h3></td>
                        <td><h3>Quantitat: <?php echo $comanda['quantitatProductes'][$j] ?></h3></td>
                        <td><h3><?php echo $dadesProductes[$i][$j]['preu'] . "€" ?></h3></td>
                    </tr>
                <?php
            }
            $i++;
            ?>
            <br/>
            <?php
        }
    }else{
        ?>
        <h1>No s'han realitzat compres anteriorment :(</h1>
        <?php
    }

?>
</div>
