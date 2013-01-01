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
        $stmt = $conn->prepare( "INSERT INTO biblioteca (codigo , isbn, tipo, titulo, autor, editorial, cantidad, bienesN, responsable, cedula, sede, color, serial, envoltura, condicion, ubicacion, created_user, updated_user, created_date, updated_date, estado, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
            $stmt->bindParam( 1, $codigo);
            $stmt->bindParam( 2, $isbn);
            $stmt->bindParam( 3, $tipo);
            $stmt->bindParam( 4, $titulo);
            $stmt->bindParam( 5, $autor);
            $stmt->bindParam( 6, $editorial);
            $stmt->bindParam( 7, $cantidad);
            $stmt->bindParam( 8, $bienesN);
            $stmt->bindParam( 9, $responsable);
            $stmt->bindParam( 10, $cedula);
            $stmt->bindParam( 11, $sede);
            $stmt->bindParam( 12, $color);
            $stmt->bindParam( 13, $serial);
            $stmt->bindParam( 14, $envoltura);
            $stmt->bindParam( 15, $condicion);
            $stmt->bindParam( 16, $ubicacion);
            $stmt->bindParam( 17, $created_user);
            $stmt->bindParam( 18, $updated_user);
            $stmt->bindParam( 19, $created_date);
            $stmt->bindParam( 20, $updated_date);
            $stmt->bindParam( 21, $estado);
            $stmt->bindParam( 22, $categoria);
            
            $accion = "Incorporacion de equipos";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            
            header('Location:/inventario3Debug/main.php?module=biblioteca&alert=7');
               
            

        foreach ($xlsx->rows() as $fields)
        {
            $codigo = $fields[0];
            $isbn = $fields[1];
            $tipo = $fields[2];
            $titulo = $fields[3];
            $autor = $fields[4];
            $editorial = $fields[5];
            $cantidad = $fields[6];
            $bienesN = $fields[7];
            $responsable = $fields[8];
            $cedula = $fields[9];
            $sede = $fields[10];
            $color = $fields[11];
            $serial = $fields[12];
            $envoltura = $fields[13];
            $condicion = $fields[14];
            $ubicacion = $fields[15];
            $created_user = $fields[16];
            $updated_user = $fields[17];
            $created_date = $fields[18];
            $updated_date = $fields[19];
            $estado = $fields[20];
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
    header('Location:/inventario3Debug/main.php?module=biblioteca&alert=8');
 }

?>
