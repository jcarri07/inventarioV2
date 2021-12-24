
<?php

//este es el del MODAL!!!****************************************************************************

require_once "../../config/database.php";
$coma = "\n";
$var1=$_POST['textqr'];//Recibo la variable pasada por post
$sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post



$query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE codigo = '$var1'")
                                    or die('error'.mysqli_error($mysqli));

    $rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $var2   = $data['codigo'];
    	$var3	= $data['tipo'];
    	$var4	= $data['descripcion'];	
    	$var5	= $data['metrosCuadrados'];
    	$var6	= $data['pisos'];
    	$var7	= $data['nmroCuartos'];
    	$var8	= $data['habitantes'];
    	$var9   = $data['direccion'];
    	$var10   = $data['condicion'];
    	$var11   = $data['responsable'];
    	$var12   = $data['cedula'];
    }

    $var1 = " CODIGO: ".$data['codigo'];
    $var2 = " TIPO: ".$data['tipo'];
    $var3 = " DESCRIPCION: ".$data['descripcion'];
    $var4 = " M2: ".$data['metrosCuadrados'];
    $var5 = " N PISOS: ".$data['pisos'];
    $var6 = " N CUARTOS: ".$data['nmroCuartos'];
    $var7 = " HABITANTES: ".$data['habitantes'];
    $var8 = " DIRECCION: ".$data['direccion'];
    $var9 = " CONDICION: ".$data['condicion'];
    $var10 = " RESPONSABLE: ".$data['responsable'];
    $var11 = " CEDULA: ".$data['cedula'];

$textqr = $var1.$coma.$var2.$coma.$var3.$coma.$var4.$coma.$var5.$coma.$var6.$coma.$var7.$coma.$var8.$coma.$var9.$coma.$var10.$coma.$var11;

include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($textqr);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 

 $imageData = base64_encode($image);//Codifico la imagen usando base64_encode

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

