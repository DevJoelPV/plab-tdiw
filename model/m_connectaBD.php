
<?php
    function connectaBD(){
        $user = "root";
        $servidor = "127.0.0.1";
        $password="";
        try {
            $connexio = new PDO("mysql:host=$servidor;dbname=gsbd;charset=UTF8", $user, $password);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $connexio;
    }
?>

