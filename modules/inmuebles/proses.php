
<?php

function buscaRepetido($codigo,$mysqli) {

    require_once "../../config/database.php"; 

      $result = mysqli_query($mysqli,"SELECT codigo from inmuebles
      WHERE codigo = '$codigo'");

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
        $_SESSION['bienesN_user']  = $data['bienesN_user'];
        $_SESSION['password']  = $data['password'];
        $_SESSION['name_user'] = $data['name_user'];
        $_SESSION['permisos_acceso'] = $data['permisos_acceso'];
    
    }

$hari_ini = date("d-m-Y");
$tituloUser = $_SESSION['name_user'];
$iduser = $_SESSION['id_user'];
$accion = "Registro de equipo";
$cedulauser = $_SESSION['cedula_user'];

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
     echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {

           // $categoria = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $descripcion = mysqli_real_escape_string($mysqli, trim($_POST['descripcion']));
            $metrosCuadrados  = mysqli_real_escape_string($mysqli, trim($_POST['metrosCuadrados']));
            $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
            $tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
            $mroCuartos  = mysqli_real_escape_string($mysqli, trim($_POST['mroCuartos']));
            $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
            $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $pisos  = mysqli_real_escape_string($mysqli, trim($_POST['pisos']));
            //$nVDA  = mysqli_real_escape_string($mysqli, trim($_POST['nVDA']));
            $responsables  = mysqli_real_escape_string($mysqli, trim($_POST['responsables']));
            $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
            //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

            //$detalles  = mysqli_real_escape_string($mysqli, trim($_POST['detalles']));
            $direccion = mysqli_real_escape_string($mysqli, trim($_POST['direccion']));
            $numero  = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
            $habitantes = mysqli_real_escape_string($mysqli, trim($_POST['habitantes']));
            $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
          //  $unidad = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
            $cantidad = mysqli_real_escape_string($mysqli, trim($_POST['cantidad']));

            $created_user = $_SESSION['id_user'];

            if (buscaRepetido($codigo,$mysqli) == 1) {
                 header("location: ../../main.php?module=inmuebles&alert=5");

             } else {

                $query = mysqli_query($mysqli, "INSERT INTO inmuebles (categoria, codigo, descripcion, metrosCuadrados, ubicacion, tipo , mroCuartos, condicion, estado, responsable, cedula, sede, direccion, numero, habitantes, cantidad, created_user, updated_user) 
                VALUES('inmuebles', '$codigo', '$descripcion', '$metrosCuadrados', '$ubicacion', '$tipo ', '$mroCuartos', '$condicion', '$estado', '$responsable', '$cedula', '$sede', '$direccion', '$numero', '$habitantes', '$cantidad', '$created_user', '$created_date')")
                                            or die('error '.mysqli_error($mysqli)); 
                
            
             

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));

                header("location: ../../main.php?module=inmuebles&alert=1");  
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        // $categoria = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
        $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
        $descripcion = mysqli_real_escape_string($mysqli, trim($_POST['descripcion']));
        $metrosCuadrados  = mysqli_real_escape_string($mysqli, trim($_POST['metrosCuadrados']));
        $ubicacion  = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));
        $tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
        $mroCuartos  = mysqli_real_escape_string($mysqli, trim($_POST['mroCuartos']));
        $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
        $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
        $categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
        $pisos  = mysqli_real_escape_string($mysqli, trim($_POST['pisos']));
        //$nVDA  = mysqli_real_escape_string($mysqli, trim($_POST['nVDA']));
        $responsables  = mysqli_real_escape_string($mysqli, trim($_POST['responsables']));
        $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
        //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
        //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

        //$detalles  = mysqli_real_escape_string($mysqli, trim($_POST['detalles']));
        $direccion = mysqli_real_escape_string($mysqli, trim($_POST['direccion']));
        $numero  = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
        $habitantes = mysqli_real_escape_string($mysqli, trim($_POST['habitantes']));
        $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
      //  $unidad = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
        $cantidad = mysqli_real_escape_string($mysqli, trim($_POST['cantidad']));

                $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE inmuebles SET codigo        = '$codigo',
                                                                    metrosCuadrados            = '$metrosCuadrados',
                                                                    ubicacion             = '$ubicacion',
                                                                    tipo             = '$tipo',
                                                                    mroCuartos                  ='$mroCuartos',
                                                                    condicion               = '$condicion',
                                                                    categoria           = '$categoria',
                                                                    pisos             = '$pisos',
                                                                    cedula             = '$cedula',
                                                                    responsable             = '$responsable',
                                                                    direccion          = '$direccion',
                                                                    numero         = '$numero',
                                                                    habitantes          = '$habitantes',
                                                                    sede         = '$sede',
                                                                    ubicacion          = '$ubicacion',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo       = '$codigo'")
                                                or die('error: '.mysqli_error($mysqli));

                 $accion = "Modificacion de inmueble";

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 
                                            
                header("location: ../../main.php?module=inmuebles&alert=2");
                }        
            }
        }
    }

    if ($_GET['act']=='delete') {

        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM inmuebles WHERE codigo = '$codigo'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de inmuebles";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=inmuebles&alert=3");
            }
        }
    }  
    
    if ($_GET['act']=='on' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "nochequeado";

		
            $query = mysqli_query($mysqli, "UPDATE inmuebles SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=inmuebles");
            }
		}
	} 

	elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "chequeado";

		
            $query = mysqli_query($mysqli, "UPDATE inmuebles SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=inmuebles");
            }
		}
	}

if ($_GET['act']=='reset' && $_SESSION['permisos_acceso'] == "Super Admin") {
        
        //$codigo = $_GET['codigo'];
        $estado  = "nochequeado";

    
        $query = mysqli_query($mysqli, "UPDATE inmuebles SET estado = '$estado'
                                                        WHERE estado = 'chequeado'")
                                        or die('error: '.mysqli_error($mysqli));


        if ($query) {
           
            header("location: ../../main.php?module=inmuebles");
        }
    
}      
?>


