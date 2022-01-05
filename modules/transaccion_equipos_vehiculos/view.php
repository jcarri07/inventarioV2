<style>
  .botones{
    height: 36px;
    margin-left: 2px;
  }

  input[type=file] {
    opacity: 0;
    width: 100%;
    height: 100%;  
  }

  .textoInput{
    margin-top:-22px;
    text-align: center;
  }

  .anchoInput{
    width:160px;
  }

</style>
<script type="text/javascript">

function validarExt()
{
    var archivo = document.getElementById('archivo');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.xlsx)$/i;
    
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegurese de haber seleccionado un archivo de extension xlsx');
        archivo.value = '';
        return false;
    }
}
  </script>

<section class="content-header">
  <h2>
    <i class="fa fa-sign-in icon-title"></i> Control de Vehiculos
     
    <form action="database/excel_to_mysql_control_vehiculos.php" method="POST" enctype="multipart/form-data">
      <button class="btn btn-primary pull-right botones" title="Importar" name="archivo" data-toggle="tooltip">Importar</button>

      <a class="btn btn-primary btn-social pull-right botones anchoInput" title="Cargar archivo" data-toggle="tooltip">      
          <i class="fa fa-file-excel-o"></i>        
          <input method="post" type="file" id = "archivo" name="archivo" onchange="return validarExt()">   
          <div class="textoInput">
            Cargar Archivo
          </div>       
      </a>
 

      <a class="btn btn-primary btn-social pull-right botones" href="?module=form_transaccion_equipos_vehiculos&form=add" title="Agregar" data-toggle="tooltip">
        <i class="fa fa-plus"></i> Entradas / Salidas
      </a>

    </form>
  </h2>
 <br/> 
</section>
<br/>

<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 

    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos registrados correctamente.
            </div>";
    } elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> por favor seleccione el archivo que desea importar.</h4>
            </div>";
    } elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos importados correctamente.
            </div>";
    }
    
    ?>

      <div class="box box-primary">
        <div class="box-body">
         
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
           
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">TRANSACCION</th>
                <th class="center">TIPO</th>
                <th class="center">CODIGO</th>
                <th class="center">TIPO DE VEHICULO</th>
                <th class="center">PLACA</th>
                <th class="center">CONDICION</th>
                <th class="center">MOTIVO</th>
                <th class="center">ENTREGA</th>
				        <th class="center">CEDULA</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>
                <th class="center">RECIBE</th>
                <th class="center">CEDULA </th>
                <th class="center">SEDE</th>
                <th class="center">EMPRESA</th>
                <th class="center">FECHA</th>
                
                
              </tr>
            </thead>
         
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion, a.codigo,b.codigo,a.motivo,a.created_date,b.tipo, a.codigo,a.entrega, a.empresa_r, a.cedula_e, a.recibe, a.empresa, a.cedula_r, a.lugar_e, a.lugar_r, b.placa, b.marca, b.condicion
                                            FROM transaccion_equipos_vehiculos as a INNER JOIN vehiculos as b ON a.codigo=b.codigo  ORDER BY codigo_transaccion DESC")
                                            or die('error '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
             /* $fecha         = $data['created_date'];
              $exp             = explode('-',$fecha);
              $fecha2   = $exp[2]."-".$exp[1]."-".$exp[0];*/

             
              echo "<tr>
                      <td width='50' class='center'>$no</td>
                      <td width='100' class='center'>$data[codigo_transaccion]</td>
                      <td width='100' class='center'>$data[tipo_transaccion]</td>
                      <td width='100' class='center'>$data[codigo]</td>
                      <td width='100' class='center'>$data[tipo]</td>
                      <td width='100' class='center'>$data[placa]</td>
                      <td width='100' class='center'>$data[condicion]</td>
                      <td width='100' class='center'>$data[motivo]</td>
                      <td width='100' class='center'>$data[entrega]</td>
                      <td width='100' class='center'>$data[cedula_e]</td>
                      <td width='100' class='center'>$data[lugar_e]</td>
                      <td width='100' class='center'>$data[empresa]</td>
                      <td width='100' class='center'>$data[recibe]</td>
                      <td width='100' class='center'>$data[cedula_r]</td>
                      <td width='100' class='center'>$data[lugar_r]</td>
                      <td width='100' class='center'>$data[empresa_r]</td>
                      <td width='100' class='center'>$data[created_date]</td>
                    
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content