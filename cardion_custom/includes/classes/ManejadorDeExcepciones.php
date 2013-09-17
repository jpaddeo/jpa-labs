<?php
class ManejadorDeExcepciones extends Exception {
    const APPLICATION_ERROR_DIRECTORY = '/logs/';
    
    public function escribirMensajeEnLog($mensajeAEscribir) {
        $fechaHoraActual = date('Y-m-d h:i:s');
        $fechaActual = date('Ymd');
        $mensajeFormateado = "[" . $fechaHoraActual . "] - " . $mensajeAEscribir;
        error_log($mensajeFormateado, 3, self::APPLICATION_ERROR_DIRECTORY . $fechaActual . ".log");
    }
}