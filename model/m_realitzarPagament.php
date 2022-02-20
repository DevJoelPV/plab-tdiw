<?php
function executarCompra($connexio,$data, $idUsuari,$importTotal,$totalElements, $idProductes, $quantitatProductes, $preuProductes)
{
    try {
        $insert = "INSERT INTO comandes(data, idUsuari, importTotal, totalElements, idProductes,quantitatProductes, preuProductes) VALUES ('$data', '$idUsuari','$importTotal','$totalElements', '$idProductes','$quantitatProductes','$preuProductes')";
        $consulta = $connexio->prepare($insert);
        $consulta->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    $connexio = null;
}

/*
function afegirLineaComanda($connexio, $idProductes, $quantitatProductes, $preuTotal, $preuProductes){
    try {
        $insert =  "INSERT INTO liniacomanda(idProductes, quantitatProductes, preuProductes, preuTotal,preuProductes) VALUES ('$idProductes','$quantitatProductes','$preuTotal','$preuProductes')";
        $consulta = $connexio->prepare($insert);
        $consulta->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    $connexio = null;
}
*/
?>

