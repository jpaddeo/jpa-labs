<?php

include_once '../classes/Cliente.php';

class TestClientes extends PHPUnit_Framework_TestCase {

    public function testCreacionDeNuevoCliente() {
        $cliente = new Cliente("Juan Pablo", "Addeo", "DNI", 32996008);
        $this->assertNotEmpty($cliente);
    }
    
    public function testAgregadoDeNuevoClienteAColeccionDeClientes() {
        $coleccionDeClientes = array();
        $coleccionDeClientes[] = new Cliente("Cliente Number", "One", "DNI", "11111111");
        $coleccionDeClientes[] = new Cliente("Cliente Number", "Two", "DNI", "22222222");
        $coleccionDeClientes[] = new Cliente("Cliente Number", "Three", "DNI", "33333333");
        $coleccionDeClientes[] = new Cliente("Cliente Number", "Four", "DNI", "44444444");
        
        $this->assertCount(4, $coleccionDeClientes);
    }
    
    public function testAgregadoDeTresDireccionesACliente() {
        $cliente = new Cliente("Marcelo", "Lopez", "DNI", 11123456);
        $cliente->agregarDireccion("Avenida Triunvirato", 3321);
        $cliente->agregarDireccion("Avenida Paseo Colon", 1333);
        $cliente->agregarDireccion("Avenida Huergo", 1189);
        
        $this->assertCount(3, $cliente->obtenerDirecciones());
    }
    

}

?>