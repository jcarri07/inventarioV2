<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
    or die('error: ' . mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$var = $_POST['nombre'];
$var2 = $_POST['nombre2'];
$var3 = $_POST['nombre3'];
$filtro = $_POST['filtrado_inmuebles'];
trim($filtro);
$filtro2 = $_POST['filtrado_inmuebles2'];
trim($filtro2);
$filtro3 = $_POST['filtrado_inmuebles3'];
trim($filtro3);
$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$hari_ini = date("d-m-Y");

$no = 1;

if ($var != "" && $var2 == "" && $var3 == "") {

    $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE $filtro LIKE '$var%'")
        or die('Error ' . mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}

if ($var != "" && $var2 != "" && $var3 == "") {

    $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE $filtro LIKE '$var%' && $filtro2 LIKE '$var2%'")
        or die('Error ' . mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}

if ($var != "" && $var2 != "" && $var3 != "") {

    $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE $filtro LIKE '$var%' && $filtro2 LIKE '$var2%' && $filtro3 LIKE '$var3%'")
        or die('Error ' . mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}


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

    <div id="title-tanggal">
        Filtrando: <?php echo $filtro . " " . "=" . " " . $var; ?>
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
                    <th height="20" align="center" valign="middle"><small>NO.</small></th>
                    <th class="center">CODIGO</th>
                    <th class="center">DESCRIPCION</th>
                    <th class="center">METROS CUADRADOS</th>
                    <th class="center">UBICACION</th>
                    <th class="center">DIRECCION</th>
                    <th class="center">TIPO</th>
                    <th class="center">NRO CUARTOS</th>
                    <th class="center">CONDICION</th>
                    <th class="center">PISOS</th>
                    <th class="center">RESPONSABLE</th>
                    <th class="center">CEDULA</th>
                    <th class="center">NRO HABITANTES</th>
                    <th class="center">EDITAR</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($data = mysqli_fetch_assoc($query)) {


                    echo "  <tr>
                      <td width='25' height='13' align='center' valign='middle'>$no</td>
                      <td width='50' class='center'>$data[codigo]</td>
                      <td width='90' class='center'>$data[descripcion]</td>
                      <td width='90' class='center'>$data[metrosCuadrados]</td>
                      <td width='90' class='center'>$data[ubicacion]</td>
                      <td width='90' class='center'>$data[direccion]</td>
                      <td width='90' class='center'>$data[tipo]</td>
                      <td width='90' class='center'>$data[nmroCuartos]</td>
                      <td width='50' class='center'>$data[condicion]</td>
                      <td width='90' class='center'>$data[pisos]</td>
                      <td width='90' class='center'>$data[responsable]</td>
                      <td width='50' class='center'>$data[cedula]</td>
                      <td width='90' class='center'>$data[habitantes]</td>               
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
$filename = "REPORTE DE INVENTARIO INMUEBLES.pdf";
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