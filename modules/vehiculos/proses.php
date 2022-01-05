
<?php

function buscaRepetido($codigo,$mysqli) {

    require_once "../../config/database.php"; 

      $result = mysqli_query($mysqli,"SELECT codigo from vehiculos
      where codigo ='$codigo'");

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
            $placa  = mysqli_real_escape_string($mysqli, trim($_POST['placa']));
            $marca  = mysqli_real_escape_string($mysqli, trim($_POST['marca']));
            $tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
            $modelo  = mysqli_real_escape_string($mysqli, trim($_POST['modelo']));
            $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
            $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            $unidad  = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
            $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
            //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));
            $responsable  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
            $pertenece  = mysqli_real_escape_string($mysqli, trim($_POST['pertenece']));
			$cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
<<<<<<< HEAD
			$sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
=======
			$sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));	
>>>>>>> f60476eedd4bc240f27e9c195514c2c2b7480cca
			$nmroCarroceria  = mysqli_real_escape_string($mysqli, trim($_POST['nmroCarroceria']));
			$anio  = mysqli_real_escape_string($mysqli, trim($_POST['anio']));
			$tipoCombustible  = mysqli_real_escape_string($mysqli, trim($_POST['tipoCombustible']));
            $created_user = $_SESSION['id_user'];

            if (buscaRepetido($codigo,$mysqli) == 1) {
                header("location: ../../main.php?module=vehiculos&alert=5");

             } else {

                $query = mysqli_query($mysqli, "INSERT INTO vehiculos (pertenece , categoria, codigo, marca, tipo, modelo, placa, color, condicion, unidad, ubicacion, responsable, cedula, sede, nmroCarroceria, anio, tipoCombustible, created_user, updated_user) 
                VALUES('$pertenece' ,'Vehiculos','$codigo', '$marca', '$tipo', '$modelo', '$placa', '$color', '$condicion', '$unidad', '$ubicacion', '$responsable', '$cedula', '$sede', '$nmroCarroceria', '$anio','$tipoCombustible', '$created_user', '$updated_user')")
                                            or die('error '.mysqli_error($mysqli)); 
                
            
             

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
                header("location: ../../main.php?module=vehiculos&alert=1");  
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        
                $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            	$marca  = mysqli_real_escape_string($mysqli, trim($_POST['marca']));
            	$tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
            	$modelo  = mysqli_real_escape_string($mysqli, trim($_POST['modelo']));
            	$placa  = mysqli_real_escape_string($mysqli, trim($_POST['placa']));
            	$color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
            	$condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            	$unidad  = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
            	$ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
            	//$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
           	 	//$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));
            	$responsable  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
				$cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
				$sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
				$nmroCarroceria  = mysqli_real_escape_string($mysqli, trim($_POST['nmroCarroceria']));
				$anio  = mysqli_real_escape_string($mysqli, trim($_POST['anio']));
                $pertenece  = mysqli_real_escape_string($mysqli, trim($_POST['pertenece']));
				$tipoCombustible  = mysqli_real_escape_string($mysqli, trim($_POST['tipoCombustible']));

                $updated_user = $_SESSION['id_user'];

            

                $query = mysqli_query($mysqli, "UPDATE vehiculos SET marca             = '$marca',
                                                                    tipo             = '$tipo',
                                                                    modelo               = '$modelo',
                                                                    placa            = '$placa',
                                                                    color            = '$color',
                                                                    condicion             = '$condicion',
                                                                    pertenece             = '$pertenece',
                                                                    unidad          = '$unidad',
                                                                    ubicacion          = '$ubicacion',
                                                                    responsable          = '$responsable',
                                                                    cedula          = '$cedula',
                                                                    sede          = '$sede',
                                                                    nmroCarroceria          = '$nmroCarroceria',
                                                                    anio         = '$anio',
                                                                    tipo         = '$tipo',
                                                                    tipoCombustible          = '$tipoCombustible',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo       = '$codigo'")
                                                or die('error: '.mysqli_error($mysqli));

                 $accion = "Modificacion de equipo";

                 $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 

                header("location: ../../main.php?module=vehiculos&alert=2");
                }        
            }
        }
    }

    if ($_GET['act']=='delete') {

        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM vehiculos WHERE codigo='$codigo'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de equipo";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=vehiculos&alert=3");
            }
        }
    }  
    
    if ($_GET['act']=='on' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "nochequeado";

		
            $query = mysqli_query($mysqli, "UPDATE vehiculos SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=vehiculos");
            }
		}
	} 

	elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "chequeado";

		
            $query = mysqli_query($mysqli, "UPDATE vehiculos SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=vehiculos");
            }
		}
	}

if ($_GET['act']=='reset' && $_SESSION['permisos_acceso'] == "Super Admin") {
        
        //$codigo = $_GET['codigo'];
        $estado  = "nochequeado";

    
        $query = mysqli_query($mysqli, "UPDATE vehiculos SET estado = '$estado'
                                                        WHERE estado = 'chequeado'")
                                        or die('error: '.mysqli_error($mysqli));


        if ($query) {
           
            header("location: ../../main.php?module=vehiculos");
        }
    
}      
?>


