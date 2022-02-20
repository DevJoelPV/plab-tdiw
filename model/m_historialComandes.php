<?php
    function historialComandes($connexio, $id){
        try{
            $consulta = $connexio->prepare("SELECT * FROM comandes WHERE idUsuari = '$id'");
            $consulta->execute();
            $compres = $consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
        $connexio = null;
    return ($compres);
    }


    function getDadesProductesAltresComandes($connexio, $comandes){

        $productesComanda=[];

        foreach ($comandes as $comanda){
            $dadesProductes = [];
            foreach ($comanda['idProductes'] as $producte){
                try{
                    $consulta = $connexio->prepare("SELECT * FROM productes WHERE id =" . $producte);
                    $consulta->execute();
                    $dades = $consulta->fetchALL(PDO::FETCH_ASSOC);
                }catch(PDOException $e){
                    echo "Error: " . $e->getMessage();
                }
                $a = $dades[0];
                $dadesProductes[] = $a;
            }
            $productesComanda[] = $dadesProductes;
        }

        $connexio = null;

        return $productesComanda;
    }
?>