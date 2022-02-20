<?php
if ($logIn){
    ?>
    <div id="pagamentRealitzat">
        <h1>Pagament realitzat correctament</h1>
        <h2>Gràcies per a la seva compra!</h2>
        <button><a href="/../PLAB%20TDIW/index.php?action=1">Retorna a la pàgina</a></button>
    </div>
    <?php
}else{
    ?>
    <div id="pagamentRealitzat">
        <h1>El pagament no s'ha pogut realitzar</h1><br/>
        <h2>Per a realitzar una compra és necessari estar registrat i fer login</h2>
        <button><a href="/../PLAB%20TDIW/index.php?action=1">Retorna a la pàgina</a></button>
    </div>
    <?php
}
?>