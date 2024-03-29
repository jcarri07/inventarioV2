<?php
	header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
	header('Content-Disposition: attachment; filename=Respaldo_Movimientos.xlsx');
?>

  <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th class="center">ÍTEM</th>
                <th class="center">TRANSACCIÓN</th>
                <th class="center">TIPO</th>
                <th class="center">CÓDIGO</th>
                <th class="center">MOTIVO</th>
                <th class="center">ENTREGA</th>
                <th class="center">CÉDULA</th>
                <th class="center">SEDE</th>
                <th class="center">EMPRESA</th>
                <th class="center">RECIBE</th>
			        	<th class="center">CÉDULA</th>
                <th class="center">SEDE</th>
                <th class="center">EMPRESA</th>
                <th class="center">FECHA</th>
                <th class="center">ID USER CREACIÓN</th>
              </tr>
            </thead>
            <tbody>
  
  <?php

    $server   = "localhost";
		$username = "root";
		$password = "";
		$database = "inventario3";

		$mysqli = new mysqli($server, $username, $password, $database);

	  if ($mysqli->connect_error) {
    	die('error'.$mysqli->connect_error);
	  }

      $no = 1;
      $query = mysqli_query($mysqli, "SELECT * FROM transaccion_equipos
      UNION ALL
      SELECT * FROM transaccion_equipos_biblioteca
      UNION ALL
      SELECT * FROM transaccion_equipos_inmuebles
      UNION ALL
      SELECT * FROM transaccion_equipos_transporte ORDER BY codigo DESC;")
                                            or die('error: '.mysqli_error($mysqli));

      while ($data = mysqli_fetch_assoc($query)) { 
              echo "
             
              <tr>
                <td width='50'  class='center' align='center'>$no</td>
                <td width='150' class='center' align='center'>$data[codigo_transaccion]</td>
                <td width='150' class='center' align='center'>$data[tipo_transaccion]</td>
                <td width='150' class='center' align='center'>$data[codigo]</td>
                <td width='150' class='center' align='center'>$data[motivo]</td>
                <td width='150' class='center' align='center'>$data[entrega]</td>
                <td width='150' class='center' align='center'>$data[cedula_e]</td>
                <td width='150' class='center' align='center'>$data[lugar_e]</td>
                <td width='150' class='center' align='center'>$data[empresa]</td>
                <td width='150' class='center' align='center'>$data[recibe]</td>
                <td width='150' class='center' align='center'>$data[cedula_r]</td>
                <td width='150' class='center' align='center'>$data[lugar_r]</td>
                <td width='150' class='center' align='center'>$data[empresa_r]</td>
                <td width='150' class='center' align='center'>$data[created_date]</td>
                <td width='150' class='center' align='center'>$data[created_user]</td>
               <td class='center' width='150'>
                      
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