<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
    or die('error: ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
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
            <td><img src="../../assets/img/norma.png" width="550" align='right' ;></td>
            <td width="900"></td>
            <td><img src="../../assets/img/ABAE_logo.png" width="150" align='right' ;></td>
        </tr>
    </table>

    <!-- <div id="imagen2">
    <img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" />
    </div>

    <div id="imagen">
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" />
    </div>-->


    <div id="title">
        REPORTE DE INVENTARIO
    </div>

    <table border="0.7" cellpadding="0" cellspacing="0" style="margin: left;">
        <tr>
            <td width="90">Generado por: </td>
            <td><?php echo $nombre ?></td>

        </tr>
        <tr>
            <td>Cedula:</td>
            <td align="center"><?php echo $data['cedula_user'] ?></td>
        </tr>
        <tr>
            <td>Fecha:</td>
            <td width="80" align="center"> <?= date('d/m/Y'); ?></td>
        </tr>

    </table>

    <br>
    <hr><br>

    <div id="isi">
        <table width="100%" border="0.7" cellpadding="0" cellspacing="0" style="margin: auto;" font-size="12px">
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th class="center">No.</th>
                    <th class="center">CODIGO</th>
                    <th class="center">MARCA</th>
                    <th class="center">TIPO</th>
                    <th class="center">MODELO</th>
                    <th class="center">PLACA</th>
                    <th class="center">COLOR</th>
                    <th class="center">CILINDROS</th>
                    <th class="center">TRANSMISION</th>
                    <th class="center">TIPO COMBUSTIBLE</th>
                    <th class="center">Nº CARROCERIA</th>
                    <th class="center">CONDICION</th>
                    <th class="center">UNIDAD</th>
                    <th class="center">UBICACION</th>
                    <th class="center">SEDE</th>
                    <th class="center">RESGUARDO</th>
                    <th class="center">RESPONSABLE</th>
                    <th class="center">SERVICIO</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($data = mysqli_fetch_assoc($query)) {


                    echo "  <tr>
                <td width='20' class='center'>$no</td>
                <td width='50' class='center'>$data[codigo]</td>
                <td width='80' class='center'>$data[marca]</td>
                <td width='80' class='center'>$data[tipo]</td>
                <td width='80' class='center'>$data[modelo]</td>
                <td width='80' class='center'>$data[placa]</td>
                <td width='80' class='center'>$data[color]</td>
                <td width='80' class='center'>$data[cilindros]</td>
                <td width='80' class='center'>$data[transmision]</td>
                <td width='50' class='center'>$data[tipoCombustible]</td>
                <td width='80' class='center'>$data[nmroCarroceria]</td>
                <td width='50' class='center'>$data[condicion]</td>
                <td width='80' class='center'>$data[unidad]</td>
                <td width='90' class='center'>$data[ubicacion]</td>
                <td width='90' class='center'>$data[sede]</td>
                <td width='90' class='center'>$data[resguardo]</td>
                <td width='90' class='center'>$data[responsable]</td>
                <td width='90' class='center'>$data[servicio]</td>                       
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
$filename = "INFORME DE INVENTARIO.pdf";
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