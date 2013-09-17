<?php
class Logger {
    private $lPath = null;
    private $lName = null;
    private $lExtension = null;
    private $handle = null;

    public function __construct($path = null, $logName = null, $extension = null) {
        if ($path) {
            $this->lPath = $path;
        } else {
            $this->lPath = "/logs/";
        }
        if ($logName) {
            $this->lName = $logName;
        } else {
            $this->lName = "error";
        }
        if ($extension) {
            $this->lExtension = $extension;
        } else {
            $this->lExtension = 'log';
        }
        $this->logOpen();
    }

    function __destruct() {
        fclose($this->handle);
    }

    // Abro el archivo de log
    private function logOpen() {
        $today = date('Ymd'); // Fecha Actual
        // Abro el archivo, si no existe, entonces lo agrega.
        $fullFileName = $this->lPath .  $today . '_' . $this->lName . '.' . $this->lExtension;
        $this->handle = fopen($fullFileName, 'a') or exit("No es posible abrir el archivo de log: " . $fullFileName);
    }

    // Escribe un mensaje en el log
    public function logWrite($tipo_mensaje, $mensaje) {
        if (!empty($mensaje)) {
            $hora = date('d-m-Y H:i:s');
            $tipo_msj = (!empty($tipo_mensaje) ? $tipo_mensaje : "DEBUG");
            $msj = "[" . $hora . "]". " - [" . $tipo_msj . "]: " . $mensaje . "\n";
            fwrite($this->handle, $msj);
        }
    }

    // Limpio el archivo de log
    public function logClear() {
        ftruncate($this->handle, 0);
    }

}