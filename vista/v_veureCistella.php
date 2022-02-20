    <?php
        if($i==0){
            ?>
                 <h1 id="cistellaBuida">La cistella esta buida :(</h1>
        <?php
        }else{
            ?>
            <div id="cistellaCompleta" class="contenidor">
                <h3 id="nomCistella">Cistella:</h3>
                <h3 id="eliminarCistella" onclick="borrarCistella()">Eliminar cistella</h3>
            <div id="taulaCistella" style="grid-area: taulaCistella">
            <table>
                <?php
                $i=0;
                foreach ($dadesProductes as $element){
                    ?>
    <tr>
        <?php
        foreach ($element as $eProducte){
            ?>
            <td><img src="<?php echo $eProducte['imatge'] ?>"/> </td>
            <td><h3><?php echo $eProducte['nom']?></h3></td>
            <td><h3>Quantitat: <?php echo $quantitats[$i] ?></h3></td>
            <td><h3>Preu: <?php echo $eProducte['preu'] . "€" ?></h3></td>
            <td><a onclick="eliminarUnElementCistella(<?php echo $eProducte['id'] ?>)">&times;</a></td>
            <?php
        }
        ?>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
</div>
<button id="realitzaPagament" onclick="realitzarPagament()">Realitzar pagament</button>
<h3 id="resumCompra">Total: <?php echo getPreuTotal() . "€" ?></h3>

</div>
<?php
        }
     ?>


