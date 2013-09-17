<?php

class ManejadorDeBaseDeDatosMySql extends ManejadorDeBaseDeDatos {

    protected function conectarAlMotor() {
        $this->connection = @mysqli_connect($this->host, $this->user, $this->password, $this->database);
        @mysqli_set_charset($this->connection, "utf8");
    }
    
    public function ejectuarConsulta($sql_query) {
        $query_result = @mysqli_real_query($this->connection, $sql_query);
        
        return $query_result;
    }

}
