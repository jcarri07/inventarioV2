<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, sede, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
    or die('error: ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$sede = $_SESSION['sede'];
$hari_ini = date("d-m-Y");

$no = 1;

$query = mysqli_query($mysqli, "SELECT * FROM vehiculos ORDER BY codigo ASC")
    or die('Error ' . mysqli_error($mysqli));
$count  = mysqli_num_rows($query);


?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>REPORTE DE INVENTARIO</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
</head>

<body>

    <table border="0">
        <tr>
            <td><img src="../../assets/img/norma.png" width="400" align='center' ;></td>
            <td width="550"></td>
            <td><img src="../../assets/img/ABAE_logo.png" width="80" align='center' ;></td>
        </tr>
    </table>

    <!-- <div id="imagen2">
    <img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" />
    </div>

    <div id="imagen">
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" />
    </div>-->

    <br><br>

    <div id="title">
        REPORTE DE INVENTARIO (VEHICULOS)
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
            <td align="center"><?php echo $sede?></td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td align="center"> <?= date('d/m/Y'); ?></td>
        </tr>
    </table>

    <br>
    <hr><br>

    <div id="isi">
        <table width="100%" border="0.7" cellpadding="0" cellspacing="0" style="margin: auto;" font-size="12px">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle"><small>No.</small></th>
                    <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                    <th height="20" align="center" valign="middle"><small>CLASE</small></th>
                    <th height="20" align="center" valign="middle"><small>MARCA</small></th>
                    <th height="20" align="center" valign="middle"><small>PLACA</small></th>
                    <th height="20" align="center" valign="middle"><small>COMBUSTIBLE</small></th>
                    <th height="20" align="center" valign="middle"><small>CONDICION</small></th>
                    <th height="20" align="center" valign="middle"><small>RESPONSABLE</small></th>
                    <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                    <th height="20" align="center" valign="middle"><small>PERTENECE</small></th>
                </tr>
            </thead>

            <tbody>
                <?php

                while ($data = mysqli_fetch_assoc($query)) {


                    echo "  <tr>
                        <td width='50'  height='16' align='center' valign='middle'>$no</td>
                        <td width='50'  height='16' align='center' valign='middle'>$data[codigo]</td>
                        <td width='130' height='16' align='center' valign='middle'>$data[tipo]</td>
                        <td width='130' height='16' align='center' valign='middle'>$data[marca]</td>
                        <td width='130' height='16' align='center' valign='middle'>$data[placa]</td>
                        <td width='130' height='16' align='center' valign='middle'>$data[tipoCombustible]</td>
                        <td width='80'  height='16' align='center' valign='middle'>$data[condicion]</td>
                        <td width='120' height='16' align='center' valign='middle'>$data[responsable]</td>
                        <td width='80'  height='16' align='center' valign='middle'>$data[cedula]</td>
                        <td width='80'  height='16' align='center' valign='middle'>$data[pertenece]</td>                  
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
$filename = "REPORTE DE INVENTARIO VEHICULOS.pdf";
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