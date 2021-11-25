
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
        $stmt = $conn->prepare( "INSERT INTO inmuebles (codigo, tipo, descripcion, metrosCuadrados, pisos, nmroCuartos, habitantes, direccion, condicion, responsable, cedula, sede, created_user, updated_user, created_date, update_date, estado, categoria) 
        VALUES (?, ?, ?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
        
            $stmt->bindParam( 1, $codigo);
            $stmt->bindParam( 2, $tipo);
            $stmt->bindParam( 3, $descripcion);
            $stmt->bindParam( 4, $metrosCuadrados);
            $stmt->bindParam( 5, $pisos);
            $stmt->bindParam( 6, $nmroCuartos);
            $stmt->bindParam( 7, $habitantes);
            $stmt->bindParam( 8, $direccion);
            $stmt->bindParam( 9, $condicion);
            $stmt->bindParam( 10, $responsable);
            $stmt->bindParam( 11, $cedula);
            $stmt->bindParam( 12, $sede);
            $stmt->bindParam( 13, $created_user);
            $stmt->bindParam( 14, $updated_user);
            $stmt->bindParam( 15, $created_date);
            $stmt->bindParam( 16, $update_date);
            $stmt->bindParam( 17, $estado);
            $stmt->bindParam( 18, $categoria);
            
            $accion = "Importacion Modulo Inmuebles";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
             header('Location:/inventariov2/main.php?module=inmuebles&alert=4');    
            

        foreach ($xlsx->rows() as $fields)
        {
            $codigo = $fields[0];
            $tipo = $fields[1];
            $descripcion = $fields[2];
            $metrosCuadrados = $fields[3];
            $pisos = $fields[4];
            $nmroCuartos = $fields[5];
            $habitantes = $fields[6];
            $direccion = $fields[7];
            $condicion = $fields[8];
            $responsable= $fields[9];
            $cedula = $fields[10];
            $sede = $fields[11];
            $created_user= $fields[12];
            $updated_user = $fields[13];
            $created_date = $fields[14];
            $update_date = $fields[15];
            $estado = $fields[16];
            $categoria = $fields[17];
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
