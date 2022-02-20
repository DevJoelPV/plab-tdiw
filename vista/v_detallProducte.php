
<div id="detallProducte">
    <img src="<?php echo $dadesProducte[0]['imatge']?>" style="grid-area: foto"/>

    <div style="grid-area: dadesLaterals" id="dadesLaterals">

        <button class="producte" onclick="tornarProductes(<?php echo $dadesProducte[0]['idCategoria'] ?>)">Tornar enrere</button> <br/> <br/>

        <h3><?php echo $dadesProducte[0]['nom'] ?></h3>
        <p>
            <?php echo $dadesProducte[0]['descripcio']; ?>
        </p>

        <b>Preu: <?php echo $dadesProducte[0]['preu'] . '€' ?></b><br/><br/>
        <button onclick="afegirProducteCistella(<?php echo $dadesProducte[0]['id']?>)">Afegir a la cistella</button>
    </div>

</div>