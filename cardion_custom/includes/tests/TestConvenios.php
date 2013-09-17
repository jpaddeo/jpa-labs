<?php

include_once '../classes/Cliente.php';
include_once '../classes/Convenio.php';

class TestConvenios extends PHPUnit_Framework_TestCase {
    private $encontradorDeEquipos;
    
    protected function setUp() {
        $this->encontradorDeEquipos = new EncontradorDeEquipos();
    }
    
    public function testAsignarClienteAConvenioYVerificarSedeCentral() {
        $clienteAAsignar = new Cliente("Martiniano","Molina","DNI",11212212);
        $clienteAAsignar->agregarDireccion("Avenida Monroe", 3750);
        $convenio = new Convenio($clienteAAsignar);
        
        $this->assertEquals(array("calle" => "Avenida Monroe", "altura" => 3750), $convenio->obtenerSedeCentralCliente());
        //$this->assertNotEmpty($convenio->obtenerSedeCentralCliente());
    }
    
    public function testAgregarEquiposAConvenioYVerificarCantidad() {
        $equipo = $this->encontradorDeEquipos->encontrarEquipoPorId(1);
    }
}
