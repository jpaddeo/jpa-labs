<?php
require_once 'ManejadorDeBaseDeDatos.php';

class EncontradorDeEquipos {
    private $conectorBaseDeDatos;
    
    public function EncontradorDeEquipos($conectorDeBD) {
        $this->conectorBaseDeDatos = $conectorDeBD;
    }
    public static function encontrarEquipoPorId($idDeEquipoABuscar) {
        $queryEquipo = "SELECT * FROM equipos WHERE id = " . $idDeEquipoABuscar;
        $resultadoEquipo = $this->conectorBaseDeDatos->obtenerResultadoDeConsulta($queryEquipo);
        
        return $resultadoEquipo;
    }
}
