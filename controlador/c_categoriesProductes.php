
<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_getCategories.php';

    $connexio = connectaBD();
    $categories = aconsegueixCateogries($connexio);

    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_tipus_materials.php';
    require_once __DIR__ . '/../vista/v_resumCistella.php';
?>


