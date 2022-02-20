<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_historialComandes.php';
    $connexio = connectaBD();
    $compres = historialComandes($connexio, $_SESSION['idUsuari']);

    $buit = true;
    if($compres !=null){
        for ($i=0;$i<sizeof($compres);$i++){
            $compres[$i]['idProductes'] = explode(',',$compres[$i]['idProductes']);
            $compres[$i]['quantitatProductes'] = explode(',',$compres[$i]['quantitatProductes']);
            $compres[$i]['preuProductes'] = explode(',',$compres[$i]['preuProductes']);
        }
        $buit = false;
        $connexio = connectaBD();

        //retorna array de arrays amb les dades de cada producte de cada comanda.
        $dadesProductes = getDadesProductesAltresComandes($connexio, $compres);
    }


    require_once __DIR__ . '/../vista/v_desplegable_registreLogIn.php';
    require_once __DIR__ . '/../vista/v_menu_superior.php';
    require_once __DIR__ . '/../vista/v_historialComandes.php';
?>