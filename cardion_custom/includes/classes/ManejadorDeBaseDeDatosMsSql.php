<?php

class ManejadorDeBaseDeDatosMsSql extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = @mssql_connect($this->host, $this->user, $this->password, TRUE);
        @mssql_query("USE " . $this->database, $this->connection);
    }
    
    public function ejectuarConsulta($sql_query) {
        $query_result = @mssql_query($sql_query, $this->connection);
        return $query_result;
    }

}