<?php

class ManejadorDeBaseDeDatosPostgreSQL extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = pg_connect("host={$this->host} port=5432 dbname={$this->database} user={$this->user} password={$this->password}");
        pg_set_client_encoding($this->connection, "UNICODE");
    }
    
    public function ejectuarConsulta($sql_query) {
        $query_result = pg_query($this->connection, $sql_query);
        return $query_result;
    }

}