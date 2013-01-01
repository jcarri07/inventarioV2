<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i>Control de movimientos de equipos
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">Informe</li>
    <li class="active"> Control de movimientos</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      
      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="GET" action="modules/stock_report/print.php" target="_blank">
          <div class="box-body">

            <div class="form-group">
              <label class="col-sm-1">Fecha</label>
              <div class="col-sm-2">
                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal" autocomplete="off" required>
              </div>

              <label class="col-sm-1">Hasta</label>
              <div class="col-sm-2">
                <input style="margin-left:-35px" type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" Onchange="consulta()" name="tgl_akhir" autocomplete="off" required>
              </div>
            </div>
        
          
          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>
          
        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->


    <section class="content">
      <div class="row">
       <div class="col-md-12">
    
        <div class="box box-primary">
        <div class="box-body">
              <div class="form-group">
              <label class="col-sm-1">Filtrar por:</label>
      
          <form name="formulario" method="post" action="modules/stock_report/print_filter_report.php" target="_blank">
          <div class="form-group input-group-sm" >
            <div class="col-sm-2">
                  <select class="chosen-select" name="filtrar" id="filtrar" data-placeholder="-- Especifique --" autocomplete="off" required="true">
                    <option value=""></option>
                    <option value="codigo_transaccion">Cod. Transaccion</option>
                    <option value="tipo_transaccion">Tipo. Transaccion</option>
                    <option value="cedula_e">Cedula Resp. entrega</option>
                    <option value="cedula_r">Cedula Resp. recibe</option>
                    <option value="created_date">Fecha (AAAA-MM-DD)</option>
                    <option value="codigo">Codigo</option>
                    <option value="motivo">Motivo</option>
                    <option value="empresa">Empresa</option>
              
                  </select>
            </div>
          </div>
                <!--<input class="col-mb-3 control-label" type="text" name="nombre" value="" placeholder="">-->
                <div class="col-sm-2" >
                  <input class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="">
                </div>
                <div class="col-2">
                  <input class="btn btn-primary" href="modules/stock_report/print.php" type="submit" value="Filtrar" />
            </div>
       
            </form>
            </div>
        </div>
        </div>
</div>
</div>
</div>
<!-- </section><!-- /.content 

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i>Resultado
  </h1>

</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">

  
      <div class="box box-primary">
        <div class="box-body">

          <table class="table table-bordered table-striped table-hover">
      
            <thead>
            <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>NRO TRANSACCION</small></th>
                        <th height="20" align="center" valign="middle"><small>TIPO </small></th>
                        <th height="20" align="center" valign="middle"><small>COD.</small></th>
                        <th height="20" align="center" valign="middle"><small>EQUIPO</small></th>
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
 
            

         /*  if (isset($_GET['fecha1'])) {
              $no    = 1;
            $query = mysqli_query($mysqli, "SELECT a.tipo_transaccion, a.codigo_transaccion,a.codigo,a.motivo,a.entrega, a.recibe, a.cedula_r, a.cedula_e, a.empresa,a.lugar_e, a.lugar_r, a.created_date,b.codigo,b.descripcion,b.unidad,b.cedula,b.serial
                                    FROM transaccion_medicamentos as a INNER JOIN medicamentos as b ON a.codigo=b.codigo
                                    WHERE a.created_date BETWEEN $fecha1 AND $fecha2
                                    ORDER BY a.codigo_transaccion ASC") 
                                            or die('error: '.mysqli_error($mysqli));
                                            //$count  = mysqli_num_rows($query);
            }
                                     
                                      
                                          else {
                                         
                                              while ($data = mysqli_fetch_assoc($query)) {
                                                 /* $tanggal       = $data['created_date'];
                                                  $exp           = explode('-',$tanggal);
                                                  $fecha = $exp[2]."-".$exp[1]."-".$exp[0];*/
                                      
                                                 /* echo "  <tr>
                                                              <td style='padding-left:5px;'width='25' height='13' align='center' valign='middle'>$no</td>
                                                              <td style='padding-left:5px;'width='100' height='13' align='center' valign='middle'>$data[codigo_transaccion]</td>
                                                              <td style='padding-left:5px;' width='50' height='13' align='center' valign='middle'>$data[tipo_transaccion]</td>
                                                              <td style='padding-left:5px;'width='30' height='13' align='center' valign='middle'>$data[codigo]</td>
                                                              <td style='padding-left:5px;'width='100' height='13' align='center' valign='middle'>$data[descripcion]</td>
                                                              <td style='padding-left:5px;' width='100' height='13' align='center' valign='middle'>$data[motivo]</td>
                                                              <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[entrega]</td>
                                                              <td style='padding-left:5px;' width='60' height='13' align='center' valign='middle'>$data[cedula_e]</td>
                                                              <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[empresa]</td>
                                                              <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[recibe]</td>
                                                              <td style='padding-left:5px;' width='60' height='13' align='center' valign='middle'>$data[cedula_r]</td>
                                                              <td style='padding-left:5px;' width='70' height='13' align='center' valign='middle'>$data[empresa]</td>  
                                                              <td style='padding-left:5px;'width='100' height='13' align='center' valign='middle'>$data[created_date]</td> 
                                                          </tr>";
                                                  $no++;
                                              }
                                          }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.conten -->
