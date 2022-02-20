<?php
    function agafaProductes($connexio, $material){
        try{
            $consulta = $connexio->prepare("SELECT * FROM productes WHERE idCategoria =". $material);
            $consulta->execute();
            $productes = $consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $connexio = null;

        return ($productes);
    }

?>