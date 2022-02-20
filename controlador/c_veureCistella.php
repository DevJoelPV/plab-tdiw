<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_getDadesProducte.php';

    $dadesProductes=[];
    $quantitats=[];
    $i=0;
    $connexio = connectaBD();

    if ($item != null){
        unset($_SESSION['cart']['items'][$item]);
    }

    if (!$cistellaBuida){
        foreach ($_SESSION['cart']['items'] as $producte){
            $dadesProductes[$i]=(aconsegueixDadesProducte($connexio,$producte['producteId']));
            $quantitats[$i] = $producte['quantitat'];
            $i++;
        }
    }




    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_veureCistella.php';
?>