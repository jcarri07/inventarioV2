<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-calendar-o icon-title"></i> Movimientos
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
    <li><a href="?module=stock_report"> Movimientos </a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div role="tabpanel">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#equipos" aria-controls="" data-toggle="tab" role="tab">Equipos Generales</a></li>
            <li role="presentation"><a href="#biblioteca" aria-controls="" data-toggle="tab" role="tab">Biblioteca</a></li>
            <li role="presentation"><a href="#Transporte" aria-controls="" data-toggle="tab" role="tab">Transporte </a></li>
            <li role="presentation"><a href="#inmuebles" aria-controls="" data-toggle="tab" role="tab">Inmuebles </a></li>
          </ul>

          

          <!-- EQUIPOS -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="equipos">
              <!-- form start -->
              <div class="box-body">
                <form name="formulario" method="GET" action="modules/stock_report/print.php" target="_blank">
                  </br>
                  <h4 class="text-center">
                    <i class="fa fa-archive"></i> Equipos Generales
                  </h4>
                  </br> </br>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      </tr>
                      <tr>
                        <th class="center" width='150'>Fecha</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal" placeholder="dd/mm/aaaa" autocomplete="off" required>
                        </th>

                        <th class="center" width='150'>Hasta</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" Onchange="consulta()" placeholder="dd/mm/aaaa" name="tgl_akhir" autocomplete="off" required>
                        </th>
                        <th>
                          <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                            <i class="fa fa-print"></i> Imprimir
                          </button>
                        </th>
                      </tr>
              </div>
            </form>
            </thead>
            </table>

              </br></br>
              <form name="formulario" method="post" action="modules/stock_report/print_filter_report.php" target="_blank">

                <table class="table table-bordered table-striped table-hover">
                
                  <thead>
                    <th class="center" width='150'>Filtrar por</th>
                    <th width='200'>
                      <select class="chosen-select" name="filtrar" id="filtrar" data-placeholder="-- Especificar --" autocomplete="off" required="true">
                        <option value=""></option>
                        <option value="codigo_transaccion">Transacción</option>
                        <option value="tipo_transaccion">Tipo</option>
                        <option value="cedula_e">C.I. Entrega</option>
                        <option value="cedula_r">C.I. Recibe</option>
                        <option value="empresa">Empresa</option>
                      </select>
                    </th>
                    <th>
                      <input class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="">

                    </th>
                    <th> <input style="width: 120px;" class="btn btn-primary  btn-submit" href="modules/stock_report/print_filter_report.php" type="submit" value="Filtrar" />
                    </th>
                    <th width='700'> </th>
              </form>
              </tr>

              </thead>
              </table>
              </br></br>

            </div>
          </div>

          <!--BIBLIOTECA-->
          <div role="tabpanel" class="tab-pane" id="biblioteca">
            <!-- form start -->
              <div class="box-body">
                <form name="formulario" method="GET" action="modules/stock_report/print_biblioteca.php" target="_blank">
                  </br>
                  <h4 class="text-center">
                    <i class="fa fa-book"></i> Biblioteca
                  </h4>
                  </br> </br>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      </tr>
                      <tr>
                        <th class="center" width='150'>Fecha</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal_biblioteca" placeholder="dd/mm/aaaa" autocomplete="off" required>
                        </th>

                        <th class="center" width='150'>Hasta</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" Onchange="consulta()" placeholder="dd/mm/aaaa" name="tgl_akhir_biblioteca" autocomplete="off" required>
                        </th>
                        <th>
                          <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                            <i class="fa fa-print"></i> Imprimir
                          </button>
                        </th>
                      </tr>
              </div>
            </form>
            </thead>
            </table>

            </br></br>
            <form name="formulario" method="POST" action="modules/stock_report/print_filter_biblioteca.php" target="_blank">

              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <th class="center" width='150'>Filtrar por</th>
                  <th width='200'>
                    <select class="chosen-select" name="filtrar_biblioteca" id="filtrar" data-placeholder="-- Especificar --" autocomplete="off" required="true">
                      <option value=""></option>
                      <option value="codigo_transaccion">Transaccion</option>
                      <option value="tipo_transaccion">Tipo</option>
                      <option value="cedula_e">C.I. Entrega</option>
                      <option value="cedula_r">C.I. Recibe</option>
                      <option value="empresa">Empresa</option>
                    </select>
                  </th>
                  <th>
                    <input class="col-mb-2 form-control" type="text" name="nombre_biblioteca" value="" placeholder="">
                  </th>
                  <th> <input style="width: 120px;" class="btn btn-primary  btn-submit" href="modules/stock_report/print_filter_biblioteca.php" type="submit" value="Filtrar" />
                  </th>
                  <th width='700'> </th>

            </form>
            </tr>
            </thead>
            </table>
            </br></br>

          </div>
        </div>


        <!--Transporte-->
        <div role="tabpanel" class="tab-pane" id="Transporte">
          <!-- form start -->
          <div class="box-body">
                <form name="formulario" method="GET" action="modules/stock_report/print_Transporte.php" target="_blank">
                  </br>
                  <h4 class="text-center">
                    <i class="fa fa-car"></i> Transporte
                  </h4>
                  </br> </br>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      </tr>
                      <tr>
                        <th class="center" width='150'>Fecha</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal_Transporte" placeholder="dd/mm/aaaa" autocomplete="off" required>
                        </th>

                        <th class="center" width='150'>Hasta</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" Onchange="consulta()" placeholder="dd/mm/aaaa" name="tgl_akhir_Transporte" autocomplete="off" required>
                        </th>
                        <th>
                          <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                            <i class="fa fa-print"></i> Imprimir
                          </button>
                        </th>
                      </tr>
              </div>
            </form>
            </thead>
            </table>

          </br></br>
          <form name="formulario" method="POST" action="modules/stock_report/print_filter_Transporte.php" target="_blank">

            <table class="table table-bordered table-striped table-hover">
              <thead>
                <th class="center" width='150'>Filtrar por</th>
                <th width='200'>
                  <select class="chosen-select" name="filtrar_Transporte" id="filtrar" data-placeholder="-- Especificar --" autocomplete="off" required="true">
                    <option value=""></option>
                    <option value="codigo_transaccion">Transaccion</option>
                    <option value="tipo_transaccion">Tipo</option>
                    <option value="cedula_e">C.I. Entrega</option>
                    <option value="cedula_r">C.I. Recibe</option>
                    <option value="empresa">Empresa</option>
                  </select>
                </th>

                <th>
                  <input class="col-mb-2 form-control" type="text" name="nombre_Transporte" value="" placeholder="">
                </th>
                <th> <input style="width: 120px;" class="btn btn-primary  btn-submit" href="modules/stock_report/print_filter_Transporte.php" type="submit" value="Filtrar" />
                </th>
                <th width='700'> </th>
          </form>
          </tr>
          </thead>
          </table>
          </br></br>
        </div>
        </form>
      </div>

      <!--INMUEBLES-->
      <div role="tabpanel" class="tab-pane" id="inmuebles">
        <!-- form start -->
        <div class="box-body">
                <form name="formulario" method="GET" action="modules/stock_report/print_inmuebles.php" target="_blank">
                  </br>
                  <h4 class="text-center">
                    <i class="fa fa-home"></i> Inmuebles
                  </h4>
                  </br> </br>
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      </tr>
                      <tr>
                        <th class="center" width='150'>Fecha</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal_inmuebles" placeholder="dd/mm/aaaa" autocomplete="off" required>
                        </th>

                        <th class="center" width='150'>Hasta</th>
                        <th width='200'>
                          <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" Onchange="consulta()" placeholder="dd/mm/aaaa" name="tgl_akhir_inmuebles" autocomplete="off" required>
                        </th>
                        <th>
                          <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                            <i class="fa fa-print"></i> Imprimir
                          </button>
                        </th>
                      </tr>
              </div>
            </form>
            </thead>
            </table>

        </br></br>
        <form name="formulario" method="post" action="modules/stock_report/print_filter_inmuebles.php" target="_blank">

          <table class="table table-bordered table-striped table-hover">
            <thead>
              <th class="center" width='150'>Filtrar por</th>
              <th width='200'>
                <select class="chosen-select" name="filtrar_inmuebles" id="filtrar" data-placeholder="-- Especificar --" autocomplete="off" required="true">
                  <option value=""></option>
                  <option value="codigo_transaccion">Transaccion</option>
                  <option value="tipo_transaccion">Tipo</option>
                  <option value="cedula_e">C.I. Entrega</option>
                  <option value="cedula_r">C.I. Recibe</option>
                  <option value="empresa">Empresa</option>
                </select>
              </th>

              <th>
                <input class="col-mb-2 form-control" type="text" name="nombre_inmuebles" value="" placeholder="">
              </th>
              <th> <input style="width: 120px;" class="btn btn-primary  btn-submit" href="modules/stock_report/print_filter_inmuebles.php" type="submit" value="Filtrar" />
              </th>
              <th width='700'> </th>


        </form>
        </tr>

        </thead>
        </table>
        </br></br>

      </div>
      </form>
    </div>



  </div>
  </div>
  </div>
  </div>

</section><!-- /.content-->