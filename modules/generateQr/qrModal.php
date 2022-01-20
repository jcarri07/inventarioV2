
<?php

//este es el del MODAL!!!****************************************************************************

require_once "../../config/database.php";
$coma = "\n";
$var5=$_POST['textqr'];//Recibo la variable pasada por post
$sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post



$query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE serial = '$var5'")
                                    or die('error'.mysqli_error($mysqli));

    $rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $var1 = $data['codigo'];
        $var2 = $data['descripcion'];
    	$var3 = $data['marca'];
        $var4 = $data['modelo'];
        $var6 = $data['bienesN'];	
    	$var7 = $data['color'];
        $var8 = $data['condicion'];
        $var9 = $data['responsable'];
        $var10 = $data['cedula'];
        $var11 = $data['ubicacion'];
    	$var12 = $data['sede'];
    	$var13 = $data['pertenece'];
        
    }

    $var1 = " CODIGO: ".$data['codigo'];
    $var2 = " DESCRIPCION: ".$data['descripcion'];
    $var3 = " MARCA: ".$data['marca'];
    $var4 = " MODELO: ".$data['modelo'];
    $var5 = " SERIAL: ".$data['serial'];
    $var6 = " B/N: ".$data['bienesN'];
    $var7 = " COLOR: ".$data['color'];
    $var8 = " CONDICION: ".$data['condicion'];
    $var9 = " RESPONSABLE: ".$data['responsable'];
    $var10 = " CEDULA: ".$data['cedula'];
    $var11 = " UBICACION: ".$data['ubicacion'];
    $var12 = " SEDE: ".$data['sede'];
    $var13 = " PERTENECE: ".$data['pertenece'];

$textqr = $var1.$coma.$var2.$coma.$var3.$coma.$var4.$coma.$var5.$coma.$var6.$coma.$var7.$coma.$var8.$coma.$var9.$coma.$var10.$coma.$var11.$coma.$var12.$coma.$var13;

include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($textqr);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 

 $imageData = base64_encode($image);//Codifico la imagen usando base64_encode

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

