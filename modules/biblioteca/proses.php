
<?php

function buscaRepetido($codigo,$mysqli) {

    require_once "../../config/database.php"; 

      $result = mysqli_query($mysqli,"SELECT codigo from biblioteca
      WHERE codigo = '$codigo'");
      
      $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
      $codigo = "$buat_id";

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
$NombreUser = $_SESSION['name_user'];
$iduser = $_SESSION['id_user'];
$accion = "Registro de biblioteca";
$cedulauser = $_SESSION['cedula_user'];

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
     echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {

           // $categoria = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
            $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
            $titulo  = mysqli_real_escape_string($mysqli, trim($_POST['titulo']));
            $autor  = mysqli_real_escape_string($mysqli, trim($_POST['autor']));
            $editorial  = mysqli_real_escape_string($mysqli, trim($_POST['editorial']));
            $cantidad  = mysqli_real_escape_string($mysqli, trim($_POST['cantidad']));
            $isbn  = mysqli_real_escape_string($mysqli, trim($_POST['isbn']));
            $bienesN  = mysqli_real_escape_string($mysqli, trim($_POST['bienesN']));
            $responsable  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
            //$nVDA  = mysqli_real_escape_string($mysqli, trim($_POST['nVDA']));
            $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
            $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
            //$pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
            //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));

            //$detalles  = mysqli_real_escape_string($mysqli, trim($_POST['detalles']));
            $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
            $serial  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
            //$unidad = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
            $ubicacion = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));

            $created_user = $_SESSION['id_user'];

            if (buscaRepetido($codigo,$mysqli) == 1) {
                 header("location: ../../main.php?module=biblioteca&alert=5");

             } else {

                $query = mysqli_query($mysqli, "INSERT INTO biblioteca (categoria, codigo, tipo, titulo,autor, editorial, cantidad, isbn, bienesN, responsable, cedula, sede, color, condicion, ubicacion, created_user, created_date) 
                VALUES('Biblioteca', '$codigo', '$tipo', '$titulo', '$autor', '$editorial', '$cantidad', '$isbn', '$bienesN', '$responsable', '$cedula', '$sede', '$color', '$condicion', '$ubicacion', '$created_user', NOW())")
                                            or die('error '.mysqli_error($mysqli)); 
                
            
             

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));

                header("location: ../../main.php?module=biblioteca&alert=1");  
            }
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
        
                //$categoria  = mysqli_real_escape_string($mysqli, trim($_POST['categoria']));
                $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
                $tipo  = mysqli_real_escape_string($mysqli, trim($_POST['tipo']));
                $titulo  = mysqli_real_escape_string($mysqli, trim($_POST['titulo']));
                $autor  = mysqli_real_escape_string($mysqli, trim($_POST['autor']));
                $editorial  = mysqli_real_escape_string($mysqli, trim($_POST['editorial']));
                $cantidad  = mysqli_real_escape_string($mysqli, trim($_POST['cantidad']));
                $isbn  = mysqli_real_escape_string($mysqli, trim($_POST['isbn']));
                $bienesN  = mysqli_real_escape_string($mysqli, trim($_POST['bienesN']));
                $responsable  = mysqli_real_escape_string($mysqli, trim($_POST['responsable']));
               
                $cedula  = mysqli_real_escape_string($mysqli, trim($_POST['cedula']));
                $sede  = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
               // $pcompra = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pcompra'])));
                //$pventa = str_replace('.', '', mysqli_real_escape_string($mysqli, trim($_POST['pventa'])));
               
               // $detalles  = mysqli_real_escape_string($mysqli, trim($_POST['detalles']));
                $color  = mysqli_real_escape_string($mysqli, trim($_POST['color']));
              //  $serial  = mysqli_real_escape_string($mysqli, trim($_POST['serial']));
                $condicion  = mysqli_real_escape_string($mysqli, trim($_POST['condicion']));
               // $unidad = mysqli_real_escape_string($mysqli, trim($_POST['unidad']));
                $ubicacion = mysqli_real_escape_string($mysqli, trim($_POST['ubicacion']));

                $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE biblioteca SET titulo       = '$titulo',
                                                                    autor             = '$autor',
                                                                    tipo             = '$tipo',
                                                                    editorial             = '$editorial',
                                                                    cantidad               = '$cantidad',
                                                                    isbn            = '$isbn',
                                                                    bienesN             = '$bienesN',
                                                                    cedula             = '$cedula',
                                                                    responsable             = '$responsable',
                                                                    sede          = '$sede',
                                                                    color          = '$color',
                                                                    condicion          = '$condicion',
                                                                    ubicacion          = '$ubicacion',
                                                                    updated_user    = '$updated_user'
                                                              WHERE codigo       = '$codigo'")
                                                or die('error: '.mysqli_error($mysqli));

                $accion = "Modificacion de biblioteca";

                $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 
                                            
                header("location: ../../main.php?module=biblioteca&alert=2");
                }        
            }
        }
    }

    if ($_GET['act']=='delete') {

        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM biblioteca WHERE codigo = '$codigo'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de biblioteca";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=biblioteca&alert=3");
            }
        }
    }  
    
    if ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "chequeado";

		
            $query = mysqli_query($mysqli, "UPDATE biblioteca SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=biblioteca");
            }
		}
	} 

	elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['codigo'])) {
			
			$codigo = $_GET['codigo'];
			$estado  = "chequeado";

		
            $query = mysqli_query($mysqli, "UPDATE biblioteca SET estado  = '$estado'
                                                          WHERE codigo = '$codigo'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=biblioteca");
            }
		}
	}

if ($_GET['act']=='reset' && $_SESSION['permisos_acceso'] == "Super Admin") {
        
        //$codigo = $_GET['codigo'];
        $estado  = "nochequeado";

    
        $query = mysqli_query($mysqli, "UPDATE biblioteca SET estado = '$estado'
                                                        WHERE estado = 'chequeado'")
                                        or die('error: '.mysqli_error($mysqli));


        if ($query) {
           
            header("location: ../../main.php?module=biblioteca");
        }
    
}      
?>


