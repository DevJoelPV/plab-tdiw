<?php
function afegirNouUsuari($connexio,$nom,$email,$pass,$adress,$poblacio,$codiPostal)
{
    try {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $insert = "INSERT INTO usuaris(nom, direccio, codiPostal, email, password, poblacio) VALUES ('$nom', '$adress','$codiPostal','$email','$pass','$poblacio')";
        $consulta = $connexio->prepare($insert);
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
?>

