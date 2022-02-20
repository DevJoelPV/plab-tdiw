<?php
    function aconsegueixDadesProducte($connexio, $id){
        try{
            $consulta = $connexio->prepare("SELECT * FROM productes WHERE id =" . $id);
            $consulta->execute();
            $dades = $consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $connexio = null;

        return $dades;

    }



?>