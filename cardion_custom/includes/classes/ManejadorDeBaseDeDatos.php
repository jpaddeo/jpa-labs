<?php

class ManejadorDeBaseDeDatos {

    private $host;
    private $user;
    private $password;
    private $database;
    private $encoding;
    private $connection;

    protected function setearDatosDeConexion($hostCon, $usuarioCon, $passwordCon, $baseDeDatosCon, $encodingCon) {
        $this->host = $hostCon;
        $this->user = $usuarioCon;
        $this->password = $passwordCon;
        $this->database = $baseDeDatosCon;
        $this->encoding = strtolower($encodingCon);
        $this->connection = null;
    }

    protected function abrirConexion($hostCon = null, $usuarioCon = null, $passwordCon = null, $baseDeDatosCon = null, $encodingCon = null) {
        if (!empty($this->connection)) {
            return $this->connection;
        }
        
        $this->setearDatosDeConexion($hostCon, $usuarioCon, $passwordCon, $baseDeDatosCon, $encodingCon, $driverCon);
        $this->conectarAlMotor();
        
        return $this->connection;
    }

    protected function conectarAlMotor() {
        throwException(new Exception());
    }
            case "postgresql":
                $this->connection = pg_connect("host={$this->host} port=5432 dbname={$this->database} user={$this->user} password={$this->password}");
                pg_set_client_encoding($this->connection, "UNICODE");
                break;
            default:
                break;
        }
    }

    public static function obtenerResultadosConsulta($sql_query) {
        
    }

    protected function escaparConsulta($sql_query) {
        $query_escapeada = "";
        
        return $query_escapeada;
    }
    protected function ejectuarConsulta($sql_query) {
        switch ($this->driver) {
            case "mysql":
                $query_result = @mysqli_real_query($this->connection, $sql_query);
                
                break;
            case "odbc":
                $query_result = @odbc_exec($this->connection, $sql_query);
                break;
            case "mssql":
                $query_result = @mssql_query($sql_query, $this->connection);
                break;
            case "postgresql":
                $query_result = pg_query($this->connection, $sql_query);
                break;
            default:
                break;
        }
    }

}
