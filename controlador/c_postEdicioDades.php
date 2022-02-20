<?php
    require_once __DIR__ . '/../model/m_connectaBD.php';
    require_once __DIR__ . '/../model/m_edicioPerfil.php';

    $connexio = connectaBD();

    if($_FILES['profile_image']['name'] != ""){
        $url = "/../PLAB%20TDIW/vista/img/imatge_perfil/" .  $_FILES['profile_image']['name'];
        afegirImatgePerfil($connexio, $url, $_SESSION['idUsuari']);
        $filesAbsolutePath = 'C:/xampp/htdocs/PLAB TDIW/vista/img/imatge_perfil/' . $_FILES['profile_image']['name'];
        move_uploaded_file($_FILES['profile_image']['tmp_name'],$filesAbsolutePath);
        $connexio = connectaBD();
    }


    $nom = $_POST['nom'];
    $email= $_POST['mail'];
    $pass = $_POST['password'];
    $adress = $_POST['adress'];
    $poblacio = $_POST['poblacio'];
    $codiPostal = (int)$_POST['codiPostal'];

    //VALIDACIÓ
    $isEmail=filter_var($email,FILTER_VALIDATE_EMAIL);
    $isCodiPostal = filter_var($codiPostal,FILTER_VALIDATE_INT);
    $isPass = filter_var($pass, FILTER_SANITIZE_STRING);
    $isNom = filter_var($nom, FILTER_SANITIZE_STRING);
    $isAdress = filter_var($adress, FILTER_SANITIZE_STRING);
    $isPoblacio = filter_var($poblacio,FILTER_SANITIZE_STRING);

    if ($isEmail && $isCodiPostal && $isPass && $isNom && $isAdress && $isPoblacio){
        editaDadesUsuari($connexio, $_SESSION['idUsuari'], $nom, $email,$pass, $adress, $poblacio, $codiPostal);
        require_once __DIR__ . '/../vista/v_postEdicioDades.php';
    }else{
        echo "Dades incorrectes";
    }




?>