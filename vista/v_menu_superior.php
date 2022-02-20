<?php
    //print_r($_SESSION);
    if (isset($_SESSION['idUsuari'])){
        ?>
        <html>
        <body>
        <div class="contenidor" id="contenidorGeneral">
            <div style="grid-area: menu" id="menuSuperior">
                <header>
                    <nav>
                        <h1 id="logo"><a onclick="tornaInici()">Gold&Silver</a></h1>
                        <ul class="barraMenu">
                            <div id = "noUsuari">
                                <li class="menu"><a onclick="tornaInici()" target="_self" id="inici" >Inici</a></li>
                                <li class="menu" id="botoUsuari">Usuari</li>
                            </div>
                            <div id="usuari">
                                <li onclick="logOut()" class="menu">Log out</li>
                                <li onclick="modificarPerfil();" class="menu">Perfil</li>
                                <li class="menu" onclick="historialComandes()">Altres compres</li>
                            </div>
                            <li class="menu"><img src="/../PLAB%20TDIW/vista/img/cart.png" id="fotoCarro" alt="cistell de la compra" onclick="obrirCistella()"/></a></li>
                        </ul>
                    </nav>
                </header>
            </div>

        </body>
        </html>
            <?php
    }else{
    ?>
<html>
    <body>
        <div class="contenidor" id="contenidorGeneral">
            <div style="grid-area: menu" id="menuSuperior">
                <header>
                    <nav>
                        <h1 id="logo"><a onclick="tornaInici()">Gold&Silver</a></h1>
                        <ul class="barraMenu">
                            <div id = "noUsuari">
                                <!--onclick="load('#materialsCategories', 'index.php?action=1')-->
                                <li class="menu"><a onclick="tornaInici()" target="_self" id="inici" >Inici</a></li>
                                <li class="menu" id="botoUsuari">Usuari</li>
                            </div>
                            <div id="usuari">
                                <li class="menu" onclick="obrirDesplegable('register')">Registrar-se</li><br/>
                                <li class="menu" onclick="obrirDesplegable('logIn')">Log In</li><br/>
                            </div>
                                <li class="menu"><img src="/../PLAB%20TDIW/vista/img/cart.png" id="fotoCarro" alt="cistell de la compra" onclick="obrirCistella()"/></li>
                        </ul>
                    </nav>
                </header>
            </div>

    </body>
</html>
<?php
    }
?>
