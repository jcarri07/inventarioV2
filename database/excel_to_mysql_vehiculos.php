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
        $stmt = $conn->prepare( "INSERT INTO vehiculos (codigo , placa, marca, tipo, modelo, color, cilindros, transmision, nMotor, condicion, unidad, ubicacion, responsable, pertenece, cedula, sede, bienesN, resguardo, nmroCarroceria, anio, uso, servicio, tipoCombustible, capacidadTanque, created_user, created_date, updated_date, estado, updated_user, categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
            $stmt->bindParam( 1, $codigo);
            $stmt->bindParam( 2, $placa);
            $stmt->bindParam( 3, $marca);
            $stmt->bindParam( 4, $tipo);
            $stmt->bindParam( 5, $modelo);
            $stmt->bindParam( 6, $color);
            $stmt->bindParam( 7, $cilindros);
            $stmt->bindParam( 8, $transmision);
            $stmt->bindParam( 9, $nMotor);
            $stmt->bindParam( 10, $condicion);
            $stmt->bindParam( 11, $unidad);
            $stmt->bindParam( 12, $ubicacion);
            $stmt->bindParam( 13, $responsable);
            $stmt->bindParam( 14, $cedula);
            $stmt->bindParam( 15, $pertenece);
            $stmt->bindParam( 16, $sede);
            $stmt->bindParam( 17, $bienesN);
            $stmt->bindParam( 18, $resguardo);
            $stmt->bindParam( 19, $nmroCarroceria);
            $stmt->bindParam( 20, $anio);
            $stmt->bindParam( 21, $uso);
            $stmt->bindParam( 22, $servicio);
            $stmt->bindParam( 23, $tipoCombustible);
            $stmt->bindParam( 24, $capacidadTanque);
            $stmt->bindParam( 25, $created_user);
            $stmt->bindParam( 26, $created_date);
            $stmt->bindParam( 27, $updated_date);
            $stmt->bindParam( 28, $estado);
            $stmt->bindParam( 29, $updated_user);
            $stmt->bindParam( 30, $categoria);
            
            $accion = "Incorporacion de equipos";

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
            $cilindros = $fields[6];
            $transmision = $fields[7];
            $nMotor = $fields[8];
            $condicion = $fields[9];
            $unidad = $fields[10];
            $ubicacion = $fields[11];
            $responsable = $fields[12];
            $cedula = $fields[13];
            $pertenece = $fields[14];
            $sede = $fields[15];
            $bienesN = $fields[16];
            $resguardo = $fields[17];
            $nmroCarroceria = $fields[18];
            $anio = $fields[19];
            $uso = $fields[20];
            $servicio = $fields[21];
            $tipoCombustible = $fields[22];
            $capacidadTanque = $fields[23];
            $created_user = $fields[24];
            $created_date = $fields[25];
            $updated_date = $fields[26];
            $estado = $fields[27];
            $updated_user = $fields[28];
            $categoria = $fields[29];
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
