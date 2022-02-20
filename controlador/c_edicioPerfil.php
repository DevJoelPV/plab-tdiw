<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_edicioPerfil.php';

    $connexio = connectaBD();
    $dadesUsuari = getDadesUsuari($connexio,$_SESSION['idUsuari']);

    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_edicioPerfil.php';
?>