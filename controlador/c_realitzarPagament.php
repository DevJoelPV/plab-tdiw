<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_realitzarPagament.php';

    $connexio = connectaBD();
    $logIn = false;

    $DateAndTime = date('d-m-Y', time());
    if(isset($_SESSION['idUsuari'])) {
        $logIn = true;

        $idProductes = "";
        $quantitatProductes = "";
        $preuProductes = "";

        foreach ($_SESSION['cart']['items'] as $element){
            if ($idProductes == ""){
                $idProductes = $element['producteId'];
                $quantitatProductes = $element['quantitat'];
                $preuProductes = $element['preu'];
            }else{
                $idProductes = $idProductes . "," . $element['producteId'];
                $quantitatProductes = $quantitatProductes . "," . $element['quantitat'];
                $preuProductes = $preuProductes  . "," . $element['preu'];
            }

        }

        executarCompra($connexio, $DateAndTime, $_SESSION['idUsuari'], $_SESSION['cart']['importTotal'], $_SESSION['cart']['elementsTotals'],$idProductes, $quantitatProductes, $preuProductes);
        //$connexio = connectaBD();
        //afegirLineaComanda($connexio,$idProductes, $quantitatProductes, getPreuTotal(), $preuProductes);
        unset($_SESSION['cart']);
    }

    require_once __DIR__ . '/../vista/v_realitzarPagament.php';
?>