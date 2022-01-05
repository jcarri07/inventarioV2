
<?php

function buscaRepetido($codigo,$mysqli) {

    require_once "../../config/database.php"; 

      $result = mysqli_query($mysqli,"SELECT codigo from componentes
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
$accion = "Registro de componentes internos";
$cedulauser = $_SESSION['cedula_user'];

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
     echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
     
            /*$codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $serial  = mysqli_real_escape_string($mysqli, trim($_POST['serial']));
            $nombre  = mysqli_real_escape_string($mysqli, trim($_POST['nombre']));
            $marca  = mysqli_real_escape_string($mysqli, trim($_POST['marca']));
            $modelo  = mysqli_real_escape_string($mysqli, trim($_POST['modelo']));
            $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
            $pertenece  = mysqli_real_escape_string($mysqli, trim($_POST['pertenece']));
            $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
            $unidad     = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
            $bienesN  = mysqli_real_escape_string($mysqli, trim($_POST['bienesN']));
            //  $categoria = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
            $descripcion  = mysqli_real_escape_string($mysqli, trim($_POST['descripcion']));
            $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
            //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));*/

            $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $clased1  = mysqli_real_escape_string($mysqli, trim($_POST['clased1']));
            $capd1  = mysqli_real_escape_string($mysqli, trim($_POST['capd1']));
            $marcad1 = mysqli_real_escape_string($mysqli, trim($_POST['marcad1']));
            $modd1  = mysqli_real_escape_string($mysqli, trim($_POST['modd1']));
            $seriald1 = mysqli_real_escape_string($mysqli, trim($_POST['seriald1']));
            $cond1  = mysqli_real_escape_string($mysqli, trim($_POST['cond1']));
            $clased2  = mysqli_real_escape_string($mysqli, trim($_POST['clased2']));
            $capd2  = mysqli_real_escape_string($mysqli, trim($_POST['capd2']));
            $marcad2 = mysqli_real_escape_string($mysqli, trim($_POST['marcad2']));
           // $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $modd2 = mysqli_real_escape_string($mysqli, trim($_POST['modd2']));
            $seriald2  = mysqli_real_escape_string($mysqli, trim($_POST['seriald2']));
            $cond2  = mysqli_real_escape_string($mysqli, trim($_POST['cond2']));
            $volfp  = mysqli_real_escape_string($mysqli, trim($_POST['volfp']));
            $certfp = mysqli_real_escape_string($mysqli, trim($_POST['certfp']));
            $marcafp  = mysqli_real_escape_string($mysqli, trim($_POST['marcafp']));
            $modfp  = mysqli_real_escape_string($mysqli, trim($_POST['modfp']));
            $serialfp  = mysqli_real_escape_string($mysqli, trim($_POST['serialfp']));
            $condfp = mysqli_real_escape_string($mysqli, trim($_POST['condfp']));
            $captv  = mysqli_real_escape_string($mysqli, trim($_POST['captv']));
            $clasetv  = mysqli_real_escape_string($mysqli, trim($_POST['clasetv']));
            $marcatv  = mysqli_real_escape_string($mysqli, trim($_POST['marcatv']));
            $modtv     = mysqli_real_escape_string($mysqli, trim($_POST['modtv']));
            $serialtv = mysqli_real_escape_string($mysqli, trim($_POST['serialtv']));
           // $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $contv  = mysqli_real_escape_string($mysqli, trim($_POST['contv']));
            $capmr1  = mysqli_real_escape_string($mysqli, trim($_POST['capmr1']));
            $clasemr1  = mysqli_real_escape_string($mysqli, trim($_POST['clasemr1']));
            $marcamr1  = mysqli_real_escape_string($mysqli, trim($_POST['marcamr1']));
            $modmr1     = mysqli_real_escape_string($mysqli, trim($_POST['modmr1']));
            $serialmr1  = mysqli_real_escape_string($mysqli, trim($_POST['serialmr1']));
            $conmr1 = mysqli_real_escape_string($mysqli, trim($_POST['conmr1']));
            $capmr2  = mysqli_real_escape_string($mysqli, trim($_POST['capmr2']));
            $clasemr2  = mysqli_real_escape_string($mysqli, trim($_POST['clasemr2']));
            $marcamr2  = mysqli_real_escape_string($mysqli, trim($_POST['marcamr2']));
            $modmr2     = mysqli_real_escape_string($mysqli, trim($_POST['modmr2']));
            $serialmr2  = mysqli_real_escape_string($mysqli, trim($_POST['serialmr2']));
            $conmr2 = mysqli_real_escape_string($mysqli, trim($_POST['conmr2']));

        
           

            $created_user = $_SESSION['id_user'];

            if (buscaRepetido($codigo,$mysqli) == 1) {
                 header("location: ../../main.php?module=inventario&alert=5");

             } else {

               /* $query = mysqli_query($mysqli, "INSERT INTO inventario(categoria,codigo,serial,nombre,marca,modelo,sede,pertenece,cedula,bienesN,color,descripcion,estado,condicion,ubicacion,unidad,created_user,updated_user) 
                                            VALUES('Comunicacion','$codigo','$serial','$nombre','$marca','$modelo','$sede','$pertenece','$cedula','$bienesN','$color','$descripcion','$estado','$condicion','$ubicacion','$unidad','$created_user','$created_date')")
                                            or die('error '.mysqli_error($mysqli)); */

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,clase,capacidad,marca,modelo,serial,condicion) 
                 VALUES('$codigo','disco1','$clased1','$capd1','$marcad1','$modd1','$seriald1','$cond1')")
                 or die('error '.mysqli_error($mysqli)); 

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,clase,capacidad,marca,modelo,serial,condicion) 
                 VALUES('$codigo','disco2','$clased2','$capd2','$marcad2','$modd2','$seriald2','$cond2')")
                 or die('error '.mysqli_error($mysqli)); 

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,voltaje,certificacion,marca,modelo,serial,condicion) 
                 VALUES('$codigo','fuente de poder','$volfp','$certfp','$marcafp','$modfp','$serialfp','$condfp')")
                 or die('error '.mysqli_error($mysqli)); 

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,clase,capacidad,marca,modelo,serial,condicion) 
                 VALUES('$codigo','tarjeta de video','$clasetv','$captv','$marcatv','$modtv','$serialtv','$contv')")
                 or die('error '.mysqli_error($mysqli)); 

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,clase,capacidad,marca,modelo,serial,condicion) 
                 VALUES('$codigo','memoria ram1','$clasemr1','$capmr1','$marcamr1','$modmr1','$serialmr1','$conmr1')")
                 or die('error '.mysqli_error($mysqli)); 

                 $query = mysqli_query($mysqli, "INSERT INTO componentes(codigo,componente,clase,capacidad,marca,modelo,serial,condicion) 
                 VALUES('$codigo','memoria ram2','$clasemr2','$capmr2','$marcamr2','$modmr2','$serialmr2','$conmr2')")
                 or die('error '.mysqli_error($mysqli)); 
                
                

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));

                header("location: ../../main.php?module=inventario&alert=1");  
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        
                $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
                $clased1  = mysqli_real_escape_string($mysqli, trim($_POST['clased1']));
                $capd1  = mysqli_real_escape_string($mysqli, trim($_POST['capd1']));
                $marcad1 = mysqli_real_escape_string($mysqli, trim($_POST['marcad1']));
                $modd1  = mysqli_real_escape_string($mysqli, trim($_POST['modd1']));
                $seriald1 = mysqli_real_escape_string($mysqli, trim($_POST['seriald1']));
                $cond1  = mysqli_real_escape_string($mysqli, trim($_POST['cond1']));
                $clased2  = mysqli_real_escape_string($mysqli, trim($_POST['clased2']));
                $capd2  = mysqli_real_escape_string($mysqli, trim($_POST['capd2']));
                $marcad2 = mysqli_real_escape_string($mysqli, trim($_POST['marcad2']));
               // $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
                $modd2 = mysqli_real_escape_string($mysqli, trim($_POST['modd2']));
                $seriald2  = mysqli_real_escape_string($mysqli, trim($_POST['seriald2']));
                $cond2  = mysqli_real_escape_string($mysqli, trim($_POST['cond2']));
                $volfp  = mysqli_real_escape_string($mysqli, trim($_POST['volfp']));
                $certfp = mysqli_real_escape_string($mysqli, trim($_POST['certfp']));
                $marcafp  = mysqli_real_escape_string($mysqli, trim($_POST['marcafp']));
                $modfp  = mysqli_real_escape_string($mysqli, trim($_POST['modfp']));
                $serialfp  = mysqli_real_escape_string($mysqli, trim($_POST['serialfp']));
                $condfp = mysqli_real_escape_string($mysqli, trim($_POST['condfp']));
                $captv  = mysqli_real_escape_string($mysqli, trim($_POST['captv']));
                $clasetv  = mysqli_real_escape_string($mysqli, trim($_POST['clasetv']));
                $marcatv  = mysqli_real_escape_string($mysqli, trim($_POST['marcatv']));
                $modtv     = mysqli_real_escape_string($mysqli, trim($_POST['modtv']));
                $serialtv = mysqli_real_escape_string($mysqli, trim($_POST['serialtv']));
               // $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
                $contv  = mysqli_real_escape_string($mysqli, trim($_POST['contv']));
                $capmr1  = mysqli_real_escape_string($mysqli, trim($_POST['capmr1']));
                $clasemr1  = mysqli_real_escape_string($mysqli, trim($_POST['clasemr1']));
                $marcamr1  = mysqli_real_escape_string($mysqli, trim($_POST['marcamr1']));
                $modmr1     = mysqli_real_escape_string($mysqli, trim($_POST['modmr1']));
                $serialmr1  = mysqli_real_escape_string($mysqli, trim($_POST['serialmr1']));
                $conmr1 = mysqli_real_escape_string($mysqli, trim($_POST['conmr1']));
                $capmr2  = mysqli_real_escape_string($mysqli, trim($_POST['capmr2']));
                $clasemr2  = mysqli_real_escape_string($mysqli, trim($_POST['clasemr2']));
                $marcamr2  = mysqli_real_escape_string($mysqli, trim($_POST['marcamr2']));
                $modmr2     = mysqli_real_escape_string($mysqli, trim($_POST['modmr2']));
                $serialmr2  = mysqli_real_escape_string($mysqli, trim($_POST['serialmr2']));
                $conmr2 = mysqli_real_escape_string($mysqli, trim($_POST['conmr2']));

                $updated_user = $_SESSION['id_user'];

            

                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    clase             = '$clased1',
                                                                    capacidad             = '$capd1',
                                                                    marca             = '$marcad1',
                                                                    serial             = '$seriald1',
                                                                    modelo             = '$modd1',
                                                                    condicion             = '$cond1'
                                                              WHERE codigo       = '$codigo' AND componente = 'disco1'")
                                                or die('error: '.mysqli_error($mysqli));


                
                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    clase              = '$clased2',
                                                                    capacidad             = '$capd2',
                                                                    marca             = '$marcad2',
                                                                    serial             = '$seriald2',
                                                                    modelo             = '$modd2',
                                                                    condicion             = '$cond2'
                                          WHERE codigo       = '$codigo' AND componente = 'disco2'")
                            or die('error: '.mysqli_error($mysqli));    
                            
      
                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    voltaje              = '$volfp',
                                                                    certificacion        = '$certfp',
                                                                    marca             = '$marcafp',
                                                                    serial             = '$serialfp',
                                                                    modelo             = '$modfp',
                                                                    condicion             = '$confp'
                                          WHERE codigo       = '$codigo' AND componente = 'fuente de poder'")
                            or die('error: '.mysqli_error($mysqli));  




                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    capacidad             = '$capmr1',
                                                                    clase               = '$clasemr1',
                                                                    marca             = '$marcamr1',
                                                                    serial             = '$serialmr1',
                                                                    modelo             = '$modmr1',
                                                                    condicion             = '$conmr1'
                                          WHERE codigo       = '$codigo' AND componente = 'memoria ram1'")
                            or die('error: '.mysqli_error($mysqli));     

                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    capacidad             = '$capmr2',
                                                                    clase               = '$clasemr2',
                                                                    marca             = '$marcamr2',
                                                                    serial             = '$serialmr2',
                                                                    modelo             = '$modmr2',
                                                                    condicion             = '$conmr2'
                                          WHERE codigo       = '$codigo' AND componente = 'memoria ram2'")
                            or die('error: '.mysqli_error($mysqli));     

                $query = mysqli_query($mysqli, "UPDATE componentes SET 
                                                                    capacidad             = '$captv',
                                                                    clase               = '$clasetv',
                                                                    marca             = '$marcatv',
                                                                    serial             = '$serialtv',
                                                                    modelo             = '$modtv',
                                                                    condicion             = '$contv'
                                          WHERE codigo       = '$codigo' AND componente = 'tarjeta de video'")
                            or die('error: '.mysqli_error($mysqli));                           



                            
                 $accion = "Modificacion de componentes internos";

                 $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 

                header("location: ../../main.php?module=inventario&alert=2");
                }        
            }
        }
    }

    if ($_GET['act']=='delete') {

        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM inventario WHERE codigo='$codigo'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de codigo";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=inventario&alert=3");
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
               
                header("location: ../../main.php?module=inventario");
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
              
                header("location: ../../main.php?module=inventario");
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
           
            header("location: ../../main.php?module=inventario");
        }
    
    }      
?>


