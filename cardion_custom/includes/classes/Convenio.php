<?php

class Estados_Convenios {

    const BORRADOR = "BORRADOR";
    const PENDIENTE_APROBACION = "PENDIENTE APROBACION";
    const APROBADO = "APROBADO";

}

class Convenio {

    private $cliente;
    private $equipos;
    private $cursos;
    private $materiales;
    private $estado;

    public function Convenio($clienteDelConvenio = null) {
        $this->estado = Estados_Convenios::BORRADOR;
        $this->cliente = $clienteDelConvenio;
    }

    public function agregarEquipo($equipoAAgregar) {
        if (!empty($equipoAAgregar)) {
            $this->equipos[] = $equipoAAgregar;
        }
    }
    
    public function agregarMaterial($materialAAgregar) {
        if (!empty($materialAAgregar)) {
            $this->materiales[] = $materialAAgregar;
        }
    }
    
    public function agregarCurso($cursoAAgregar) {
        if (!empty($cursoAAgregar)) {
            $this->cursos[] = $cursoAAgregar;
        }
    }
    
    public function obtenerSedeCentralCliente() {
        return $this->cliente->obtenerSedeCentral();
    }

}
