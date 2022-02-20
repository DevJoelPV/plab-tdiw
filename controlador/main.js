'use strict';

//Obre desplegable del registre
function obrirDesplegable(id){
    document.getElementById(id).style.width = "100%";
    document.getElementById(id).style.height = "100%";
}

//Tanca desplegable del registre
function tancarDesplegable(id){
    document.getElementById(id).style.height = "0px";
    document.getElementById(id).style.width = "0px";
}

//Menu desplegable
$(document).ready(function (){
    $('#usuari').hide();
    $('#botoUsuari').click(function (){
        $("#usuari").animate({width:'toggle'},1000);
    })
});

//extra info dels productes
$(document).ready(function (){
    $('.extraInfo').hide();

})
function mostraMesInfo(id){
    id = '#' + id + 'extraInfo';
    $(id).slideToggle();
}


//Crides ajax
function veureProductes(a){
    $.get('index.php?action=2', {material : a}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function veureDetallProducte(a,b){
    $.get('index.php?action=3', {material : a, producte: b}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function tornaInici(){
    $.get('index.php?action=1', function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function tornarProductes(categoria){
    $.get('index.php?action=2',{material : categoria}, function (resposta){
        $('#materialsCategories').html(resposta);
    } )

}

function logOut(){
    $.get('index.php?action=1', {logOut:true}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function afegirProducteCistella(id){
    //alert(id);
    $.post('index.php?action=3', {producteId : id}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function obrirCistella(){
    $.get('index.php?action=5',function (resposta){
        $('#materialsCategories').html(resposta);
    })
}


function realitzarPagament(){
    $.get('index.php?action=6', function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function borrarCistella(){
    $.post('index.php?action=5', {eliminarCistella : true}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function eliminarUnElementCistella(id){
    $.post('index.php?action=5', {reduirItem : id}, function (resposta){
        $('#materialsCategories').html(resposta);
    })
}


function modificarPerfil(){
    $.get('index.php?action=7', function (resposta){
        $('#materialsCategories').html(resposta);
    })
}

function historialComandes(){
    $.get('index.php?action=8', function (resposta){
        $('#materialsCategories').html(resposta);
    })
}