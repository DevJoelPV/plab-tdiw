<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_getDadesProducte.php';
    $connexio = connectaBD();
    $dadesProducte = aconsegueixDadesProducte($connexio, $id);

    if(isset($_POST['producteId'])){
        if(isset($_SESSION['cart']['items'][$_POST['producteId']])){
            $_SESSION['cart']['items'][$_POST['producteId']]['quantitat']++;
        }else{
            $_SESSION['cart']['items'][$_POST['producteId']]['producteId'] = $_POST['producteId'];
            $_SESSION['cart']['items'][$_POST['producteId']]['quantitat'] = 1;
            $_SESSION['cart']['items'][$_POST['producteId']]['preu'] = $dadesProducte[0]['preu'];
        }
        $_SESSION['cart']['elementsTotals']++;
    }

    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_detallProducte.php';
    require_once __DIR__ . '/../vista/v_resumCistella.php';

?>