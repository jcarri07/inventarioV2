
<?php

function buscaRepetido($serial,$mysqli) {

    require_once "../../config/database.php"; 

      $result = mysqli_query($mysqli,"SELECT serial from inventario
      where serial='$serial'");

      if(mysqli_num_rows($result) > 0){
        return 1;
      } else {
        return 0;
    }
}

session_start();
require_once "../../config/database.php";

define('MYSQL_ERROR_DUPLICATE_KEY', '1062');

$query = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE username='$username' AND password='$password' AND status='activo'")
                                    or die('error'.mysqli_error($mysqli));
$rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data  = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['id_user']   = $data['id_user'];
        $_SESSION['username']  = $data['username'];
        $_SESSION['cedula_user']  = $data['cedula_user'];
        $_SESSION['password']  = $data['password'];
        $_SESSION['name_user'] = $data['name_user'];
        $_SESSION['permisos_acceso'] = $data['permisos_acceso'];
    
    }

$hari_ini = date("d-m-Y");
$NombreUser = $_SESSION['name_user'];
$iduser = $_SESSION['id_user'];
$accion = "Registro de equipo";
$cedulauser = $_SESSION['cedula_user'];

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
     echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $serial  = mysqli_real_escape_string($mysqli, trim($_POST['serial']));
            $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
            $marca  = mysqli_real_escape_string($mysqli, trim($_POST['marca']));
            $modelo  = mysqli_real_escape_string($mysqli, trim($_POST['modelo']));
            $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
            $pertenece  = mysqli_real_escape_string($mysqli, trim($_POST['pertenece']));
            $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
            $bienesN = mysqli_real_escape_string($mysqli, trim($_POST['bienesN']));
           // $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
            $descripcion  = mysqli_real_escape_string($mysqli, trim($_POST['descripcion']));
            $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
            //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));
            $unidad     = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));

            $created_user = $_SESSION['id_user'];

            if (buscaRepetido($serial,$mysqli) == 1) {
                 header("location: ../../main.php?module=equipos_seguridad&alert=5");

             } else {

                $query = mysqli_query($mysqli, "INSERT INTO inventario(categoria,codigo,serial,responsable,marca,modelo,sede,pertenece,cedula,bienesN,color,descripcion,estado,condicion,ubicacion,unidad,created_user,updated_user) 
                                            VALUES('Seguridad','$codigo','$serial','$nombre','$marca','$modelo','$sede','$pertenece','$cedula','$bienesN','$color','$descripcion','$estado','$condicion','$ubicacion','$unidad','$created_user','$created_date')")
                                            or die('error '.mysqli_error($mysqli)); 
                
            
             

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
                header("location: ../../main.php?module=equipos_seguridad&alert=1");  
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        
                $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
                $serial  = mysqli_real_escape_string($mysqli, trim($_POST['serial']));
                $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
                $marca  = mysqli_real_escape_string($mysqli, trim($_POST['marca']));
                $modelo  = mysqli_real_escape_string($mysqli, trim($_POST['modelo']));
                $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
                $pertenece  = mysqli_real_escape_string($mysqli, trim($_POST['pertenece']));
                $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
              //  $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
                $bienesN = mysqli_real_escape_string($mysqli, trim($_POST['bienesN']));
                $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
                $descripcion  = mysqli_real_escape_string($mysqli, trim($_POST['descripcion']));
                $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
                $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
               // $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
                //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));
                $unidad     = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));

                $updated_user = $_SESSION['id_user'];

            

                $query = mysqli_query($mysqli, "UPDATE inventario SET 
                                                                    responsable       = '$nombre',
                                                                    marca             = '$marca',
                                                                    serial             = '$serial',
                                                                    modelo             = '$modelo',
                                                                    sede               = '$sede',
                                                                    pertenece            = '$pertenece',
                                                                    cedula            = '$cedula',
                                                                    bienesN             = '$bienesN',
                                                                    color             = '$color',
                                                                    descripcion             = '$descripcion',
                                                                    condicion             = '$condicion',
                                                                    ubicacion             = '$ubicacion',
                                                                    unidad          = '$unidad',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo       = '$codigo'")
                                                or die('error: '.mysqli_error($mysqli));

                 $accion = "Modificacion de equipo";

                 $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 

                header("location: ../../main.php?module=equipos_seguridad&alert=2");
                }        
            }
        }
    }

    if ($_GET['act']=='delete') {

        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM inventario WHERE codigo='$codigo'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de equipo";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=equipos_seguridad&alert=3");
            }
        }
    }  
    
    if ($_GET['act']=='on' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "nochequeado";

		
            $query = mysqli_query($mysqli, "UPDATE inventario SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=equipos_seguridad");
            }
		}
	} 

	elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "chequeado";

		
            $query = mysqli_query($mysqli, "UPDATE inventario SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=equipos_seguridad");
            }
		}
	}

if ($_GET['act']=='reset' && $_SESSION['permisos_acceso'] == "Super Admin") {
        
        //$codigo = $_GET['codigo'];
        $estado  = "nochequeado";

    
        $query = mysqli_query($mysqli, "UPDATE inventario SET estado = '$estado'
                                                        WHERE estado = 'chequeado'")
                                        or die('error: '.mysqli_error($mysqli));


        if ($query) {
           
            header("location: ../../main.php?module=equipos_seguridad");
        }
    
}      
?>


