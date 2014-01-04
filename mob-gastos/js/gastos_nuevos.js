function llenarTipoGastos() {
    var options = [];
    $.ajax({
        type: "GET",
        url: "../libs/obtener_tipos_gastos.php",
        success: function (data) {
            alert(data);
            // options
            // options.push("<option value='", it.tg_valor, "'>", it.tg_descripcion, "</option>" );
            // $("#tipo_gasto").html(options.join(""));
        },
        error: function (errXML, errStatus) {
            alert("ERROR: " + errStatus);
        }
    });
}

function onSuccess(data, status) {
    data = $.trim(data);
    $("#notification").text(data);
}
function onError(data, status) {
    alert(status);
}

$(document).ready(function() {
    //llenarTipoGastos();
    
    $("#submit").click(function(){
        var formData = $("#callAjaxForm").serialize();
        alert(formData);
        $.ajax({
            type: "POST",
            url: "../forms/gastos_nuevos.php",
            cache: false,
            data: {
                monto: pMonto,
                tipo_monto: pTipoMonto
            },
            data: formData,
            success: onSuccess,
            error: onError
        });
  
        return false;
    });
});
/*
$(function () {
    $("#btn_grabar").click(function() {
        var fmonto = $.trim($("#monto_gasto").val());
        if (fmonto) {
            $.ajax({
                type: "POST",
                url: "/libs/procesar_gastos.php",
                data: ({
                    monto: fmonto
                }),
                cache: false,
                async: false,
                dataType: "text",
                success: function (data) {
                    $("#resultado").html("OKA");
                    $("#resultado").show();
                    $("#form_nuevo_gasto").hide();
                },
                error: function (errXHR, errText) {
                    alert(errText);
                }
            });           
        }
    });
}); */