<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_iniciSessio.php';

    $email = $_POST['mail'];
    $pass = $_POST['password'];

    $isEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
    $isPass = filter_var($pass, FILTER_SANITIZE_STRING);

    $connexio = connectaBD();

    if ($isEmail && $isPass){

        if (iniciSessio($connexio,$email,$pass)){
            require_once __DIR__ . '/../vista/v_postIniciSessio.php';
        }
        else{
            echo "Usuari o contrasenya incorrectes";
        }
    }else{
        echo "format incorrecte de dades";
    }


?>