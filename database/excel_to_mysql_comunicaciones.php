<?php
session_start();

<<<<<<< HEAD
$server   = "localhost";
$username = "root";
$password = "root";
$database = "inventario3";
=======
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "inventario3";
>>>>>>> a974967cb7b01cf1b75643aa0166509892c7f115

$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die('error' . $mysqli->connect_error);
}

<<<<<<< HEAD
$db_host = "localhost";
$db_name = "inventario3";
$db_user = "root";
$db_pass = "root";
=======
	$db_host="localhost";
	$db_name="inventario3";
	$db_user="root";
	$db_pass="";
>>>>>>> a974967cb7b01cf1b75643aa0166509892c7f115

$hari_ini = date("d-m-Y");
$NombreUser = $_SESSION['name_user'];
$iduser = $_SESSION['id_user'];
$accion = "Registro de Equipo";
$cedulauser = $_SESSION['cedula_user'];

include 'simplexlsx.class.php';

$archivo = $_FILES['archivoInput'];

//Verifica que el nombre del archivo no este vacio.
if (($archivo['name'] != "")) {

    //Ruta actual de este archivo.
    $carpeta = "./";

    //Obtenemos cada valor del archivo apra poder crear la ruta y el nombre con el cual se guardara.
    $ruta = pathinfo($archivo['name']);
    $nombreArc = $ruta['filename'];
    $ext = $ruta['extension'];
    if ($ext != 'xlsx')
        exit(1);
    $temp_name = $archivo['tmp_name'];

    //Se crea la ruta completa local, es decir ./nombre.xlsx
    $path_filename_ext = $carpeta . $nombreArc . "." . $ext;

    //Movemos el archivo de la ubicacion temporarl de php a la ruta que asignamos
    move_uploaded_file($temp_name, $path_filename_ext);

    //Creamos el nombre del archivo que le pasaremos a la clase. Ex: libros1.xlsx
    $parametro = $nombreArc . "." . $ext;
}
if ($parametro != null) {

    if ($xlsx = SimpleXLSX::parse($parametro)) {
        try {
            $conn = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo '<script language="javascript">alert("El documento importado puede contener errores");</script>';
            echo $sql . "<br>" . $e->getMessage();
        }
        try {
            $stmt = $conn->prepare("INSERT INTO inventario (codigo, descripcion, marca, modelo, color, serial, bienesN, condicion, unidad, ubicacion, responsable, cedula, sede, pertenece, cantidad, created_user, updated_user, created_date, updated_date, estado, categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $stmt->bindParam(1, $codigo);
            $stmt->bindParam(2, $descripcion);
            $stmt->bindParam(3, $marca);
            $stmt->bindParam(4, $modelo);
            $stmt->bindParam(5, $color);
            $stmt->bindParam(6, $serial);
            $stmt->bindParam(7, $bienesN);
            $stmt->bindParam(8, $condicion);
            $stmt->bindParam(9, $unidad);
            $stmt->bindParam(10, $cedula);
            $stmt->bindParam(11, $ubicacion);
            $stmt->bindParam(12, $responsable);
            $stmt->bindParam(13, $sede);
            $stmt->bindParam(14, $pertenece);
            $stmt->bindParam(15, $cantidad);
            $stmt->bindParam(16, $created_user);
            $stmt->bindParam(17, $updated_user);
            $stmt->bindParam(18, $created_date);
            $stmt->bindParam(19, $updated_date);
            $stmt->bindParam(20, $estado);
            $stmt->bindParam(21, $categoria);

            $accion = "Importacion de Equipos";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                or die('error ' . mysqli_error($mysqli));

            header('Location:/inventariov2/main.php?module=inventario&alert=4');


            foreach ($xlsx->rows() as $fields) {
                $codigo = $fields[0];
                $descripcion = $fields[1];
                $marca = $fields[2];
                $modelo = $fields[3];
                $color = $fields[4];
                $serial = $fields[5];
                $bienesN = $fields[6];
                $condicion = $fields[7];
                $unidad = $fields[8];
                $cedula = $fields[9];
                $ubicacion = $fields[10];
                $responsable = $fields[11];
                $sede = $fields[12];
                $pertenece = $fields[13];
                $cantidad = $fields[14];
                $created_user = $fields[15];
                $updated_user = $fields[16];
                $created_date = $fields[17];
                $updated_date = $fields[18];
                $estado = $fields[19];
                $categoria = $fields[20];
                $stmt->execute();
            }
        } catch (PDOException $e) {
            echo '<script language="javascript">alert("El documento importado puede contener errores");</script>';
            echo $sql . "<br>" . $e->getMessage();
        }
        unlink($path_filename_ext);
    } else {
        echo SimpleXLSX::parseError();
    }
} else {
    header('Location:/inventariov2/main.php?module=inventario&alert=8');
}

?>
