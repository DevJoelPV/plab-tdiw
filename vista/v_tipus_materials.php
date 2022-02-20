<?php
    for ($i = 0; $i<sizeof($categories);$i++){
        $categories[$i]['nom'] = htmlentities($categories[$i]['nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }
?>

<html>
    <body id="materialsCategories">
            <section id = "materials">
                    <div style="grid-area: gold" id="gold">
                        <p>Productes: </p>
                        <h2><a onclick="veureProductes('1')" id="botoOR"><?php echo $categories[0]['nom'] ?></option></a></h2>
                    </div>

                    <div style="grid-area: silver" id="silver">
                        <p>Productes: </p>
                        <h2> <a onclick="veureProductes('2')" id="botoPlata"><?php echo $categories[1]['nom'] ?></a></h2>
                    </div>
            </section>
        </div>
    </div>
    </body>

</html>