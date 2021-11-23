
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
        $stmt = $conn->prepare( "INSERT INTO inmuebles (descripcion, codigo, metrosCuadrados, ubicacion, direccion, tipo, nmroCuartos, 
        pisos, condicion, estado, numero, habitantes, categoria, responsable, cedula, sede, cantidad, created_user, created_date, updated_user, update_date) 
        VALUES (?, ?, ?, ?, ?, ?, ? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
        
            $stmt->bindParam( 1, $descripcion);
            $stmt->bindParam( 2, $codigo);
            $stmt->bindParam( 3, $metrosCuadrados);
            $stmt->bindParam( 4, $ubicacion);
            $stmt->bindParam( 5, $direccion);
            $stmt->bindParam( 6, $tipo);
            $stmt->bindParam( 7, $nmroCuartos);
            $stmt->bindParam( 8, $pisos);
            $stmt->bindParam( 9, $condicion);
            $stmt->bindParam( 10, $estado);
            $stmt->bindParam( 11, $numero);
            $stmt->bindParam( 12, $habitantes);
            $stmt->bindParam( 13, $categoria);
            $stmt->bindParam( 14, $responsable);
            $stmt->bindParam( 15, $cedula);
            $stmt->bindParam( 16, $sede);
            $stmt->bindParam( 17, $cantidad);
            $stmt->bindParam( 18, $created_user);
            $stmt->bindParam( 19, $created_date);
            $stmt->bindParam( 20, $updated_user);
            $stmt->bindParam( 21, $update_date);
            
            $accion = "Importacion Modulo Inmuebles";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
             header('Location:/inventariov2/main.php?module=inmuebles&alert=4');    
            

        foreach ($xlsx->rows() as $fields)
        {
            $descripcion = $fields[0];
            $codigo = $fields[1];
            $metrosCuadrados = $fields[2];
            $ubicacion = $fields[3];
            $direccion = $fields[4];
            $tipo = $fields[5];
            $nmroCuartos = $fields[6];
            $pisos = $fields[7];
            $condicion = $fields[8];
            $estado = $fields[9];
            $numero = $fields[10];
            $habitantes= $fields[11];
            $categoria = $fields[12];
            $responsable = $fields[13];
            $cedula= $fields[14];
            $sede = $fields[15];
            $cantidad= $fields[16];
            $created_user = $fields[17];
            $created_date = $fields[18];
            $updated_user = $fields[19];
            $update_date = $fields[20];
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
