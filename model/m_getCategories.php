<?php
    function aconsegueixCateogries($connexio){
        try{
            $consulta = $connexio->prepare("SELECT * FROM categories");
            $consulta->execute();
            $categories = $consulta->fetchALL(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $connexio = null;

        return ($categories);
    }

?>