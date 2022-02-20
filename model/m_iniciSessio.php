<?php
    function iniciSessio($connexio,$email, $pass)
    {
        try {
            $consulta = $connexio->prepare("SELECT * FROM usuaris WHERE email = '$email'");
            $consulta->execute();
            $dadesUsuariLogIn = $consulta->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $connexio = null;


        if ($dadesUsuariLogIn != null) {
            if ($email == $dadesUsuariLogIn[0]['email']) {
                if (password_verify($pass, $dadesUsuariLogIn[0]['password'])) {
                    echo "Contrasenya correcte";
                    if(!isset($_SESSION['idUsuari'])){
                        $_SESSION['idUsuari'] = $dadesUsuariLogIn[0]['id'];
                        //print_r($_SESSION['idUsuari']);
                    }
                    return true;
                }
            } else {
                return false;
            }
        }


    }

?>