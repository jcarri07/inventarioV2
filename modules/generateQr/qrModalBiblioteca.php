
<?php

//este es el del MODAL!!!****************************************************************************

require_once "../../config/database.php";
$coma = "\n";
$var1=$_POST['textqr'];//Recibo la variable pasada por post
$sizeqr=$_POST['sizeqr'];//Recibo la variable pasada por post



$query = mysqli_query($mysqli, "SELECT * FROM biblioteca WHERE codigo = '$var1'")
                                    or die('error'.mysqli_error($mysqli));

    $rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $var2   = $data['codigo'];
    	$var3	= $data['isbn'];
    	$var4	= $data['tipo'];	
    	$var5	= $data['titulo'];
    	$var6	= $data['autor'];
    	$var7	= $data['editorial'];
    	$var8	= $data['cantidad'];
    	$var9   = $data['bienesN'];
    	$var10   = $data['responsable'];
    	$var11   = $data['cedula'];
    	$var12   = $data['ubicacion'];
    }

    $var1 = " CODIGO: ".$data['codigo'];
    $var2 = " ISBN: ".$data['isbn'];
    $var3 = " TIPO: ".$data['tipo'];
    $var4 = " TITULO: ".$data['titulo'];
    $var5 = " AUTOR: ".$data['autor'];
    $var6 = " EDITORIAL: ".$data['editorial'];
    $var7 = " CANTIDAD: ".$data['cantidad'];
    $var8 = " B/N: ".$data['bienesN'];
    $var9 = " RESPONSABLE: ".$data['responsable'];
    $var10 = " CEDULA: ".$data['cedula'];
    $var12 = " UBICACION: ".$data['ubicacion'];

$textqr = $var1.$coma.$var2.$coma.$var3.$coma.$var4.$coma.$var5.$coma.$var6.$coma.$var7.$coma.$var8.$coma.$var9;

include('vendor/autoload.php');//Llamare el autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($textqr);//Creo una nueva instancia de la clase
$qrCode->setSize($sizeqr);//Establece el tamaño del qr
//header('Content-Type: '.$qrCode->getContentType());
$image= $qrCode->writeString();//Salida en formato de texto 

 $imageData = base64_encode($image);//Codifico la imagen usando base64_encode

echo '<img src="data:image/png;base64,'.$imageData.'">';

?>

