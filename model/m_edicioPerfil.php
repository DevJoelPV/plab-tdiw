<?php
function getDadesUsuari($connexio, $id){
    try{
        $consulta = $connexio->prepare("SELECT * FROM usuaris WHERE id =" . $id);
        $consulta->execute();
        $dades = $consulta->fetchALL(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $connexio = null;

    return $dades;

}

function editaDadesUsuari($connexio,$id, $nom, $email, $pass, $adress, $poblacio, $codiPostal){
    try {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $update = "UPDATE usuaris SET nom = '$nom', email = '$email', password='$pass', direccio='$adress', poblacio='$poblacio', codiPostal='$codiPostal' WHERE id = '$id'";
        $consulta = $connexio->prepare($update);
        $consulta->bindParam(":nom", $nom, PDO::PARAM_STR);
        $consulta->bindParam(":email", $email, PDO::PARAM_STR);
        $consulta->bindParam(":password", $pass, PDO::PARAM_STR);
        $consulta->bindParam(":direccio", $adress, PDO::PARAM_STR);
        $consulta->bindParam(":poblacio", $poblacio, PDO::PARAM_STR);
        $consulta->bindParam(":codiPostal", $codiPostal, PDO::PARAM_STR);
        $consulta->execute();
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
    $connexio = null;
}

function afegirImatgePerfil($connexio, $url, $idUsuari){
    try{
        $insercio = "UPDATE usuaris SET imatgePerfil = '$url' WHERE id = '$idUsuari'";
        $consulta = $connexio->prepare($insercio);
        $consulta->execute();
    }catch(PDOException $e){
        echo "ERROR: " . $e ->getMessage();
    }
    $connexio = null;
}
?>