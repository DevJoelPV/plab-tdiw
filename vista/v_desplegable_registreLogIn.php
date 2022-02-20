<html>
    <body>
        <div id="register" class="desplegable">
            <a class="tancarDesplegable" onclick="tancarDesplegable('register')">&times;</a>
            <form method="post" id="formulariRegistre" action="/../PLAB%20TDIW/controlador/c_registrarUsuari.php">
                <div>NOU USUARI</div>
                <input id="nomRegistre" type="text" name="nom" pattern="^[A-Za-z ]+$" placeholder="Nom i cognoms" required/><br/>
                <input id="emailRegistre" name="mail" type="email" placeholder="Correu electrònic"/><br/>
                <input id="passwordRegistre" name="password" type="password" pattern="^[A-Za-z0-9]+$" placeholder="Contrasenya" required/> <br/>
                <input id="adressRegistre" type="text" name="adress" pattern="^[A-Za-z0-9 ]+$" maxlength="30" placeholder="Adreça" required> <br/>
                <input id="poblacioRegistre" type="text" name="poblacio" pattern ="^[A-Za-z ]+$" maxlength="30" placeholder="Població" required> <br/>
                <input id="codiPostalRegistre" type="number" name="codiPostal" pattern="[0-9]" minlength="5" placeholder="Codi postal" required><br/>
                <input id="botoRegistre" type="submit" onclick="load('#register','index.php?action=4')" name="botoEnviar" value="Registrar-se">
            </form>
        </div>
        <div id="logIn" class="desplegable">
            <a class="tancarDesplegable" onclick="tancarDesplegable('logIn')">&times;</a>
            <form method="post" id="formulariIniciSessio" action="/../PLAB%20TDIW/controlador/c_iniciSessio.php">
                <p>INICIAR SESSIÓ</p>
                <input type="email" name="mail" placeholder="El teu correu electrònic"/><br/>
                <input type="password" name="password" placeholder="Contrasenya"/><br/>
                <input type="submit" name="botoEnviar" value="Entrar" onclick="tancarDesplegable('logIn')"/>
            </form>
        </div>

    </body>
</html>
