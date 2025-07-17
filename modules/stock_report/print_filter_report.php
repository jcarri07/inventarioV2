<?php
session_start();
ob_start();

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, sede, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
    or die('error: ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$var = $_POST['nombre'];
$filtro = $_POST['filtrar'];
trim($filtro);
$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$sede = $_SESSION['sede'];
$hari_ini = date("d-m-Y");

$no = 1;

$query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion, a.codigo, a.motivo, a.entrega, a.cedula_e, lugar_e, a.recibe, a.cedula_r, lugar_r, a.created_date, b.codigo,b.descripcion
                                    FROM transaccion_equipos as a INNER JOIN inventario as b ON a.codigo=b.codigo
                                    WHERE a.$filtro LIKE '$var%' ORDER BY a.codigo_transaccion DESC")
    or die('Error' . mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

/*$query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.codigo,a.motivo,a.entrega, a.recibe, a.cedula_r, a.cedula_e, a.empresa,a.created_date,b.codigo,b.descripcion
FROM transaccion_inventario as a INNER JOIN inventario as b ON a.codigo=b.codigo
WHERE a.$filtro LIKE '$var%'") 
or die('error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);*/


?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>REPORTE DE MOVIMIENTOS (Generasl)</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />

</head>

<body>


    <table border="0">
        <tr>
            <td><img src="../../assets/img/MINCYT_Cintillo.png" width="300" align='center' ;></td>
            <td width="630"></td>
            <td><img src="../../assets/img/ABAE_logo.png" width="100" align='center' ;></td>
        </tr>
    </table>

    <br><br>



    <!-- <div id="imagen2">
    <img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" />
    </div>

    <div id="imagen">
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" />
    </div>-->


    <div id="title">
        REPORTE DE MOVIMIENTOS (GENERAL)
    </div>
    <div id="title-tanggal">
        Filtrado: <?php echo $filtro . " " . "=" . " " . $var; ?>
    </div>

    <table border="0.7" cellpadding="0" cellspacing="0" style="margin: left;">
        <tr>
            <td width="100">Generado por:</td>
            <td width="100" align="center"><?php echo $nombre ?></td>
        </tr>

        <tr>
            <td>Cedula:</td>
            <td align="center"><?php echo $data['cedula_user'] ?></td>
        </tr>

        <tr>
            <td>Sede:</td>
            <td align="center"><?php echo $data['sede'] ?></td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td align="center"> <?= date('d/m/Y'); ?></td>
        </tr>
    </table>

    <br>
    <hr><br>

    <div id="isi">
        <table width="100%" border="0.7" cellpadding="0" cellspacing="0" style="margin: auto;">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle"><small>ITEM</small></th>
                    <th height="20" align="center" valign="middle"><small>TRANSACCION</small></th>
                    <th height="20" align="center" valign="middle"><small>TIPO </small></th>
                    <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                    <th height="20" align="center" valign="middle"><small>DESCRIPCION</small></th>
                    <th height="20" align="center" valign="middle"><small>MOTIVO</small></th>
                    <th height="20" align="center" valign="middle"><small>ENTREGA</small></th>
                    <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                    <th height="20" align="center" valign="middle"><small>SEDE</small></th>
                    <th height="20" align="center" valign="middle"><small>RECIBE</small></th>
                    <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                    <th height="20" align="center" valign="middle"><small>SEDE</small></th>
                    <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                </tr>
            </thead>

            <tbody>
                <?php

                while ($data = mysqli_fetch_assoc($query)) {
                    $originalDate = $data['created_date'];
                    $fecha = date("d-m-Y", strtotime($originalDate));


                    echo "  <tr>
                <td style= width='50'  height='16' align='center' valign='middle'>$no</td>
                <td style= width='100' height='16' align='center' valign='middle'>$data[codigo_transaccion]</td>
                <td style= width='50'  height='16' align='center' valign='middle'>$data[tipo_transaccion]</td>
                <td style= width='50'  height='16' align='center' valign='middle'>$data[codigo]</td>
                <td style= width='100' height='16' align='center' valign='middle'>$data[descripcion]</td>
                <td style= width='100' height='16' align='center' valign='middle'>$data[motivo]</td>
                <td style= width='100' height='16' align='center' valign='middle'>$data[entrega]</td>
                <td style= width='60'  height='16' align='center' valign='middle'>$data[cedula_e]</td>
                <td style= width='60'  height='16' align='center' valign='middle'>$data[lugar_e]</td>
                <td style= width='100' height='16' align='center' valign='middle'>$data[recibe]</td>
                <td style= width='60'  height='16' align='center' valign='middle'>$data[cedula_r]</td>
                <td style= width='60'  height='16' align='center' valign='middle'>$data[lugar_r]</td>  
                <td style= width='65'  height='16' align='center' valign='middle'>$fecha</td>                      
            </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php
$filename = "Reporte Movimientos General Filtrado.pdf";
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">' . ($content) . '</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try {
    $html2pdf = new HTML2PDF('l', 'A4', 'en', false, 'ISO-8859-15', array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
} catch (HTML2PDF_exception $e) {
    echo $e;
}
?>