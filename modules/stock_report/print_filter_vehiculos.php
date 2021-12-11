<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$var = $_POST['nombre_vehiculos'];
$filtro = $_POST['filtrar_vehiculos']; trim($filtro);
$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$hari_ini = date("d-m-Y");

$no = 1;

$query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.codigo,a.motivo,a.entrega, a.recibe, a.cedula_r, a.cedula_e,a.empresa,a.created_date,b.codigo,b.tipo
                                    FROM transaccion_equipos_vehiculos as a INNER JOIN vehiculos as b ON a.codigo=b.codigo
                                    WHERE a.$filtro LIKE '$var%'")
                                or die('Error'.mysqli_error($mysqli));
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
        <title>REPORTE DE MOVIMIENTOS</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
       
    </head>
    <body>
    

 <table border="0">
<tr>
    <td><img src="../../assets/img/norma.png" width="550" align='right';></td>
    <td width="900"></td>
    <td><img src="../../assets/img/ABAE_logo.png" width="150" align='right';></td>
</tr>
</table>



   <!-- <div id="imagen2">
    <img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" />
    </div>

    <div id="imagen">
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" />
    </div>-->


    <div id="title">
           REPORTE CONTROL DE MOVIMIENTOS DE EQUIPOS 
        </div>
        <div id="title-tanggal">
            Filtrando: <?php echo $filtro ." "."="." ". $var; ?>
        </div>

            <table border="0.7" cellpadding="0" cellspacing="0"  style="margin: left;"  >
                <tr>
                    <td width="90">Generado por: </td>
                    <td><?php echo $nombre ?></td>
                </tr>
                <tr>
                    <td>Cedula:</td>
                    <td  align="center"><?php echo $data['cedula_user'] ?></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td  width="80" align="center"> <?=date('d/m/Y');?></td>
                </tr>
                
            </table>
        <br>
        <hr><br>
        
        <div id="isi">
            <table width="100%" border="0.7" cellpadding="0" cellspacing="0" style="margin: auto;" font-size="12px">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                    <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>NRO TRANSACCION</small></th>
                        <th height="20" align="center" valign="middle"><small>COD.</small></th>
                        <th height="20" align="center" valign="middle"><small>EQUIPO</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
                        <th height="20" align="center" valign="middle"><small>MOTIVO</small></th>
                        <th height="20" align="center" valign="middle"><small>ENTREGA</small></th>
                        <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                        <th height="20" align="center" valign="middle"><small>EMPRESA</small></th>
                        <th height="20" align="center" valign="middle"><small>RECIBE</small></th>
                        <th height="20" align="center" valign="middle"><small>CEDULA</small></th>
                        <th height="20" align="center" valign="middle"><small>EMPRESA</small></th>
                        <th height="20" align="center" valign="middle"><small>FECHA</small></th>

                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query)) {
           
            
            echo "  <tr>
            <td style='padding-left:5px;'width='15' height='13' align='center' valign='middle'>$no</td>
            <td style='padding-left:5px;'width='100' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
            <td style='padding-left:3px;'width='30' height='13' align='center' valign='middle'>$data[codigo]</td>
            <td style='padding-left:5px;'width='90' height='13' align='center' valign='middle'>$data[tipo]</td>
            <td style='padding-left:5px;' width='40' height='13' align='center' valign='middle'>$data[tipo_transaccion]</td>
            <td style='padding-left:5px;' width='100' height='13' align='center' valign='middle'>$data[motivo]</td>
            <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[entrega]</td>
            <td style='padding-left:5px;' width='60' height='13' align='center' valign='middle'>$data[cedula_e]</td>
            <td style='padding-left:5px;' width='45' height='13' align='center' valign='middle'>$data[empresa]</td>
            <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[recibe]</td>
            <td style='padding-left:5px;' width='55' height='13' align='center' valign='middle'>$data[cedula_r]</td>
            <td style='padding-left:5px;' width='45' height='13' align='center' valign='middle'>$data[empresa]</td>  
            <td style='padding-left:5px;'width='60' height='13' align='center' valign='middle'>$data[created_date]</td>                      
                
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
    $filename="REPORTE CONTROL DE MOVIMIENTOS DE EQUIPOS.pdf"; 
//==========================================================================================================
    $content = ob_get_clean();
    $content = '<page style="font-family: freeserif">'.($content).'</page>';

    require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('l','A4','en', false,'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
    catch(HTML2PDF_exception $e) { echo $e; }
?>