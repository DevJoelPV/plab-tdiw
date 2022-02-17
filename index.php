<!DOCTYPE HTML>
    <html>
        <head>
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="Last-Modified" content="0">
            <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
            <meta http-equiv="Pragma" content="no-cache">

            <meta charset="utf-8"/>
            <meta name="categories de Productes"/>
            <meta title="Gold&Silver"/>
            <link rel="stylesheet" type="text/css" href="/../PLAB%20TDIW/vista/estilsGoldSilver.css"/>
            <script defer src="/../PLAB%20TDIW/controlador/main.js"></script>
            <script type="text/javascript" src="/../PLAB%20TDIW/controlador/jquery-3.6.0.min.js"> </script>
            <title>Gold&Silver</title>
        </head>
    </html>

<?php
    //session_start();
    if(isset($_GET['logOut'])){
        unset($_SESSION['idUsuari']);
    }

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
        $_SESSION['cart']['importTotal'] = 0.0;
        $_SESSION['cart']['items'] = array();
        $_SESSION['cart']['elementsTotals'] = 0;
    }

    $action = 1;
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    $material = null;
    $producte = null;
    switch ($action) {
        case '1': //categoria producte
            include __DIR__ . '/controlador/c_categoriesProductes.php';
            break;

        case '2': //llistat producte
            if (isset($_GET['material'])) {
                $material = $_GET['material'];
            }
            include __DIR__ . '/controlador/c_llistatProducte.php';
            break;

        case '3': //detall producte
            if (isset($_POST['producteId'])) {
                $id = $_POST['producteId'];
            }
            if (isset($_GET['material']) && isset($_GET['producte'])) {
                $material = $_GET['material'];
                $producte = $_GET['producte'];
                $id = $material . $producte;
            }
            include __DIR__ . '/controlador/c_detallProducte.php';
            break;
        case '4': //postRegistre
            include __DIR__ . '/controlador/c_registrarUsuari.php';
            break;
        case '5': //veure cistella
            if (isset($_POST['reduirItem'])){
                $item = $_POST['reduirItem'];
            }else{
                $item = null;
            }
            if(isset($_POST['eliminarCistella'])){
                unset($_SESSION['cart']);
                $cistellaBuida = true;
            }else{
                $cistellaBuida = false;
            }
            include __DIR__ . '/controlador/c_veureCistella.php';
            break;
        case '6': //realitzar pagament
            include __DIR__ . '/controlador/c_realitzarPagament.php';
            break;
        case '7':
            $modificat = false;
            include __DIR__ . '/controlador/c_edicioPerfil.php';
            break;
        case '8':
            include __DIR__ . '/controlador/c_historialComandes.php';
    }


    function getPreuTotal(){
        $preuTotal = 0.0;
        foreach ($_SESSION['cart']['items'] as $item) {
            $preuTotal = $preuTotal + ($item['quantitat'] * $item['preu']);
        }
        $_SESSION['cart']['importTotal'] = $preuTotal;
        return $preuTotal;
    }