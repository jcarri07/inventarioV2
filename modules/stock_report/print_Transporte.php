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
                                or die('error: '.mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$sede = $_SESSION['sede'];
$hari_ini = date("d-m-Y");

$tgl1     = $_GET['tgl_awal_Transporte'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir_Transporte'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

$limit =  date("Y-m-d",strtotime($tgl_akhir."+ 1 days")); 

if ($tgl_awal !== $tgl_akhir) {
    $no    = 1;
    $query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.codigo,a.motivo,a.entrega, a.recibe, a.cedula_r, a.cedula_e, a.empresa,a.lugar_e, a.lugar_r, a.created_date,b.codigo, b.tipo,b.unidad,b.cedula,b.placa, b.marca
                                    FROM transaccion_equipos_Transporte as a INNER JOIN Transporte as b ON a.codigo=b.codigo
                                    WHERE a.created_date BETWEEN '$tgl_awal' AND '$limit'
                                    ORDER BY a.codigo_transaccion DESC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
} else {
    $no    = 1;
    $query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.codigo,a.motivo,a.entrega, a.recibe, a.cedula_r, a.cedula_e, a.empresa,a.lugar_e, a.lugar_r, a.created_date,b.codigo, b.tipo,b.unidad,b.cedula,b.placa, b.marca
                                    FROM transaccion_equipos_Transporte as a INNER JOIN Transporte as b ON a.codigo=b.codigo
                                    WHERE a.created_date BETWEEN '$tgl_awal' AND '$limit'
                                    ORDER BY a.codigo_transaccion DESC") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}

?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>REPORTE DE MOVIMIENTOS (Transporte)</title>
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


        <div id="title">
            REPORTE DE MOVIMIENTOS (Transporte)
        </div>
    <?php  

    $fecha1 = date("d-m-Y", strtotime($tgl_awal));
    $fecha2 = date("d-m-Y", strtotime($tgl_akhir));
    if ($tgl_awal==$tgl_akhir) { ?>
        <div id="title-tanggal">
            Fecha: <?php echo $fecha1; ?>
        </div>
    <?php
    } else { ?>
        <div id="title-tanggal">
            Desde:  <?php echo $fecha1; ?> Hasta: <?php echo $fecha2; ?>
        </div>
    <?php
    }
    ?>

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
            <td align="center"><?php echo $data['sede']?></td>
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
                        <th height="20" align="center" valign="middle"><small>MARCA</small></th>
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
    
    if($count == 0) {
        echo "  <tr>
            <td width='50'  height='16' align='center' valign='middle'></td>
            <td width='100' height='16' align='center' valign='middle'></td>
            <td width='50'  height='16' align='center' valign='middle'></td>
            <td width='50'  height='16' align='center' valign='middle'></td>
            <td width='100' height='16' align='center' valign='middle'></td>
            <td width='100' height='16' align='center' valign='middle'></td>
            <td width='100' height='16' align='center' valign='middle'></td>
            <td width='60'  height='16' align='center' valign='middle'></td>
            <td width='60'  height='16' align='center' valign='middle'></td>
            <td width='100' height='16' align='center' valign='middle'></td>
            <td width='60'  height='16' align='center' valign='middle'></td>
            <td width='60'  height='16' align='center' valign='middle'></td>
            <td width='65'  height='16' align='center' valign='middle'></td>
        </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query)) {
            $originalDate = $data['created_date'];
            $fecha = date("d-m-Y", strtotime($originalDate));

                echo "  <tr>
                    <td width='50'  height='16' align='center' valign='middle'>$no</td>
                    <td width='100' height='16' align='center' valign='middle'>$data[codigo_transaccion]</td>
                    <td width='50'  height='16' align='center' valign='middle'>$data[tipo_transaccion]</td>
                    <td width='50'  height='16' align='center' valign='middle'>$data[codigo]</td>
                    <td width='100' height='16' align='center' valign='middle'>$data[marca]</td>
                    <td width='100' height='16' align='center' valign='middle'>$data[motivo]</td>
                    <td width='100' height='16' align='center' valign='middle'>$data[entrega]</td>
                    <td width='60'  height='16' align='center' valign='middle'>$data[cedula_e]</td>
                    <td width='60'  height='16' align='center' valign='middle'>$data[lugar_e]</td> 
                    <td width='100' height='16' align='center' valign='middle'>$data[recibe]</td>
                    <td width='60'  height='16' align='center' valign='middle'>$data[cedula_r]</td>
                    <td width='60'  height='16' align='center' valign='middle'>$data[lugar_r]</td>  
                    <td width='65'  height='16' align='center' valign='middle'>$fecha</td> 
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
$filename="Reporte Movimientos Transporte.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
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