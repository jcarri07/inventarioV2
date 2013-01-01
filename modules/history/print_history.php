<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$query = mysqli_query($mysqli, "SELECT cedula_user, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
$data = mysqli_fetch_assoc($query);

$hari_ini = date("d-m-Y");
$nombre = $_SESSION['name_user'];
$cedula = $_SESSION['cedula_user'];
$hari_ini = date("d-m-Y");

$tgl1     = $_GET['tgl_awal'];
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0];

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

$limit =  date("d-m-Y",strtotime($tgl_akhir."+ 1 days")); 

if (isset($_GET['tgl_awal'])) {
    $no    = 1;
    $query = mysqli_query($mysqli, "SELECT nombre, cedula, permiso, accion, fecha, hora, permiso FROM history ORDER BY fecha desc") or die('Error: '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
    <table border="0">
<tr>
    <td><img src="../../assets/img/norma.png" width="550" align='right';></td>
    <td width="600"></td>
    <td><img src="../../assets/img/ABAE_logo.png" width="150" align='right';></td>
</tr>
</table>
    </head>
    <body>
   <!-- <table border="0">
<tr>
    <td><img src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" width="500"></td>
    <td width="375"></td>
    <td><img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/ABAE_logo.png" width="150" align='right';></td>
  
</tr>
</table>-->

        <div id="title">
           HISTORIAL
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
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0" style="margin: auto;">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="15" align="center" valign="middle"><small>Cedula</th>
                        <th height="20" align="center" valign="middle"><small>Uusario</small></th>
                        <th height="20" align="center" valign="middle"><small>ID</small></th>
                        <th height="20" align="center" valign="middle"><small>Fecha</small></th>
                        <th height="20" align="center" valign="middle"><small>Hora</small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='130' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='50' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='50' height='13' align='right' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query)) {
           /* $tanggal       = $data['created_date'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];*/

            echo "  <tr> //nombre, cedula, permiso, accion, fecha, hora, permiso
                        <td style='padding-left:5px;'width='25' height='13' align='center' valign='middle'>$no</td>
                        <td style='padding-left:5px;'width='80' height='13' align='center' valign='middle'>$data[cedula]</td>
                        <td style='padding-left:5px;'width='130' height='13' align='center' valign='middle'>$data[nombre]</td>
                        <td style='padding-left:5px;'width='100' height='13' align='center' valign='middle'>$data[id_user]</td>
                        <td style='padding-left:5px;' width='50' height='13' align='center' valign='middle'>$data[fecha]</td>
                        <td style='padding-left:5px;' width='80' height='13' align='center' valign='middle'>$data[hora]</td>
                        <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[accion]</td>
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
$filename="HISTORIAL.pdf"; 
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