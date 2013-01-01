<?php
	header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
	header('Content-Disposition: attachment; filename=Reporte_Inventario.xlsx');
?>

  <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                  <th class="center">No.</th>
                  <th class="center">CODIGO</th>
                  <th class="center">TIPO</th>
                  <th class="center">TITULO</th>
                  <th class="center">AUTOR</th>
                  <th class="center">EDITORIAL</th>
                  <th class="center">CANTIDAD</th>
                  <th class="center">ISBN</th>
                  <th class="center">N_BIEN</th>
                  <th class="center">CONDICION</th>
                  <th class="center">UBICACION</th>
                  <th class="center">RESPONSABLE</th>
                  <th class="center">SEDE</th>
                  <th class="center">COLOR</th>
                  <th class="center">ENVOLTURA</th>
                  <th class="center">CATEGORIA</th>
                </tr>
            </thead>
            <tbody>
  
  <?php

    $server   = "localhost";
		$username = "root";
		$password = "";
		$database = "inventario3";

    session_start();

		$mysqli = new mysqli($server, $username, $password, $database);

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
      $query = mysqli_query($mysqli, "SELECT codigo,cedula,tipo,titulo,autor,editorial,cantidad,isbn,bienesN, condicion, ubicacion, responsable, cedula, sede, color,serial,envoltura, sede,estado, categoria FROM biblioteca WHERE categoria = 'biblioteca' and sede LIKE '$sede' ORDER BY codigo ASC")
                                            or die('error: '.mysqli_error($mysqli));

      while ($data = mysqli_fetch_assoc($query)) { 
              echo "

              <tr>
                  <td width='30' class='center'>$no</td>
                  <center><td width='80' class='center' align='center'>$data[codigo]</td></center>
                  <td width='180' class='center' align='center' >$data[tipo]</td>
                  <td width='180' class='center' align='center'>$data[titulo]</td>
                  <td width='180' class='center' align='center'>$data[autor]</td>
                  <td width='180' class='center' align='center'>$data[editorial]</td>
                  <td width='180' class='center' align='center'>$data[cantidad]</td>
                  <td width='180' class='center' align='center'>$data[isbn]</td>
                  <td width='180' class='center' align='center'>$data[bienesN]</td>
                  <td width='180' class='center' align='center'>$data[condicion]</td>
                  <td width='180' class='center' align='center'>$data[ubicacion]</td>
                  <td width='180' class='center' align='center'>$data[responsable]</td>
                  <td width='180' class='center' align='center'>$data[sede]</td>
                  <td width='180' class='center' align='center'>$data[color]</td>
                  <td width='180' class='center'align='center' >$data[envoltura]</td>
                  <td width='180' class='center'align='center' >$data[categoria]</td>
                  <td class='center' width='85'>
              <div>
                  <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:3px' class='btn btn-primary btn-xs' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                  </a>";
    ?>
    
    <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs" href="modules/medicines/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('estas seguro de eliminar<?php echo $data['nombre']; ?> ?');">
        <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
    </a>
  
  <?php
    echo "    </div>
               </td>
              </tr>";
    $no++;
          	}
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->