
<?php

//este es el del MODAL!!!****************************************************************************

require_once "../../config/database.php";
$coma = "\n";
$var1=$_POST['textqr'];//Recibo la variable pasada por post
$sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post



$query = mysqli_query($mysqli, "SELECT * FROM vehiculos WHERE codigo = '$var1'")
                                    or die('error'.mysqli_error($mysqli));

    $rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $var2   = $data['codigo'];
    	$var3	= $data['marca'];
    	$var4	= $data['tipo'];	
    	$var5	= $data['modelo'];
    	$var6	= $data['placa'];
    	$var7	= $data['color'];
    	$var8	= $data['tipoCombustible'];
    	$var9   = $data['nmroCarroceria'];
    	$var10   = $data['condicion'];
    	$var11   = $data['unidad'];
        $var12   = $data['ubicacion'];
        $var13   = $data['responsable'];
        $var14   = $data['cedula'];
    }

    $var1 = " CODIGO: ".$data['codigo'];
    $var2 = " MARCA: ".$data['marca'];
    $var3 = " TIPO: ".$data['tipo'];
    $var4 = " MODELO: ".$data['modelo'];
    $var5 = " PLACA: ".$data['placa'];
    $var6 = " COLOR: ".$data['color'];
    $var7 = " COMBUSTIBLE: ".$data['tipoCombustible'];
    $var8 = " CARROCERIA: ".$data['nmroCarroceria'];
    $var9 = " CONDICION: ".$data['condicion'];
    $var10 = " RESPONSABLE: ".$data['responsable'];
    $var11 = " CEDULA: ".$data['cedula'];
    $var12 = " UBICACION: ".$data['ubicacion'];

$textqr = $var1.$coma.$var2.$coma.$var3.$coma.$var4.$coma.$var5.$coma.$var6.$coma.$var7.$coma.$var8.$coma.$var9.$coma.$var10.$coma.$var11.$coma.$var12;

include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($textqr);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 

 $imageData = base64_encode($image);//Codifico la imagen usando base64_encode

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

