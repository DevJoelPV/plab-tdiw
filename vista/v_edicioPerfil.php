<div id="edicioPerfil" class="contenidor">
    <h1>Modificar el meu perfil</h1> <br/>
    <form id="formEdicio" enctype="multipart/form-data" method="post" action="/../PLAB%20TDIW/controlador/c_postEdicioDades.php">

        <div id="informacioCompte">
            <h3>Informació del compte:</h3> <br/>
            <h5>Correu electrònic:</h5>
            <input name="mail" type="email" placeholder="<?php echo $dadesUsuari[0]['email'] ?>" required/>
            <h5>Constrasenya:</h5>
            <input name="password" type="password" pattern="^[A-Za-z0-9]+$" placeholder="Nova contrasenya" required/>
            <br/>
        </div>

        <div id="informacioPersonal">
            <h3>Informació personal</h3> <br/>
            <?php
                if($dadesUsuari[0]['imatgePerfil'] != ""){
                    ?>
                    <img src="<?php echo $dadesUsuari[0]['imatgePerfil'] ?>" id="imatgePerfil"/> <br/>
                <?php
                }else{
                    ?>
                    <img src="/../PLAB%20TDIW/vista/img/user.png" id="imatgePerfil"/> <br/>
                <?php
                }
            ?>
            Canviar foto de perfil: <br/>
            <input type="file" name="profile_image"/>
            <h5>Nom i cognoms:</h5>
            <input type="text" name="nom" pattern="^[A-Za-z ]+$" placeholder="<?php echo $dadesUsuari[0]['nom'] ?>" required/>
            <h5>Adreça:</h5>
            <input type="text" name="adress" pattern="^[A-Za-z0-9 ]+$" maxlength="30" placeholder="<?php echo $dadesUsuari[0]['direccio'] ?>" required>
            <h5>Població:</h5>
            <input type="text" name="poblacio" pattern ="^[A-Za-z ]+$" maxlength="30" placeholder="<?php echo $dadesUsuari[0]['poblacio'] ?>" required>
            <h5>Codi Postal</h5>
            <input id="codiPostalRegistre" type="number" name="codiPostal" pattern="^[0-9]+$" minlength="5" placeholder="<?php echo $dadesUsuari[0]['codiPostal'] ?>" required> <br/>
        </div>
        <input type="submit" value="Actualitzar dades"/>
    </form>
</div>

