<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_getProductes.php';

    $connexio = connectaBD();
    $productes = agafaProductes($connexio,$material);

    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_mostra_productes.php';
    require_once __DIR__ . '/../vista/v_resumCistella.php';
?>

