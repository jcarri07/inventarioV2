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
        $stmt = $conn->prepare( "INSERT INTO vehiculos (codigo , placa, marca, tipo, modelo, color, condicion, unidad, ubicacion, responsable, pertenece, cedula, sede,  nmroCarroceria, anio, uso, tipoCombustible, created_user, created_date, updated_date, estado, updated_user, categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
            $stmt->bindParam( 1, $codigo);
            $stmt->bindParam( 2, $placa);
            $stmt->bindParam( 3, $marca);
            $stmt->bindParam( 4, $tipo);
            $stmt->bindParam( 5, $modelo);
            $stmt->bindParam( 6, $color);
            $stmt->bindParam( 7, $condicion);
            $stmt->bindParam( 8, $unidad);
            $stmt->bindParam( 9, $ubicacion);
            $stmt->bindParam( 10, $responsable);
            $stmt->bindParam( 11, $cedula);
            $stmt->bindParam( 12, $pertenece);
            $stmt->bindParam( 13, $sede);
            $stmt->bindParam( 14, $nmroCarroceria);
            $stmt->bindParam( 15, $anio);
            $stmt->bindParam( 16, $uso);
            $stmt->bindParam( 17, $tipoCombustible);
            $stmt->bindParam( 18, $created_user);
            $stmt->bindParam( 19, $created_date);
            $stmt->bindParam( 20, $updated_date);
            $stmt->bindParam( 21, $estado);
            $stmt->bindParam( 22, $updated_user);
            $stmt->bindParam( 23, $categoria);
            
            $accion = "Importacion Modulo Vehiculos";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
            header('Location:/inventariov2/main.php?module=vehiculos&alert=4');
               
            

        foreach ($xlsx->rows() as $fields)
        {
            $codigo = $fields[0];
            $placa = $fields[1];
            $marca = $fields[2];
            $tipo = $fields[3];
            $modelo = $fields[4];
            $color = $fields[5];
            $condicion = $fields[6];
            $unidad = $fields[7];
            $ubicacion = $fields[8];
            $responsable = $fields[9];
            $cedula = $fields[10];
            $pertenece = $fields[11];
            $sede = $fields[12];
            $nmroCarroceria = $fields[13];
            $anio = $fields[14];
            $uso = $fields[15];
            $tipoCombustible = $fields[16];
            $created_user = $fields[17];
            $created_date = $fields[18];
            $updated_date = $fields[19];
            $estado = $fields[20];
            $updated_user = $fields[21];
            $categoria = $fields[22];
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
    header('Location:/inventariov2/main.php?module=vehiculos&alert=8');
 }

?>
