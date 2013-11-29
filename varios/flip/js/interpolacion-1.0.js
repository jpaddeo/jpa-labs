function diferencia(n, p, q, r){
    return ( (r-p) / (q-n) );
}

function magnitudVector(vector){
    return vector.length;
}

function interpolar(vectorX, vectorY){
    var longitudVectorX = magnitudVector(vectorX);
    var longitudVectorY = magnitudVector(vectorY);
    var orden = new Array(longitudVectorY-1);
    var salto = longitudVectorX - longitudVectorY;
    var respuestaJson = "\"orden"+salto+"\":[";
    
    for(i=0; i < longitudVectorY-1; i++){
        orden[i] = diferencia(vectorX[i], vectorY[i], vectorX[i+1+salto], vectorY[i+1]);
        respuestaJson += orden[i];
        if(i!=longitudVectorY-2){ respuestaJson +=",";}
    }
    
    respuestaJson += "]";
    
    if(magnitudVector(orden)>1){
        respuestaJson += ",";
        var resultado=interpolar(vectorX, orden);
    }
    
    if (typeof(resultado) !== 'undefined') {
        respuestaJson += resultado;
    }
    
    return respuestaJson;
}

function coeficientes(cadenaJSON){
    var oVectores = $.parseJSON(cadenaJSON);
    return "\"progresivo\":"+armaCadenaCoeficientes(oVectores, "p")+",\"regresivo\":"+armaCadenaCoeficientes(oVectores, "r");
}

function armaCadenaCoeficientes(obj, tipo) {
    var cadena="[";
    var posicion = 0;
    var j=0;
    
    $.each(obj, function(i, elem) {
	if(tipo=="r" || tipo == "R"){ posicion = elem.length-1; };
        cadena +=  elem[posicion]+",";
	j++;
    });
    
    return cadena.replace(/,$/,'')+"]";
}

function calcularPolinomio(cadenaCoeficientesJSON){
    var oVectores = $.parseJSON(cadenaCoeficientesJSON);
    var total=0;

    var vectorXreverso = oVectores.vectorX.slice();
    var totalProgresivo =  totalRegresivo = 0;
    vectorXreverso.reverse();
    
    for(i=0; i<oVectores.progresivo.length; i++){
	totalProgresivo += oVectores.progresivo[i]*productoriaVectorX(vectorXreverso, i, oVectores.valorX);
	totalRegresivo += oVectores.regresivo[i]*productoriaVectorX(oVectores.vectorX, i, oVectores.valorX);
    }
    
    return "{\"resultadoProgresivo\":"+totalProgresivo+",\"resultadoRegresivo\":"+totalRegresivo+"}";
}

function productoriaVectorX(vector, ciclos, multiplicador){
    if(ciclos==0){return 1;};
    return (multiplicador-vector[vector.length-ciclos])*productoriaVectorX(vector, ciclos-1, multiplicador);
}
function armaCadenaPolinomio(cadenaCoeficientesJSON){
    var oVectores = $.parseJSON(cadenaCoeficientesJSON);
    var signo = cPolinomioProgresivo =  cPolinomioRegresivo ="";
    var vectorXreverso = oVectores.vectorX.slice();
    vectorXreverso.reverse();
    for(i=0; i<oVectores.progresivo.length; i++){
        signo = oVectores.progresivo[i] < 0 ? "" : "+";
        cPolinomioProgresivo += signo+oVectores.progresivo[i]+armaCadenaProductoriaVectorX(vectorXreverso, i);
        signo = oVectores.regresivo[i] < 0 ? "" : "+";
        cPolinomioRegresivo += signo+oVectores.regresivo[i]+armaCadenaProductoriaVectorX(oVectores.vectorX, i);
    }
    return "{\"cadenaProgresivo\":"+cPolinomioProgresivo.replace(/^\+/,'')+",\"cadenaRegresivo\":"+cPolinomioRegresivo.replace(/^\+/,'')+"}";
}

function armaCadenaProductoriaVectorX(vector, ciclos){
    if(ciclos==0) {
        return "";
    };
    var signo = -vector[vector.length-ciclos] < 0 ? "" : "+";
    return ("(x"+signo+-vector[vector.length-ciclos]+")*"+armaCadenaProductoriaVectorX(vector, ciclos-1)).replace(/\*$/,'');
}

function factorial(i){
    if(i==0){
        return 1;
    };
    
    return i*factorial(i-1);
}

function interpolacion(Xi, Yi, tipo, valorX, idResultado){
    var cadenaVectores = "{\"vectorY\":"+JSON.stringify(Yi)+",";
    var resultado = cadenaVectores+interpolar(Xi, Yi)+"}";
    $("#" + idResultado).html("");
    $("#" + idResultado).append("<br>Vectores Columna de Tabla de ordenes: <br>"+resultado+"<br>");
    var otroResultado = coeficientes(resultado);
    $("#" + idResultado).append("Vector Coeficientes: <br>"+otroResultado+"<br>");
    $("#" + idResultado).append("Cadena Polinomio: "+armaCadenaPolinomio("{\"vectorX\":"+JSON.stringify(Xi)+",\"valorX\":"+valorX+","+otroResultado+"}")+"<br>");
    var valor = calcularPolinomio("{\"vectorX\":"+JSON.stringify(Xi)+",\"valorX\":4,"+otroResultado+"}");
    $("#" + idResultado).append("Valor: "+valor+"<br>");
}