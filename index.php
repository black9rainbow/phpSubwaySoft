<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Dos</title>
    </head>
    <body>
        
        
        <?php
        require 'controller/clsConexion.php';

        echo "hola puto<br>";

//        $stmt = sqlsrv_query($conn, $q1);
//        
//        if ($stmt == false) {
//            echo 'Error al traer información!<br>';
//            die(print_r(sqlsrv_errors(), TRUE));
//        }
//        $row = sqlsrv_fetch_array($stmt);
//        echo '<br>Unico row: <br>' . $row['usuario'] . '<br>';
//
//        while ($row = sqlsrv_fetch_object($stmt)) {
//
//            echo "<br><br>Usuario: $row->usuario 
//                    <br>Password:$row->password
//                    <br>idPersona: $row->idPersona
//                    <br>";
//        }?>
     
        <form action="view/vCatalogo.php" method="POST">
            Usuario:&nbsp; &nbsp;<input type="text" name="usuario"><br>
            Contraseña:&nbsp; &nbsp;<input type="password" name="password"><br>
            <input type="submit" name="boton" value="Go, Go, Go!">
        </form>
<?php
        $q1 = 'select * from tblUsuario';
        $clsConexion = new clsConexion();   
        
        $clsConexion->seleccionarDatos($q1);

        echo "<br><br>Lista de Usuarios:<br>
                <table border =1>";
        /*         * ******This is the new shit********** */
        while ($row = sqlsrv_fetch_object($clsConexion->stmt)) {
            echo "<tr>";
            echo "  <td>Usuario: </td><td>$row->usuario </td>
                    <td>Password:  </td><td>$row->password</td>
                    <td>idPersona:  </td><td>$row->idPersona</td>";
            echo "</tr>";
        }
        echo "</table>"
        /*         * ************************************** */
        ?>
    </body>
</html>
