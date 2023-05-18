<?php
	header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
	header('Content-Disposition: attachment; filename=Exportación_Biblioteca.xlsx');
?>

  <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                  <th class="center">ÍTEM</th>
                  <th class="center">CÓDIGO DE CUENTA CONTABLE</th>
                  <th class="center">DESCRIPCIÓN</th>
                  <th class="center">TÍTULO</th>
                  <th class="center">AUTOR</th>
                  <th class="center">COLOR</th>
                  <th class="center">SERIAL</th>
                  <th class="center">No. DEL BIEN</th>               
                  <th class="center">CONDICIÓN</th>
                  <th class="center">DIRECCIÓN O UNIDAD</th>
                  <th class="center">UBICACIÓN</th>
                  <th class="center">NOMBRE</th>
                  <th class="center">No. DE CÉDULA</th>                
                  <th class="center">SEDE</th>
                  <th class="center">PERTENECE</th>
                </tr>
            </thead>
            <tbody>
  
  <?php

    require('../config/database.php');

    session_start();

    $hari_ini = date("d-m-Y");
    $NombreUser = $_SESSION['name_user'];
    $iduser = $_SESSION['id_user'];
    $cedulauser = $_SESSION['cedula_user'];

    $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
    $data = mysqli_fetch_assoc($query);
    $_SESSION['sede'] = $data['sede'];
    $_SESSION['permisos_acceso'] = $data['permisos_acceso'];
    $permiso = $_SESSION['permisos_acceso'];
    $sede = $_SESSION['sede'];

	  if ($mysqli->connect_error) {
    	die('error'.$mysqli->connect_error);
	  }

      $no = 1;
      if($permiso != 'Super Admin') {
        $query2 = mysqli_query($mysqli, "SELECT * FROM biblioteca and sede LIKE '$sede' ORDER BY codigo DESC")
        or die('error: ' . mysqli_error($mysqli));
      } else {
        $query2 = mysqli_query($mysqli, "SELECT * FROM biblioteca ORDER BY codigo DESC")
        or die('error: ' . mysqli_error($mysqli));
      }

      while ($data = mysqli_fetch_assoc($query2)) { 
              echo "

              <tr>
                  <td width='50'  class='center'>$no</td>
                  <td width='150' class='center' align='center'>$data[codigo]</td>
                  <td width='150' class='center' align='center'>$data[descripcion]</td>
                  <td width='200' class='center' align='center'>$data[titulo]</td>
                  <td width='150' class='center' align='center'>$data[autor]</td>
                  <td width='150' class='center' align='center'>$data[color]</td>
                  <td width='150' class='center' align='center'>$data[isbn]</td>
                  <td width='150' class='center' align='center'>$data[bienesN]</td>
                  <td width='150' class='center' align='center'>$data[condicion]</td>
                  <td width='150' class='center' align='center'>$data[unidad]</td>
                  <td width='150' class='center' align='center'>$data[ubicacion]</td>
                  <td width='150' class='center' align='center'>$data[responsable]</td>
                  <td width='150' class='center' align='center'>$data[cedula]</td>
                  <td width='150' class='center' align='center'>$data[sede]</td>
                  <td width='150' class='center' align='center'>$data[pertenece]</td>
                  <td class='center' width='150'>

                <div>
                  <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:3px' class='btn btn-primary btn-xs' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                  </a>";
    ?>
  
  
  <?php
    echo "    </div>
               </td>
              </tr>";
    $no++;
          	}

    $accion = "Exportacion de Biblioteca";

    $query3 = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli));
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->