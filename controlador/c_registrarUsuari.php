<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_registrarUsuari.php';
    $connexio = connectaBD();

    $nom = $_POST['nom'];
    $email= $_POST['mail'];
    $pass = $_POST['password'];
    $adress = $_POST['adress'];
    $poblacio = $_POST['poblacio'];
    $codiPostal = $_POST['codiPostal'];
    $codiPostal = (int)$codiPostal;

    //VALIDACIÓ
    $isEmail=filter_var($email,FILTER_VALIDATE_EMAIL);
    $isCodiPostal = filter_var($codiPostal,FILTER_VALIDATE_INT);
    $isPass = filter_var($pass, FILTER_SANITIZE_STRING);
    $isNom = filter_var($nom, FILTER_SANITIZE_STRING);
    $isAdress = filter_var($adress, FILTER_SANITIZE_STRING);
    $isPoblacio = filter_var($poblacio,FILTER_SANITIZE_STRING);

    if ($isEmail && $isCodiPostal && $isPass && $isNom && $isAdress && $isPoblacio){
        afegirNouUsuari($connexio,$nom,$email,$pass,$adress,$poblacio,$codiPostal);
        require_once __DIR__ . '/../vista/v_postRegistre.php';
    }else{
        echo "Dades incorrectes";
    }



?>


