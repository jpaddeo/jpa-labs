var cantidadFilasPuntos = 0;
var ultimosCoeficientesCalculados = {};

$(function() {
    $("#boton-nuevo-punto").click(function() {
        agregar_fila_de_puntos();
        setear_eventos_eliminar();
    });
});

function agregar_fila_de_puntos() {
    var tBodyPuntos = $("#puntos-ingresados > tbody");
    if (punto_anterior_correcto()) {
        cantidadFilasPuntos++;
        var trAIngresar = "<td><input name='puntoX" + cantidadFilasPuntos + "' id='puntoX" + cantidadFilasPuntos + "' class='puntosX'></td>";
        trAIngresar += "<td><input name='puntoY" + cantidadFilasPuntos + "' id='puntoY" + cantidadFilasPuntos + "' class='puntosY'></td>";
        trAIngresar += "<td><div class='ui red icon button botones-eliminar' data-fila-id='" + cantidadFilasPuntos + "'><i class='delete icon'></i></div></td>";
        tBodyPuntos.append("<tr id='fila-punto" + cantidadFilasPuntos + "' class='fila-puntos'>" + trAIngresar + "</tr>");
    } else {
        alert("Debe ingresar tanto el valor de la X como el valor de la Y antes de agregar un nuevo punto!");
    }
}

function punto_anterior_correcto() {
    if (cantidadFilasPuntos > 0) {
        var valorX = $("#puntoX" + cantidadFilasPuntos).val();
        var valorY = $("#puntoY" + cantidadFilasPuntos).val();
        return (!empty(valorX) && !empty(valorY));
    }

    return true;
}

function setear_eventos_eliminar() {
    $(".botones-eliminar").click(function() {
        var idFila = $(this).attr('data-fila-id');
        var tFilaABorrar = $("#puntos-ingresados > tbody tr[id='fila-punto" + idFila + "']");
        $(tFilaABorrar).remove();
        if ($("#puntos-ingresados > tbody tr").length === 0) {
            cantidadFilasPuntos = 0;
        }
        //recalcular_coeficientes();
    });
}

function obtenerPuntosPorVariable(variable) {
    return ($.map($(".puntos" + variable), function(pto) {
        return $(pto).val();
    }));
}

function obtenerPuntosParOrdenado() {
    var puntosXY = [];

    var puntosX = obtenerPuntosPorVariable("X");
    var puntosY = obtenerPuntosPorVariable("Y");
    for (var i = 0; i < puntosX.length; i++) {
        puntosXY.push([puntosX[i], puntosY[i]]);
    }

    return puntosXY;
}

function recalcular_coeficientes() {
    var puntosXY = $.parseJSON(obtenerPuntosParOrdenado());
    alert("LALA");
    $.each(puntosXY, function(clave, valor) {
        console.log(valor[0]);
        console.log(valor[1]);
    });
}

function empty(obj) {
    if (typeof obj === 'undefined')
        return true;
    if (obj === "0" || obj === "" || obj === null || obj === false)
        return true;
    if (typeof obj === 'number' && (isNaN(obj) || obj === 0))
        return true;
    if (typeof obj === 'object' && obj.length === 0)
        return true;
    if (obj instanceof Date && isNaN(Number(obj)))
        return true;
    return false;
}
