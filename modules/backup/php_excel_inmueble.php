<?php
	header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
	header('Content-Disposition: attachment; filename=Respaldo_Inmuebles.xlsx');
?>

  <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
            <tr>
                <th class="center">No.</th>
                <th class="center">CODIGO</th>
                <th class="center">TIPO</th>
                <th class="center">DESCRIPCION</th>
                <th class="center">M2</th>
                <th class="center">PISOS</th>
                <th class="center">HABITACIONES</th>
                <th class="center">HABITANTES</th>
                <th class="center">CONDICION</th>
			        	<th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">DIRECCION</th>
                <th class="center">SEDE</th>
                <th class="center">ID USER CREACION</th>
                <th class="center">ID USER ACTUALIZACION</th>
                <th class="center">FECHA DE CREACION</th>
                <th class="center">FECHA DE ACTUALIZACION</th>
                <th class="center">ESTADO</th>
                <th class="center">CATEGORIA</th>
              </tr>
            </thead>
            <tbody>
  
  <?php

    $server   = "localhost";
		$username = "root";
		$password = "Negro04149468207*";
		$database = "inventario3";

		$mysqli = new mysqli($server, $username, $password, $database);

	  if ($mysqli->connect_error) {
    	die('error'.$mysqli->connect_error);
	  }

      $no = 1;
      $query = mysqli_query($mysqli, "SELECT * FROM inmuebles ORDER BY codigo DESC")
                                            or die('error: '.mysqli_error($mysqli));

      while ($data = mysqli_fetch_assoc($query)) { 

              echo "
              <tr>
                <td width='50'  class='center' align='center'>$no</td>
                <td width='150' class='center' align='center'>$data[codigo]</td>
                <td width='150' class='center' align='center'>$data[tipo]</td>
                <td width='150' class='center' align='center'>$data[descripcion]</td>
                <td width='150' class='center' align='center'>$data[metrosCuadrados]</td>
                <td width='150' class='center' align='center'>$data[pisos]</td>
                <td width='150' class='center' align='center'>$data[nmroCuartos]</td>
                <td width='150' class='center' align='center'>$data[habitantes]</td>
                <td width='150' class='center' align='center'>$data[condicion]</td>
                <td width='150' class='center' align='center'>$data[responsable]</td>
                <td width='150' class='center' align='center'>$data[cedula]</td>
                <td width='200' class='center' align='center'>$data[direccion]</td>
                <td width='150' class='center' align='center'>$data[sede]</td>
                <td width='200' class='center' align='center'>$data[created_user]</td>
                <td width='200' class='center' align='center'>$data[updated_user]</td>
                <td width='200' class='center' align='center'>$data[created_date]</td>
                <td width='200' class='center' align='center'>$data[update_date]</td>
                <td width='150' class='center' align='center'>$data[estado]</td>
                <td width='150' class='center' align='center'>$data[categoria]</td>
                <td class='center' width='15'>
                      
                <div>
                  <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:3px' class='btn btn-primary btn-xs' href='?module=form_medicines&form=edit&id=$data[codigo]'>
                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                  </a>";
    ?>
    
    <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs" href="modules/medicines/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('¿Seguro de eliminar<?php echo $data['nombre']; ?> ?');">
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