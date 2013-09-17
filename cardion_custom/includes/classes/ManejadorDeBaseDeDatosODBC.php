<?php

class ManejadorDeBaseDeDatosODBC extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = odbc_connect($this->database, $this->user, $this->password, SQL_CUR_USE_ODBC);
    }

}