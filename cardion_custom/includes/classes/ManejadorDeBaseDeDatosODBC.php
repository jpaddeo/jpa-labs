<?php

class ManejadorDeBaseDeDatosODBC extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = odbc_connect($this->database, $this->user, $this->password, SQL_CUR_USE_ODBC);
    }
    
    public function ejectuarConsulta($sql_query) {
        $query_result = @odbc_exec($this->connection, $sql_query);
        return $query_result;
    }

}