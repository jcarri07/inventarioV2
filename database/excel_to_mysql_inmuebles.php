
<?php
    session_start();

    $server   = "localhost";
    $username = "root";
    $password = "root";
    $database = "inventario3";

    $mysqli = new mysqli($server, $username, $password, $database);

    if ($mysqli->connect_error) {
        die('error'.$mysqli->connect_error);
    }

	$db_host="localhost";
	$db_name="inventario3";
	$db_user="root";
	$db_pass="root";

    $hari_ini = date("d-m-Y");
    $NombreUser = $_SESSION['name_user'];
    $iduser = $_SESSION['id_user'];
    $accion = "Registro de Inmueble";
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
        $stmt = $conn->prepare( "INSERT INTO inmuebles (codigo, descripcion, metrosCuadrados, pisos, nmrocuartos, habitantes, bienesN, condicion, unidad, direccion, responsable, cedula, sede, pertenece, created_user, updated_user, created_date, update_date, estado, categoria) 
        VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?, ?)");
        
        $stmt->bindParam(1, $codigo);
        $stmt->bindParam(2, $descripcion);
        $stmt->bindParam(3, $metrosCuadrados);
        $stmt->bindParam(4, $pisos);
        $stmt->bindParam(5, $nmroCuartos);
        $stmt->bindParam(6, $habitantes);
        $stmt->bindParam(7, $bienesN);
        $stmt->bindParam(8, $condicion);
        $stmt->bindParam(9, $unidad);
        $stmt->bindParam(10, $direccion);
        $stmt->bindParam(11, $responsable);
        $stmt->bindParam(12, $cedula);
        $stmt->bindParam(13, $sede);
        $stmt->bindParam(14, $pertenece);
        $stmt->bindParam(15, $created_user);
        $stmt->bindParam(16, $updated_user);
        $stmt->bindParam(17, $created_date);
        $stmt->bindParam(18, $update_date);
        $stmt->bindParam(19, $estado);
        $stmt->bindParam(20, $categoria);

        
            
            $accion = "Importacion de Inmuebles";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
            header('Location:/inventariov2/main.php?module=inmuebles&alert=4'); 
            

        foreach ($xlsx->rows() as $fields)
        {
            $codigo = $fields[0];
            $descripcion = $fields[1];
            $metrosCuadrados = $fields[2];
            $pisos = $fields[3];
            $nmroCuartos = $fields[4];
            $habitantes = $fields[5];
            $bienesN = $fields[6];
            $condicion = $fields[7];
            $unidad = $fields[8];
            $direccion = $fields[9];
            $responsable = $fields[10];
            $cedula = $fields[11];
            $sede = $fields[12];
            $pertenece = $fields[13];
            $created_user = $fields[14];
            $updated_user = $fields[15];
            $created_date = $fields[16];
            $update_date = $fields[17];
            $estado = $fields[18];
            $categoria = $fields[19];
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
    header('Location:/inventariov2/main.php?module=inmuebles&alert=8');
 }

?>
