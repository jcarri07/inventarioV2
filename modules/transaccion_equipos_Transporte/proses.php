

<?php
session_start();

$NombreUser = $_SESSION['name_user'];
$iduser = $_SESSION['id_user'];
$accion = "Registro de Vehiculo";
$cedulauser = $_SESSION['cedula_user'];

require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act'] == 'insert') {
        if (isset($_POST['Guardar'])) {
            
            $codigo_transaccion = mysqli_real_escape_string($mysqli, trim($_POST['codigo_transaccion']));
            
			/*$fecha         = mysqli_real_escape_string($mysqli, trim($_POST['fecha_a']));
            $exp             = explode('-',$fecha);
            $fecha_a   = $exp[2]."-".$exp[1]."-".$exp[0];*/
            
            $codigo     = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            $motivo     = mysqli_real_escape_string($mysqli, trim($_POST['motivo']));
            $recibe     = mysqli_real_escape_string($mysqli, trim($_POST['recibe']));
            $cedula_r   = mysqli_real_escape_string($mysqli, trim($_POST['cedula_r']));
            $empresa_r  = mysqli_real_escape_string($mysqli, trim($_POST['empresa_r']));
            $entrega    = mysqli_real_escape_string($mysqli, trim($_POST['entrega']));
            $cedula_e   = mysqli_real_escape_string($mysqli, trim($_POST['cedula_e']));
            $empresa    = mysqli_real_escape_string($mysqli, trim($_POST['empresa']));
            $lugar_r    = mysqli_real_escape_string($mysqli, trim($_POST['lugar_r']));
            $lugar_e    = mysqli_real_escape_string($mysqli, trim($_POST['lugar_e']));
            $tipo_transaccion = mysqli_real_escape_string($mysqli, trim($_POST['transaccion']));
            $created_user     = $_SESSION['id_user'];
            $accion = "Transaccion de ".$tipo_transaccion;
          
            $query = mysqli_query($mysqli, "INSERT INTO transaccion_equipos_Transporte(codigo_transaccion,created_date,codigo,motivo,recibe,cedula_r,empresa_r,entrega,cedula_e,empresa,lugar_r,lugar_e,created_user,tipo_transaccion) 
                                            VALUES('$codigo_transaccion',NOW(),'$codigo','$motivo','$recibe','$cedula_r','$empresa_r','$entrega','$cedula_e','$empresa','$lugar_r','$lugar_e','$created_user','$tipo_transaccion')")
                                            or die('Error: '.mysqli_error($mysqli));    

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
           
            if ($query) {
                
                $query1 = mysqli_query($mysqli, "UPDATE inventario SET stock = '$total_stock'
                                                              WHERE codigo = '$codigo'")
                                                or die('Error: '.mysqli_error($mysqli));

               
                if ($query1) {                       
                    
                    header("location: ../../main.php?module=transaccion_equipos_Transporte&alert=1");
                }
            }   
        }   
    }
}       
?>