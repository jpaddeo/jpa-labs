<?php

class ManejadorDeBaseDeDatosMySql extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = @mysqli_connect($this->host, $this->user, $this->password, $this->database);
        @mysqli_set_charset($this->connection, "utf8");
    }

}
