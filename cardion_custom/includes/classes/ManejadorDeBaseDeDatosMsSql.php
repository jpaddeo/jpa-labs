<?php

class ManejadorDeBaseDeDatosMsSql extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = @mssql_connect($this->host, $this->user, $this->password, TRUE);
        @mssql_query("USE " . $this->database, $this->connection);
    }

}