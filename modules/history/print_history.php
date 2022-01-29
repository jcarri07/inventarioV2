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

$tgl1     = $_GET['tgl_awal'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

$limit =  date("d-m-Y",strtotime($tgl_akhir."+ 1 days")); 

$count = 0;

if (isset($_GET['tgl_awal'])) {
    $no    = 1;
    $query = mysqli_query($mysqli, "SELECT nombre, cedula, permiso, accion, fecha, hora, permiso FROM history ORDER BY fecha desc")
        or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}


?>
<html xmlns="http://www.w3.org/1999/xhtml"> 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>REPORTE DE HISTORIAL</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
</head>

<body>

<table border="0">
        <tr>
            <td><img src="../../assets/img/norma.png" width="400" align='center' ;></td>
            <td width="220"></td>
            <td><img src="../../assets/img/ABAE_logo.png" width="80" align='center' ;></td>
        </tr>
    </table>


   <!-- <table border="0">
<tr>
    <td><img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" width="500"></td>
    <td width="375"></td>
    <td><img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" width="150" align='right';></td>
  
</tr>
</table>-->

<br><br>
        <div id="title">
            REPORTE DE HISTORIAL
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
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0" style="margin: auto;">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>No.</small></th>
                        <th height="20" align="center" valign="middle"><small>USUARIO</small></th>
                        <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                        <th height="20" align="center" valign="middle"><small>ID</small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>
                        <th height="20" align="center" valign="middle"><small>HORA</small></th>
                        <th height="20" align="center" valign="middle"><small>ACCION</small></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
    
    if($count == 0) {
        echo "  <tr>
            <td width='50'  height='16' align='center' valign='middle'></td>
            <td width='120' height='16' align='center' valign='middle'></td>
            <td width='80'  height='16' align='center' valign='middle'></td>
            <td width='60'  height='16' align='center' valign='middle'></td>
            <td width='80'  height='16' align='center' valign='middle'></td>
            <td width='80'  height='16' align='center' valign='middle'></td>
            <td width='200' height='16' align='center' valign='middle'></td>
        </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query)) {
           /* $tanggal       = $data['created_date'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];*/

            echo "  <tr> //nombre, cedula, permiso, accion, fecha, hora, permiso
                <td width='50'  height='16' align='center' valign='middle'>$no</td>
                <td width='120' height='16' align='center' valign='middle'>$data[name_user]</td>
                <td width='80'  height='16' align='center' valign='middle'>$data[cedula_user]</td>
                <td width='60'  height='16' align='center' valign='middle'>$data[permiso]</td>
                <td width='80'  height='16' align='center' valign='middle'>$data[fecha]</td>
                <td width='80'  height='16' align='center' valign='middle'>$data[hora]</td>
                <td width='200' height='16' align='center' valign='middle'>$data[accion]</td>
            </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>

        </div>
    </body>
</html>
<?php
$filename="REPORTE DE HISTORIAL.pdf";
//==========================================================================================================
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('L','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>