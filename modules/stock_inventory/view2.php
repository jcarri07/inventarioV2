<script src="js/alertifyjs/alertify.js"></script>
<script type="text/javascript">

  function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
      return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
  }

  function validaNumericos(event) {

    var string;

    if (event.charCode >= 48 && event.charCode <= 57) {
      return true;
    }
    return false;
  }

  $('.tab-submit').on('click', function() {

    var data = $(this).attr('href');

    $('.tab-pane').parent('li').removeClass('active');
    $('li a[href^="' + data + '"]').parent('li').addClass('active');

    $('tab-pane').removeClass('active');
    $(data).addClass("active");

    alert(data);
    alert(prev);
  })
</script>

<section class="content-header">
  <h1>
    <i class="fa fa-edit icon-title"></i> Reportes
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
    <li><a href="?module=inventario"> Agregar </a></li>
    <li class="active"> Más </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div role="tabpanel">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#comunicacion" aria-controls="" data-toggle="tab" role="tab">Comunicación</a></li>
            <li role="presentation"><a href="#mobiliario" aria-controls="" data-toggle="tab" role="tab">Mobiliario</a></li>
            <li role="presentation"><a href="#refrigeracion" aria-controls="" data-toggle="tab" role="tab">Electrodomésticos</a></li>
            <li role="presentation"><a href="#cientificos" aria-controls="" data-toggle="tab" role="tab">Electrónicos</a></li>
            <li role="presentation"><a href="#seguridad" aria-controls="" data-toggle="tab" role="tab">Seguridad</a></li>
            <li role="presentation"><a href="#biblioteca" aria-controls="" data-toggle="tab" role="tab">Biblioteca</a></li>
            <li role="presentation"><a href="#vehiculos" aria-controls="" data-toggle="tab" role="tab">Vehiculos</a></li>
            <li role="presentation"><a href="#inmuebles" aria-controls="" data-toggle="tab" role="tab">Inmuebles</a></li>
          </ul>

          <!-- COMUNICACION -->

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="comunicacion">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="POST" action="modules/stock_inventory/print_filter.php" target="_blank">
                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_comunicacion" type="text" name="filtrado" id="f_comu" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items_comunicacion">
                              <option value=""></option>
                              <option value="descripcion"></option>
                              <option value="codigo"></option>
                              <option value="condicion"></option>
                              <option value="marca"></option>
                              <option value="serial"></option>
                              <option value="modelo"></option>
                              <option value="bienesN"></option>
                              <option value="cedula"></option>
                              <option value="ubicacion"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items" type="text" name="filtrado2" id="f_comu2" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3" id="f_comu3" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="cbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="cbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro" id="filtro" value="" placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">SERIAL</th>
                                <th class="center">DESCRIPCION</th>
                                <th class="center">MARCA</th>
                                <th class="center">MODELO</th>
                                <th class="center">COLOR</th>
                                <th class="center">N_BIEN</th>
                                <th class="center">CONDICION</th>
                                <th class="center">DIRECCION/UNIDAD</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">CEDULA</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">PERTENECE</th>
                                <th class="center">QR
                                </th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria='Comunicacion' ORDER BY codigo ASC ")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                $precio_compra = format_rupiah($data['precio_compra']);
                                $precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[serial]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[marca]</td>
                                  <td width='90' class='center'>$data[modelo]</td>
                                  <td width='90' class='center'>$data[color]</td>
                                  <td width='90' class='center'>$data[bienesN]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[unidad]</td>
                                  <td width='130' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[pertenece]</td>
                                  <td class='center'  width='100'>
                                  <div>
  
                    <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                          <i id='$data[serial]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                    </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                  </div> <!-- /.row -->

                </div><!-- /.box body -->
              </form>
            </div>

          <!--MOBILIARIO-->

            <div role="tabpanel" class="tab-pane" id="mobiliario">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_mobiliario.php" method="POST" target="_blank">
                <div class="box-body">
                  <form name="formulario" method="post" action="modules/stock_inventory/print_filter_mobiliario.php" target="_blank">
                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items" type="text" name="filtrado_mobi" id="do" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items">
                              <option value=""></option>
                              <option value="descripcion"></option>
                              <option value="codigo"></option>
                              <option value="condicion"></option>
                              <option value="marca"></option>
                              <option value="serial"></option>
                              <option value="modelo"></option>
                              <option value="bienesN"></option>
                              <option value="cedula"></option>
                              <option value="ubicacion"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items" type="text" name="filtrado2_mobi" id="do2" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3_mobi" id="do3" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="mbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="mbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro_mobi" id="mfiltro" value="" placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro2_mobi" id="mfiltro2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro3_mobi" id="mfiltro3" value="" placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">
                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_mobiliario.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>
                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">SERIAL</th>
                                <th class="center">DESCRIPCION</th>
                                <th class="center">MARCA</th>
                                <th class="center">MODELO</th>
                                <th class="center">COLOR</th>
                                <th class="center">N_BIEN</th>
                                <th class="center">CONDICION</th>
                                <th class="center">DIREC/UNIDAD</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">CEDULA</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">PERTENECE</th>
                                <th class="center">EDITAR</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria LIKE 'Mobiliario' ORDER BY codigo ASC ")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                $precio_compra = format_rupiah($data['precio_compra']);
                                $precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[serial]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[marca]</td>
                                  <td width='90' class='center'>$data[modelo]</td>
                                  <td width='90' class='center'>$data[color]</td>
                                  <td width='90' class='center'>$data[bienesN]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[unidad]</td>
                                  <td width='130' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[pertenece]</td>
                      
                  
                                <td class='center'  width='100'>
                                    <div>
            
                                <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                      <i id='$data[serial]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                                </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                </div> <!-- /.row -->
              </div>
            </form>
          </div>

          <!--ELECTRODOMESTICOS-->

            <div role="tabpanel" class="tab-pane" id="refrigeracion">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_refrigeracion.php" method="POST" target="_blank" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_filter_refrigeracion.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items" type="text" name="filtrado_refri" id="ado" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items">
                              <option value=""></option>
                              <option value="descripcion"></option>
                              <option value="codigo"></option>
                              <option value="condicion"></option>
                              <option value="marca"></option>
                              <option value="serial"></option>
                              <option value="modelo"></option>
                              <option value="bienesN"></option>
                              <option value="cedula"></option>
                              <option value="ubicacion"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items" type="text" name="filtrado2_refri" id="ado2" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3_refri" id="ado3" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="rbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="rbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro_refri" id="rfiltro" value="" placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro2_refri" id="rfiltro2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro3_refri" id="rfiltro3" value=""  placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_refrigeracion.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">SERIAL</th>
                                <th class="center">DESCRIPCION</th>
                                <th class="center">MARCA</th>
                                <th class="center">MODELO</th>
                                <th class="center">COLOR</th>
                                <th class="center">N_BIEN</th>
                                <th class="center">CONDICION</th>
                                <th class="center">DIREC/UNIDAD</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">CEDULA</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">PERTENECE</th>
                                <th class="center">EDITAR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;
                              $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria= 'Electrodomesticos' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                $precio_compra = format_rupiah($data['precio_compra']);
                                $precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[serial]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[marca]</td>
                                  <td width='60' class='center'>$data[modelo]</td>
                                  <td width='60' class='center'>$data[color]</td>
                                  <td width='60' class='center'>$data[bienesN]</td>
                                  <td width='70' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[unidad]</td>
                                  <td width='100' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[pertenece]</td>
                                <td class='center'  width='100'>
                                    <div>
                                <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                      <i id='$data[serial]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                                </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                  </div> <!-- /.row -->
                </div>
              </form>
            </div>

            <!--ELECTRONICOS-->

            <div role="tabpanel" class="tab-pane" id="cientificos">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_electronicos.php" method="POST" target="_blank">
                <div class="box-body">
                  <form name="formulario" method="post" action="modules/stock_inventory/print_filter_electronicos.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items" type="text" name="filtrado_elect" id="rado" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items">
                              <option value=""></option>
                              <option value="descripcion"></option>
                              <option value="codigo"></option>
                              <option value="condicion"></option>
                              <option value="marca"></option>
                              <option value="serial"></option>
                              <option value="modelo"></option>
                              <option value="bienesN"></option>
                              <option value="cedula"></option>
                              <option value="ubicacion"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items" type="text" name="filtrado2_elect" id="rado2" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3_elect" id="rado3" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="ebtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="ebtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro_elect" value=""  placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro_elect2" id="efiltro2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro_elect3" id="efiltro3" value="" placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_electronicos.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">SERIAL</th>
                                <th class="center">DESCRIPCION</th>
                                <th class="center">MARCA</th>
                                <th class="center">MODELO</th>
                                <th class="center">COLOR</th>
                                <th class="center">N_BIEN</th>
                                <th class="center">CONDICION</th>
                                <th class="center">DIREC/UNIDAD</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">CEDULA</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">PERTENECE</th>
                                <th class="center">EDITAR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;
                              $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria = 'Electronicos' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                $precio_compra = format_rupiah($data['precio_compra']);
                                $precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[serial]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[marca]</td>
                                  <td width='90' class='center'>$data[modelo]</td>
                                  <td width='90' class='center'>$data[color]</td>
                                  <td width='90' class='center'>$data[bienesN]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[unidad]</td>
                                  <td width='130' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[pertenece]</td>
                                <td class='center'  width='100'>
                                  <div>

                                <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                      <i id='$data[serial]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                                </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                  </div> <!-- /.row -->
                </div>
              </form>
            </div>

            <!--SEGURIDAD-->

            <div role="tabpanel" class="tab-pane" id="seguridad">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_seguridad.php" method="POST" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_filter_seguridad.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items" type="text" name="filtrado_sec" id="trado" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items">
                              <option value=""></option>
                              <option value="descripcion"></option>
                              <option value="codigo"></option>
                              <option value="condicion"></option>
                              <option value="marca"></option>
                              <option value="serial"></option>
                              <option value="modelo"></option>
                              <option value="bienesN"></option>
                              <option value="cedula"></option>
                              <option value="ubicacion"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items" type="text" name="filtrado2_sec" id="trado2" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3_sec" id="trado3" placeholder="-- Especificar --" autocomplete="off" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="sbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="sbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro_sec" value="" placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="filtro2_sec" id="sfiltro2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="filtro3_sec" id="sfiltro3" value="" placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_seguridad.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables1" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">SERIAL</th>
                                <th class="center">DESCRIPCION</th>
                                <th class="center">MARCA</th>
                                <th class="center">MODELO</th>
                                <th class="center">COLOR</th>
                                <th class="center">N_BIEN</th>
                                <th class="center">CONDICION</th>
                                <th class="center">DIREC/UNIDAD</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">CEDULA</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">PERTENECE</th>
                                <th class="center">EDITAR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;
                              $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria='Seguridad' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                $precio_compra = format_rupiah($data['precio_compra']);
                                $precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[serial]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[marca]</td>
                                  <td width='90' class='center'>$data[modelo]</td>
                                  <td width='90' class='center'>$data[color]</td>
                                  <td width='90' class='center'>$data[bienesN]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[unidad]</td>
                                  <td width='130' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[pertenece]</td>
                                <td class='center'  width='100'>
                                  <div>

                                <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                      <i id='$data[serial]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                                </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                  </div> <!-- /.row -->

                </div>
              </form>
            </div>

            <!--BIBLIOTECA-->

            <div role="tabpanel" class="tab-pane" id="biblioteca">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_biblioteca.php" method="POST" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_biblioteca.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_biblioteca" type="text" name="filtrado_biblioteca" id="filtrado_biblioteca" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items_biblioteca">
                              <option value=""></option>
                              <option value="titulo"></option>
                              <option value="codigo"></option>
                              <option value="isbn"></option>
                              <option value="bienesN"></option>
                              <option value="autor"></option>
                              <option value="tipo"></option>
                              <option value="color"></option>
                              <option value="editorial"></option>
                              <option value="codicion"></option>
                              <option value="ubicacion"></option>
                              <option value="responsable"></option>
                              <option value="cedula"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca2" id="f2" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca3" id="f3" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="bbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="bbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="fb" value="" placeholder="-- Filtro 1 --" ></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="fb2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="fb3" value="" placeholder="-- Filtro 3 --" ></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_biblioteca.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
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
                                <th class="center">EDITAR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM biblioteca WHERE categoria= 'Biblioteca' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[tipo]</td>
                                  <td width='90' class='center'>$data[titulo]</td>
                                  <td width='90' class='center'>$data[autor]</td>
                                  <td width='90' class='center'>$data[editorial]</td>
                                  <td width='90' class='center'>$data[cantidad]</td>
                                  <td width='50' class='center'>$data[isbn]</td>
                                  <td width='50' class='center'>$data[bienesN]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='50' class='center'>$data[responsable]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[color]</td>           
                                  <td class='center'  width='100'>
                                <div>
      
                              <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                    <i id='$data[codigo]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                              </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                  </div> <!-- /.row -->

                </div>
              </form>
            </div>

            <!--VEHICULOS-->
            
            <div role="tabpanel" class="tab-pane" id="vehiculos">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_vehiculos.php" method="POST" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_vehiculos.php" target="_blank">
                    <table id="dataTables_vehiculos" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_vehiculos" type="text" name="filtrado_vehiculos" id="filtrado_vehiculos" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items_vehiculos">
                              <option value=""></option>
                              <option value="tipo"></option>
                              <option value="codigo"></option>
                              <option value="marca"></option>
                              <option value="modelo"></option>
                              <option value="placa"></option>
                              <option value="color"></option>
                              <option value="nmroCarroceria"></option>
                              <option value="sede"></option>
                              <option value="tipoCombustible"></option>
                              <option value="condicion"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items_vehiculos" type="text" name="filtrado_vehiculos2" id="filtrado_vehiculos2" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items_vehiculos" type="text" name="filtrado_vehiculos3" id="filtrado_vehiculos3" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="vbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="vbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="fv" value="" placeholder="-- Filtro 1 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="fv2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="fv3" value="" placeholder="-- Filtro 3 --"></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_vehiculos.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>
                          </br>
                          <table id="dataTables_vehiculos" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                                <th class="center">No.</th>
                                <th class="center">CODIGO</th>
                                <th class="center">MARCA</th>
                                <th class="center">TIPO</th>
                                <th class="center">MODELO</th>
                                <th class="center">PLACA</th>
                                <th class="center">COLOR</th>
                                <th class="center">TIPO COMBUSTIBLE</th>
                                <th class="center">Nº CARROCERIA</th>
                                <th class="center">CONDICION</th>
                                <th class="center">UNIDAD</th>
                                <th class="center">UBICACION</th>
                                <th class="center">SEDE</th>
                                <th class="center">RESPONSABLE</th>
                                <th class="center">EDITAR</th>

                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;
                              $query = mysqli_query($mysqli, "SELECT * FROM vehiculos WHERE categoria= 'Vehiculos' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {
                                //$precio_compra = format_rupiah($data['precio_compra']);
                                //$precio_venta = format_rupiah($data['precio_venta']);

                                echo "<tr>
                                  <td width='20' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='80' class='center'>$data[marca]</td>
                                  <td width='80' class='center'>$data[tipo]</td>
                                  <td width='80' class='center'>$data[modelo]</td>
                                  <td width='80' class='center'>$data[placa]</td>
                                  <td width='80' class='center'>$data[color]</td>
                                  <td width='50' class='center'>$data[tipoCombustible]</td>
                                  <td width='80' class='center'>$data[nmroCarroceria]</td>
                                  <td width='50' class='center'>$data[condicion]</td>
                                  <td width='80' class='center'>$data[unidad]</td>
                                  <td width='90' class='center'>$data[ubicacion]</td>
                                  <td width='90' class='center'>$data[sede]</td>
                                  <td width='90' class='center'>$data[responsable]</td>
                                <td class='center'  width='100'>
                                    <div>
                                <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                      <i id='$data[codigo]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                                </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                </div> 
              </div>
            </form>
          </div>

            <!--INMUEBLES-->

            <div role="tabpanel" class="tab-pane" id="inmuebles">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_inmuebles.php" method="POST" target="_blank">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_inmuebles.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_inmuebles" type="text" name="filtrado_inmuebles" id="filtrado_inmuebles" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false" onkeypress="return false" autocomplete="off">
                            <datalist id="items_inmuebles">
                              <option value=""></option>
                              <option value="titulo"></option>
                              <option value="codigo"></option>
                              <option value="isbn"></option>
                              <option value="bienesN"></option>
                              <option value="autor"></option>
                              <option value="tipo"></option>
                              <option value="color"></option>
                              <option value="editorial"></option>
                              <option value="codicion"></option>
                              <option value="ubicacion"></option>
                              <option value="responsable"></option>
                              <option value="cedula"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca2" id="f2" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca3" id="f3" placeholder="-- Especificar --" onpaste="return false" onkeypress="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="bbtn_o">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" id="bbtn_v">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="fb" value="" placeholder="-- Filtro 1 --" ></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="fb2" value="" placeholder="-- Filtro 2 --"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="fb3" value="" placeholder="-- Filtro 3 --" ></th>
                          <th class="center"><input class="btn btn-primary" type="reset" value="Limpiar" /></th>
                          <th class="center"><input class="btn btn-primary" type="submit" value="Filtrar" /></th>
                          </th>
                        </tr>
                      </thead>
                      </tr>
                    </table>
                  </form>
                  </br>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="box box-primary">
                        <div class="box-body" id="contenido">

                          <section>
                            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_inmuebles.php" target="_blank">
                              <i class="fa fa-print"></i> Imprimir
                            </a>
                            </br>
                          </section>

                          <table id="dataTables2" class="table table-bordered table-striped table-hover">
                            <thead>
                              <tr>
                              <th class="center">No.</th>
                              <th class="center">CODIGO</th>
                              <th class="center">TIPO</th>
                              <th class="center">DESCRIPCION</th>
                              <th class="center">M²</th>
                              <th class="center">Nº PISOS</th>
                              <th class="center">Nº CUARTOS</th>
                              <th class="center">Nº HABITANTES</th>
                              <th class="center">DIRECCION</th>
                              <th class="center">CONDICION</th>
                              <th class="center">RESPONSABLE</th>
                              <th class="center">CEDULA</th>
                              <th class="center">SEDE</th>
                              <th class="center">EDITAR</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE categoria= 'inmuebles' ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {

                                echo "<tr>
                                  <td width='30' class='center'>$no</td>
                                  <td width='50' class='center'>$data[codigo]</td>
                                  <td width='90' class='center'>$data[tipo]</td>
                                  <td width='90' class='center'>$data[descripcion]</td>
                                  <td width='90' class='center'>$data[metrosCuadrados]</td>
                                  <td width='90' class='center'>$data[pisos]</td>
                                  <td width='90' class='center'>$data[nmroCuartos]</td>
                                  <td width='50' class='center'>$data[habitantes]</td>
                                  <td width='50' class='center'>$data[direccion]</td>
                                  <td width='90' class='center'>$data[condicion]</td>
                                  <td width='90' class='center'>$data[responsable]</td>
                                  <td width='50' class='center'>$data[cedula]</td>
                                  <td width='90' class='center'>$data[sede]</td>         
                                  <td class='center'  width='100'>
                                <div>
      
                              <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                                    <i id='$data[codigo]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
                              </a>";

                                $no++;
                              }
                              ?>
                            </tbody>
                          </table>
                        </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div>
                    <!--/.col -->
                  </div> <!-- /.row -->

                </div>
              </form>
            </div>





        </div>
      </div>
    </div>
  </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="text-align : center;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">QR</h4>
          </div>
          <div id="cuerpoModal" style="text-align : center;">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

</section><!-- /.content-->

<script src="assets/js/datatables.min.js" type="text/javascript"></script>

<script name="filtros_Comunicacion" type="text/javascript">
  // COMUNICACION

  //SELECCION DEL FILTRO
  var elementos = [elemento = document.getElementById("f_comu2"), elemento2 = document.getElementById("f_comu3")];
  
  //INPUT DEL FILTRO
  var elementos2 = [element = document.getElementById("filtro2"), element2 = document.getElementById("filtro3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("cbtn_o");
  btn_visible = document.getElementById("cbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (elementos.length > 1) {
      elementos2[1].style.display = 'none';
      elementos[1].style.display = 'none';
      elementos[1].value = "";
      elementos2[1].value = "";
      var ultimo = elementos.pop();
      var ultimox = elementos2.pop();

    } else if (elementos.length == 1) {
      elementos2[0].style.display = 'none';
      elementos[0].style.display = 'none';
      elementos[0].value = "";
      elementos2[0].value = "";
      var ultimo = elementos.pop();
      var ultimox = elementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (elementos.length < 1) {
      elementos.push(elemento);
      elementos2.push(element);
      elementos[0].style.display = '';
      elementos2[0].style.display = '';

    } else if (elementos.length < 2) {
      elementos.push(elemento2);
      elementos2.push(element2);
      elementos[1].style.display = '';
      elementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Mobiliario"type="text/javascript">
  // MOBILIARIO

  //SELECCION DEL FILTRO
  var melementos = [melemento = document.getElementById("do2"), melemento2 = document.getElementById("do3")];
  
  //INPUT DEL FILTRO
  var melementos2 = [melement = document.getElementById("mfiltro2"), melement2 = document.getElementById("mfiltro3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("mbtn_o");
  btn_visible = document.getElementById("mbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (melementos.length > 1) {
      melementos2[1].style.display = 'none';
      melementos[1].style.display = 'none';
      melementos[1].value = "";
      melementos2[1].value = "";
      var ultimo = melementos.pop();
      var ultimox = melementos2.pop();

    } else if (melementos.length == 1) {
      melementos2[0].style.display = 'none';
      melementos[0].style.display = 'none';
      melementos[0].value = "";
      melementos2[0].value = "";
      var ultimo = melementos.pop();
      var ultimox = melementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (melementos.length < 1) {
      melementos.push(melemento);
      melementos2.push(melement);
      melementos[0].style.display = '';
      melementos2[0].style.display = '';

    } else if (melementos.length < 2) {
      melementos.push(melemento2);
      melementos2.push(melement2);
      melementos[1].style.display = '';
      melementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Refrigeracion"type="text/javascript">
  // REFRIGERACION

  //SELECCION DEL FILTRO
  var rmelementos = [rmelemento = document.getElementById("ado2"), rmelemento2 = document.getElementById("ado3")];
  
  //INPUT DEL FILTRO
  var rmelementos2 = [rmelement = document.getElementById("rfiltro2"), rmelement2 = document.getElementById("rfiltro3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("rbtn_o");
  btn_visible = document.getElementById("rbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (rmelementos.length > 1) {
      rmelementos2[1].style.display = 'none';
      rmelementos[1].style.display = 'none';
      rmelementos[1].value = "";
      rmelementos2[1].value = "";
      var ultimo = rmelementos.pop();
      var ultimox = rmelementos2.pop();

    } else if (rmelementos.length == 1) {
      rmelementos2[0].style.display = 'none';
      rmelementos[0].style.display = 'none';
      rmelementos[0].value = "";
      rmelementos2[0].value = "";
      var ultimo = rmelementos.pop();
      var ultimox = rmelementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (rmelementos.length < 1) {
      rmelementos.push(rmelemento);
      rmelementos2.push(rmelement);
      rmelementos[0].style.display = '';
      rmelementos2[0].style.display = '';

    } else if (rmelementos.length < 2) {
      rmelementos.push(rmelemento2);
      rmelementos2.push(rmelement2);
      rmelementos[1].style.display = '';
      rmelementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Cientificos"type="text/javascript">
  // CIENTIFICOS

  //SELECCION DEL FILTRO
  var ermelementos = [ermelemento = document.getElementById("rado2"), ermelemento2 = document.getElementById("rado3")];
  
  //INPUT DEL FILTRO
  var ermelementos2 = [ermelement = document.getElementById("efiltro2"), ermelement2 = document.getElementById("efiltro3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("ebtn_o");
  btn_visible = document.getElementById("ebtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (ermelementos.length > 1) {
      ermelementos2[1].style.display = 'none';
      ermelementos[1].style.display = 'none';
      ermelementos[1].value = "";
      ermelementos2[1].value = "";
      var ultimo = ermelementos.pop();
      var ultimox = ermelementos2.pop();

    } else if (ermelementos.length == 1) {
      ermelementos2[0].style.display = 'none';
      ermelementos[0].style.display = 'none';
      ermelementos[0].value = "";
      ermelementos2[0].value = "";
      var ultimo = ermelementos.pop();
      var ultimox = ermelementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (ermelementos.length < 1) {
      ermelementos.push(ermelemento);
      ermelementos2.push(ermelement);
      ermelementos[0].style.display = '';
      ermelementos2[0].style.display = '';

    } else if (ermelementos.length < 2) {
      ermelementos.push(ermelemento2);
      ermelementos2.push(ermelement2);
      ermelementos[1].style.display = '';
      ermelementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Seguridad"type="text/javascript">
  // SEGURIDAD

  //SELECCION DEL FILTRO
  var sermelementos = [sermelemento = document.getElementById("trado2"), sermelemento2 = document.getElementById("trado3")];
  
  //INPUT DEL FILTRO
  var sermelementos2 = [sermelement = document.getElementById("sfiltro2"), sermelement2 = document.getElementById("sfiltro3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("sbtn_o");
  btn_visible = document.getElementById("sbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (sermelementos.length > 1) {
      sermelementos2[1].style.display = 'none';
      sermelementos[1].style.display = 'none';
      sermelementos[1].value = "";
      sermelementos2[1].value = "";
      var ultimo = sermelementos.pop();
      var ultimox = sermelementos2.pop();

    } else if (sermelementos.length == 1) {
      sermelementos2[0].style.display = 'none';
      sermelementos[0].style.display = 'none';
      sermelementos[0].value = "";
      sermelementos2[0].value = "";
      var ultimo = sermelementos.pop();
      var ultimox = sermelementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (sermelementos.length < 1) {
      sermelementos.push(sermelemento);
      sermelementos2.push(sermelement);
      sermelementos[0].style.display = '';
      sermelementos2[0].style.display = '';

    } else if (sermelementos.length < 2) {
      sermelementos.push(sermelemento2);
      sermelementos2.push(sermelement2);
      sermelementos[1].style.display = '';
      sermelementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Biblioteca"type="text/javascript">
  // BIBLIOTECA

  //SELECCION DEL FILTRO
  var bsermelementos = [bsermelemento = document.getElementById("f2"), bsermelemento2 = document.getElementById("f3")];
  
  //INPUT DEL FILTRO
  var bsermelementos2 = [bsermelement = document.getElementById("fb2"), bsermelement2 = document.getElementById("fb3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("bbtn_o");
  btn_visible = document.getElementById("bbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (bsermelementos.length > 1) {
      bsermelementos2[1].style.display = 'none';
      bsermelementos[1].style.display = 'none';
      bsermelementos[1].value = "";
      bsermelementos2[1].value = "";
      var ultimo = bsermelementos.pop();
      var ultimox = bsermelementos2.pop();

    } else if (bsermelementos.length == 1) {
      bsermelementos2[0].style.display = 'none';
      bsermelementos[0].style.display = 'none';
      bsermelementos[0].value = "";
      bsermelementos2[0].value = "";
      var ultimo = bsermelementos.pop();
      var ultimox = bsermelementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (bsermelementos.length < 1) {
      bsermelementos.push(bsermelemento);
      bsermelementos2.push(bsermelement);
      bsermelementos[0].style.display = '';
      bsermelementos2[0].style.display = '';

    } else if (bsermelementos.length < 2) {
      bsermelementos.push(bsermelemento2);
      bsermelementos2.push(bsermelement2);
      bsermelementos[1].style.display = '';
      bsermelementos2[1].style.display = '';     
  }})
</script>

<script name="filtros_Vehiculos"type="text/javascript">
  // VEHICULOS

  //SELECCION DEL FILTRO
  var vbsermelementos = [vbsermelemento = document.getElementById("filtrado_vehiculos2"), vbsermelemento2 = document.getElementById("filtrado_vehiculos3")];
  
  //INPUT DEL FILTRO
  var vbsermelementos2 = [vbsermelement = document.getElementById("fv2"), vbsermelement2 = document.getElementById("fv3")];
  
  //BOTONES PARA OCULTAR Y !OCULTAR
  btn_ocultar = document.getElementById("vbtn_o");
  btn_visible = document.getElementById("vbtn_v"); 
  
  //FUNCION PARA OCULTAR
  btn_ocultar.addEventListener("click",()=>{
    if (vbsermelementos.length > 1) {
      vbsermelementos2[1].style.display = 'none';
      vbsermelementos[1].style.display = 'none';
      vbsermelementos[1].value = "";
      vbsermelementos2[1].value = "";
      var ultimo = vbsermelementos.pop();
      var ultimox = vbsermelementos2.pop();

    } else if (vbsermelementos.length == 1) {
      vbsermelementos2[0].style.display = 'none';
      vbsermelementos[0].style.display = 'none';
      vbsermelementos[0].value = "";
      vbsermelementos2[0].value = "";
      var ultimo = vbsermelementos.pop();
      var ultimox = vbsermelementos2.pop();
    }
  })

  //FUNCION PARA !OCULTAR
  btn_visible.addEventListener("click", ()=>{
    if (vbsermelementos.length < 1) {
      vbsermelementos.push(vbsermelemento);
      vbsermelementos2.push(vbsermelement);
      vbsermelementos[0].style.display = '';
      vbsermelementos2[0].style.display = '';

    } else if (vbsermelementos.length < 2) {
      vbsermelementos.push(vbsermelemento2);
      vbsermelementos2.push(vbsermelement2);
      vbsermelementos[1].style.display = '';
      vbsermelementos2[1].style.display = '';     
  }})
</script>

<script>
  
  //document.getElementById("contenido");
  var qr = document.getElementById("contenido");
  console.log(qr);
  var cuerpo = $('#cuerpoModal');

  qr.addEventListener("click",
    function(e) {

      if (e.target.id == "qr") {
        //console.log(qr);
        console.log("HOlaaaaaaaaaa");
        //console.log(e.target.firstChild.nextSibling.id);
        serial = e.target.firstChild.nextSibling.id;
        //console.log(e.target);
        var parametros = {
          "textqr": serial,
          "sizeqr": 300
        };
        $.ajax({
          type: "POST",
          dataType: "html",
          url: "modules/generateQr/qrModal.php",
          data: parametros,
          //success: function(datos){
          //console.log(cuerpo);
          //cuerpo.html(datos);
          //$(".result").html(datos);
          //console.log(datos);
          //}

        }).done(function(data) {
          cuerpo.html(data);
        })
      }
    }
  );

  $("#qr").click(function(event) {
    console.log("HOLAaaaaaa");
    /*var textqr=$("#textqr").val();
    var sizeqr=$("#sizeqr").val();
    parametros={"textqr":textqr,"sizeqr":sizeqr};*/
    /*$.ajax({
				type: "POST",
				url: "qr.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
				 
			 })
			
		  event.preventDefault();*/
  });
</script>