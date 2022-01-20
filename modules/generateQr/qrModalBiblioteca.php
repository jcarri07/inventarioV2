
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
        $var1 = $data['codigo'];
        $var2 = $data['tipo'];
        $var3 = $data['titulo'];
    	$var4 = $data['autor'];
    	$var5 = $data['editorial'];
        $var6 = $data['isbn'];
        $var7 = $data['bienesN'];
    	$var8 = $data['responsable'];
    	$var9 = $data['cedula'];
        $var10 = $data['ubicacion'];
        $var11 = $data['sede'];
    	$var12 = $data['cantidad'];
    	
    }

    $var1 = " CODIGO: ".$data['codigo'];
    $var2 = " TIPO: ".$data['tipo'];
    $var3 = " TITULO: ".$data['titulo'];
    $var4 = " AUTOR: ".$data['autor'];
    $var5 = " EDITORIAL: ".$data['editorial'];
    $var6 = " ISBN: ".$data['isbn'];
    $var7 = " B/N: ".$data['bienesN'];
    $var8 = " RESPONSABLE: ".$data['responsable'];
    $var9 = " CEDULA: ".$data['cedula'];
    $var10 = " UBICACION: ".$data['ubicacion'];
    $var11 = " SEDE: ".$data['sede'];
    $var12 = " CANTIDAD: ".$data['cantidad'];

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

