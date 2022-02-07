
<?php
    session_start();

	$server   = "localhost";
    $username = "root";
    $password = "";
    $database = "inventario3";

    $mysqli = new mysqli($server, $username, $password, $database);

    if ($mysqli->connect_error) {
        die('error'.$mysqli->connect_error);
    }

    $db_host="localhost";
    $db_name="inventario3";
    $db_user="root";
    $db_pass="";

    $hari_ini = date("d-m-Y");
    $NombreUser = $_SESSION['name_user'];
    $iduser = $_SESSION['id_user'];
    $accion = "Registro de equipo";
    $cedulauser = $_SESSION['cedula_user'];
    
    include 'simplexlsx.class.php';

     $archivo = $_FILES['archivo'];

    //Verifica que el nombre del archivo no este vacio.
    if (($archivo['name']!="")){

        //Ruta actual de este archivo.
        $carpeta = "./";

        //Obtenemos cada valor del archivo apra poder crear la ruta y el nombre con el cual se guardara.
        $ruta = pathinfo($archivo['name']);
        $nombreArc = $ruta['filename'];
        $ext = $ruta['extension'];
        if($ext != 'xlsx')
            exit(1);
        $temp_name = $archivo['tmp_name'];

        //Se crea la ruta completa local, es decir ./nombre.xlsx
        $path_filename_ext = $carpeta.$nombreArc.".".$ext;
        
        //Movemos el archivo de la ubicacion temporarl de php a la ruta que asignamos
        move_uploaded_file($temp_name,$path_filename_ext);

        //Creamos el nombre del archivo que le pasaremos a la clase. Ex: libros1.xlsx
        $parametro = $nombreArc.".".$ext;
    }

if ($parametro != null) {
    if ( $xlsx = SimpleXLSX::parse($parametro)) {
        try {
            $conn = new PDO( "mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch(PDOException $e)
    {
        echo '<script language="javascript">alert("El documento importado puede contener errores");</script>';
        echo $sql . "<br>" . $e->getMessage();
    }
    try {
        $stmt = $conn->prepare( "INSERT INTO transaccion_equipos_biblioteca (codigo_transaccion, codigo, motivo, recibe, cedula_r, empresa_r, entrega, cedula_e, empresa, lugar_e, lugar_r, created_user, created_date, tipo_transaccion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bindParam( 1, $codigo_transaccion);
            $stmt->bindParam( 2, $codigo);
            $stmt->bindParam( 3, $motivo);
            $stmt->bindParam( 4, $recibe);
            $stmt->bindParam( 5, $cedula_r);
            $stmt->bindParam( 6, $empresa_r);
            $stmt->bindParam( 7, $lugar_r);
            $stmt->bindParam( 8, $entrega);
            $stmt->bindParam( 9, $cedula_e);
            $stmt->bindParam( 10, $empresa);
            $stmt->bindParam( 11, $lugar_e);
            $stmt->bindParam( 12, $created_user);
            $stmt->bindParam( 13, $created_date);
            $stmt->bindParam( 14, $tipo_transaccion);

            $accion = "Importacion de Transaccion de Biblioteca";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));

            header('Location:/inventariov2/main.php?module=transaccion_equipos_biblioteca&alert=3');
           
        foreach ($xlsx->rows() as $fields)
        {
            $codigo_transaccion = $fields[0];
            $codigo = $fields[1];
            $motivo = $fields[2];
            $recibe = $fields[3];
            $cedula_r = $fields[4];
            $empresa_r = $fields[5];
            $lugar_r = $fields[6];
            $entrega = $fields[7];
            $cedula_e = $fields[8];
            $empresa = $fields[9];
            $lugar_e = $fields[10];
            $created_user = $fields[11];
            $created_date = $fields[12];
            $tipo_transaccion = $fields[13];
            $stmt->execute();
        }
    }
    catch(PDOException $e)
    {
        echo '<script language="javascript">alert("El documento importado puede contener errores");</script>';
        //echo $sql . "<br>" . $e->getMessage();
    }
    unlink($path_filename_ext);
    } else {
        echo SimpleXLSX::parseError();
    }
} else {
    header('Location:/inventariov2/main.php?module=transaccion_equipos_biblioteca&alert=2');
}
?>
