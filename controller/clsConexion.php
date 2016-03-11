<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clsConexion
 *
 * @author Your Highness
 */
class clsConexion {

    private $serverName; // = 'YOURHIGHNESS'; //serverName\instanceName
    private $connectionInfo; // = array('Database' => 'SUBWAYSOFT', "UID" => "sa", "PWD" => "1234");
    private $conn;
    public $stmt;
    private $sqlquery;
    private $mensaje;

    function __construct() {

//        $serverName = null;
//        $connectionInfo = null;
        $this->conn = null;
        $this->stmt = null;
//        $sqlquery = null;
//        $mensaje;
        echo"constructor<br>";
    }

    private function conectar() {
        $serverName = 'YOURHIGHNESS'; //serverName\instanceName
        $connectionInfo = array('Database' => 'SUBWAYSOFT', "UID" => "sa", "PWD" => "1234");
        $this->conn = sqlsrv_connect($serverName, $connectionInfo);
        if ($this->conn) {
            echo "Conexión establecida metodo conectar<br />";
        } else {
            echo "Conexión SQL Server no se pudo establecer.<br />";
            die(print_r(sqlsrv_errors(), TRUE));
        }
    }

    public  function seleccionarDatos($sqlquery) {

        /*         * ************* */
//         $serverName = 'YOURHIGHNESS'; //serverName\instanceName
//        $connectionInfo = array('Database' => 'SUBWAYSOFT', "UID" => "sa", "PWD" => "1234");
//        $conn = sqlsrv_connect($serverName, $connectionInfo);
        /*         * *************** */

        // $this->sqlquery = $sqlquery;
        $this->conectar();
        $this->stmt = sqlsrv_query($this->conn, $sqlquery);
        //$stmt2 = $this->stmt;
        if ($this->stmt == false) {
            echo 'Error al traer información!<br>';
            die(print_r(sqlsrv_errors(), TRUE));
        }
//        $row = sqlsrv_fetch_array($stmt2);
//        echo '<br>Unico row: <br>' . $row['usuario'] . '<br>';

        
        /********The good shit********/
        
//        while ($row = sqlsrv_fetch_object($this->stmt)) {
//
//            echo "<br><br>Usuario: $row->usuario 
//                    <br>Password:$row->password
//                    <br>idPersona: $row->idPersona
//                    <br>";
//        }
        
        /***************/
    }
    public function actualizarDatos($sqlquery) {

        /*         * ************* */
//         $serverName = 'YOURHIGHNESS'; //serverName\instanceName
//        $connectionInfo = array('Database' => 'SUBWAYSOFT', "UID" => "sa", "PWD" => "1234");
//        $conn = sqlsrv_connect($serverName, $connectionInfo);
        /*         * *************** */

        // $this->sqlquery = $sqlquery;
        $this->stmt = sqlsrv_query($this->conn, $sqlquery);
        //$stmt2 = $this->stmt;
        if ($this->stmt == false) {
            echo 'Error al traer información!<br>';
            die(print_r(sqlsrv_errors(), TRUE));
        }
//        $row = sqlsrv_fetch_array($stmt2);
//        echo '<br>Unico row: <br>' . $row['usuario'] . '<br>';

        
        /********The good shit********/
        
//        while ($row = sqlsrv_fetch_object($this->stmt)) {
//
//            echo "<br><br>Usuario: $row->usuario 
//                    <br>Password:$row->password
//                    <br>idPersona: $row->idPersona
//                    <br>";
//        }
        
        /***************/
    }

//if ($conn) {
//echo "Conexión establecida.<br />";
//} else {
//echo "Conexión no se pudo establecer.<br />";
//die(print_r(sqlsrv_errors(), TRUE));
//}
}
