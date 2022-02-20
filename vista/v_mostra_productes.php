<body>
    <div id="mostraProductes">
        <table style="grid-area: taulaProductes">
        <?php //or
            $i = 0;
            if($material == '1'){
                $cat = "Gold";
            }
            else if($material == '2'){
                $cat = "Silver";
            }
            for($row = 0; $row <3; $row++){
                echo "<tr>";
                for($col = 0; $col<3;$col++){
                    echo "<td>"; ?>
                    <div class="producte">
                        <img onclick="mostraMesInfo(<?php echo $i ?>); " src="<?php echo $productes[$i]['imatge'] ?>"><br/>
                        <h3> <?php echo $productes[$i]['nom'] ?> </h3>
                        <div id="<?php echo $i ?>extraInfo" class="extraInfo">
                            <b><?php echo $productes[$i]['preu'] . "€" ?> </b><br/>
                            <b>Categoria: <?php echo $cat ?> </b> <br/><br/>
                            <a onclick="veureDetallProducte(<?php echo $material ?>, <?php echo $i+1 ?> )"><button class="botoMesInfo">Més informació</button></a>
                        </div>
                    </div>

                    <?php
                    $i++;
                    echo "</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>
    </div>
</body>
