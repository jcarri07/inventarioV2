<!-- Content Header (Page header) -->
<section class="content-header">
  <h2>
    <i class="fa fa-file-text-o icon-title"></i>Control de movimientos de equipos
  </h2>
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

      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.conten -->
