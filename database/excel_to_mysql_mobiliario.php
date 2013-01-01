
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

    $archivo = $_FILES['archivoInput'];

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
        $stmt = $conn->prepare( "INSERT INTO inventario (descripcion, codigo ,serial, marca, modelo, color, bienesN, condicion, ubicacion, cedula, sede, pertenece, nombre, precio_compra, precio_venta, unidad, stock, created_user, created_date, updated_user, updated_date, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
            $stmt->bindParam( 1, $descripcion);
            $stmt->bindParam( 2, $codigo);
            $stmt->bindParam( 3, $serial);
            $stmt->bindParam( 4, $marca);
            $stmt->bindParam( 5, $modelo);
            $stmt->bindParam( 6, $color);
            $stmt->bindParam( 7, $nb);
            $stmt->bindParam( 8, $condicion);
            $stmt->bindParam( 9, $ubicacion);
            $stmt->bindParam( 10, $cedula);
            $stmt->bindParam( 11, $sede);
            $stmt->bindParam( 12, $pertenece);
            $stmt->bindParam( 13, $nombre);
            $stmt->bindParam( 14, $precio_compra);
            $stmt->bindParam( 15, $precio_venta);
            $stmt->bindParam( 16, $unidad);
            $stmt->bindParam( 17, $stock);
            $stmt->bindParam( 18, $created_user);
            $stmt->bindParam( 19, $created_date);
            $stmt->bindParam( 20, $updated_user);
            $stmt->bindParam( 21, $updated_date);
            $stmt->bindParam( 22, $categoria);
            
            $accion = "Incorporacion de equipos";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
             header('Location:/inventario3Debug/main.php?module=mobiliario_equipoOficina&alert=4');    
            

        foreach ($xlsx->rows() as $fields)
        {
            $descripcion = $fields[0];
            $codigo = $fields[1];
            $serial = $fields[2];
            $marca = $fields[3];
            $modelo = $fields[4];
            $color = $fields[5];
            $nb = $fields[6];
            $condicion = $fields[7];
            $ubicacion = $fields[8];
            $nombre = $fields[9];
            $cedula = $fields[10];
            $sede = $fields[11];
            $pertenece = $fields[12];
            $precio_compra = $fields[13];
            $precio_venta = $fields[14];
            $unidad = $fields[15];
            $stock = $fields[16];
            $created_user = $fields[17];
            $created_date = $fields[18];
            $updated_user = $fields[19];
            $updated_date = $fields[20];
            $categoria = $fields[21];
            $stmt->execute();
           
        }
       
    }
    catch(PDOException $e)
    {
        //echo '<script language="javascript">alert("El documento importado puede contener errores");</script>';
        echo $sql . "<br>" . $e->getMessage();
    }
    unlink($path_filename_ext);
    } else {
        echo SimpleXLSX::parseError();
    }
} else {
    header('Location:/inventario3Debug/main.php?module=mobiliario_equipoOficina&alert=8');
}    
   

?>
