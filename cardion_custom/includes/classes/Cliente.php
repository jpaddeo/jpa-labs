<?php

class Cliente {
    protected $nombre;
    protected $apellido;
    protected $tipo_documento;
    protected $nro_documento;
    protected $direcciones;
    
    public function Cliente($nombre, $apellido, $tipo_documento, $nro_documento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipo_documento = $tipo_documento;
        $this->nro_documento = $nro_documento;
        $this->direcciones = array();
    }
    
    public function obtenerDocumento() {
        return $this->nro_documento;
    }
    
    public function agregarDireccion($calle, $altura) {
        $direccionTemporal = array(
            "calle" => $calle,
            "altura" => $altura
        );
        $this->direcciones[] = $direccionTemporal;
    }
    
    public function obtenerDirecciones() {
        return ($this->direcciones);
    }
    
    public function obtenerSedeCentral() {
        return reset($this->direcciones);
    }
}
