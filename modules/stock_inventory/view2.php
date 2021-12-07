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
  <h2>
    <i class="fa fa-edit icon-title"></i> Reportes
  </h2>
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
            <li role="presentation" class="active"><a href="#comunicacion" aria-controls="" data-toggle="tab" role="tab">Comunicacion</a></li>
            <li role="presentation"><a href="#mobiliario" aria-controls="" data-toggle="tab" role="tab">Mobiliario</a></li>
            <li role="presentation"><a href="#refrigeracion" aria-controls="" data-toggle="tab" role="tab">Electrodomesticos</a></li>
            <li role="presentation"><a href="#cientificos" aria-controls="" data-toggle="tab" role="tab">Electronicos</a></li>
            <li role="presentation"><a href="#seguridad" aria-controls="" data-toggle="tab" role="tab"> Seguridad </a></li>
            <li role="presentation"><a href="#biblioteca" aria-controls="" data-toggle="tab" role="tab">Biblioteca</a></li>
            <li role="presentation"><a href="#vehiculos" aria-controls="" data-toggle="tab" role="tab">Vehiculos </a></li>
            <li role="presentation"><a href="#inmuebles" aria-controls="" data-toggle="tab" role="tab">Inmuebles </a></li>
          </ul>


          <!-- COMUNICACION -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="comunicacion">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST">
                <div class="box-body">

                  <form name="formulario" method="POST" action="modules/stock_inventory/print_filter.php" target="_blank">
                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_comunicacion" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false">
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
                          <th class="center"><input list="items" type="text" name="filtrado2" id="f_comu2" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"><input list="items" type="text" name="filtrado3" id="f_comu3" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="filtro" value="" placeholder="-- Filtro 1 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --" onpaste="return false"></th>
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
                <th class="center">DESCRIPCION</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">Nº BIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
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
                                <td width='90' class='center'>$data[descripcion]</td>
                                <td width='90' class='center'>$data[marca]</td>
                                <td width='90' class='center'>$data[modelo]</td>
                                <td width='90' class='center'>$data[serial]</td>
                                <td width='90' class='center'>$data[bienesN]</td>
                                <td width='90' class='center'>$data[color]</td>
                                <td width='90' class='center'>$data[condicion]</td>
                                <td width='90' class='center'>$data[unidad]</td>
                                <td width='130' class='center'>$data[responsable]</td>
                                <td width='90' class='center'>$data[cedula]</td>
                                <td width='90' class='center'>$data[ubicacion]</td>
                                <td width='90' class='center'>$data[sede]</td>
                                <td width='90' class='center'>$data[pertenece]</td>   
                <td class='center'  width='40'>
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
   </div><!--/.col -->
  </div>   <!-- /.row -->

            </div><!-- /.box body -->
          </form>
    </div>

<!--MOBILIARIO-->
    <div role= "tabpanel" class="tab-pane" id="mobiliario">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST">
            <div class="box-body">
              

            <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">
    <table id="dataTables1" class="table table-bordered table-striped table-hover">     
            <thead>
              <tr>
              <th class="center">
              <input list="items" type="text" name="filtrado" id="do" autocomplete="off" required="true" placeholder="-- Especificar--">
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
                    </datalist></th>
                 <th class="center"><input list="items" type="text" name="filtrado2"  id="do2" placeholder="-- Especificar --" autocomplete="off" >
                <th class="center"><input list="items" type="text" name="filtrado3"  id="do3" placeholder="-- Especificar --" autocomplete="off" >
                <th class="center" > <a  data-toggle="tooltip"   class="btn btn-primary btn-mb"  onclick="javascript:esconde_div('do2','do3');">
                <i style="color:#fff" class="fa fa-minus"></i>
                </th>
                <th class="center" > <a  data-toggle="tooltip" class="btn btn-primary btn-mb"  onclick="javascript:visible_div();">
                <i style="color:#fff" class="fa fa-plus"></i>
                </th>
       
				        <th class="center"> <input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre" id="filtro" value="" placeholder="-- Filtro 1 --"></th>
                <th class="center"><input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre2" id="filtro2" value=""  placeholder="-- Filtro 2 --"></th>
                <th class="center"><input  class="chosen-select" class="col-mb-2 form-control"  type="text" name="nombre3" id="filtro3"  value="" placeholder="-- Filtro 3 --"></th>
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
              <tr>
              <th class="center">No.</th>
              <th class="center">CODIGO</th>
                <th class="center">DESCRIPCION</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">Nº BIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>   
                <th class="center">QR
               
              
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
                    
            $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria LIKE 'Mobiliario' ORDER BY codigo ASC ")
            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
           
              echo "<tr>
              <td width='30' class='center'>$no</td>
              <td width='50' class='center'>$data[codigo]</td>
              <td width='90' class='center'>$data[descripcion]</td>
              <td width='90' class='center'>$data[marca]</td>
              <td width='90' class='center'>$data[modelo]</td>
              <td width='90' class='center'>$data[serial]</td>
              <td width='90' class='center'>$data[bienesN]</td>
              <td width='90' class='center'>$data[color]</td>
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
    </div><!--/.col -->
  </div>   <!-- /.row -->
            

              </div>
            </form>
          </div>

<!--Refrigeracion-->
<div role= "tabpanel" class="tab-pane" id="refrigeracion">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST">
            <div class="box-body">
        
    <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
              <th class="center">
              <input list="items" type="text" name="filtrado" id="ado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
                    </datalist></th>
                 <th class="center"><input list="items" type="text" name="filtrado2"  id="ado2" placeholder="-- Especificar --" autocomplete="off" >
                <th class="center"><input list="items" type="text" name="filtrado3"  id="ado3" placeholder="-- Especificar --" autocomplete="off" >
                <th class="center" > <a  data-toggle="tooltip"   class="btn btn-primary btn-mb"  onclick="javascript:esconde_div();">
                <i style="color:#fff" class="fa fa-minus"></i>
                </th>
                <th class="center" > <a  data-toggle="tooltip" class="btn btn-primary btn-mb"  onclick="javascript:visible_div();">
                <i style="color:#fff" class="fa fa-plus"></i>
                </th>
       
				        <th class="center"> <input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
                <th class="center"><input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre2" id="filtro2" value=""  placeholder="-- Filtro 2 --"></th>
                <th class="center"><input  class="chosen-select" class="col-mb-2 form-control"  type="text" name="nombre3" id="filtro3"  value="" placeholder="-- Filtro 3 --"></th>
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
                <th class="center">DESCRIPCION</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">Nº BIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>   
                <th class="center">QR
               
              
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria= 'Electrodomesticos' ORDER BY codigo ASC")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);
           
              echo "<tr>
              <td width='30' class='center'>$no</td>
              <td width='50' class='center'>$data[codigo]</td>
              <td width='90' class='center'>$data[descripcion]</td>
              <td width='90' class='center'>$data[marca]</td>
              <td width='90' class='center'>$data[modelo]</td>
              <td width='90' class='center'>$data[serial]</td>
              <td width='90' class='center'>$data[bienesN]</td>
              <td width='90' class='center'>$data[color]</td>
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
    </div><!--/.col -->
  </div>   <!-- /.row -->

              </div>
            </form>
          </div>

<!--CIENTIFICOS Y ELECTRONICOS-->
<div role= "tabpanel" class="tab-pane" id="cientificos">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST">
            <div class="box-body">
            <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">
    
    <table id="dataTables1" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
        <th class="center">
        <input list="items" type="text" name="filtrado" id="rado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              </datalist></th>
           <th class="center"><input list="items" type="text" name="filtrado2"  id="rado2" placeholder="-- Especificar --" autocomplete="off" >
          <th class="center"><input list="items" type="text" name="filtrado3"  id="rado3" placeholder="-- Especificar --" autocomplete="off" >
          <th class="center" > <a  data-toggle="tooltip"   class="btn btn-primary btn-mb"  onclick="javascript:esconde_div();">
          <i style="color:#fff" class="fa fa-minus"></i>
          </th>
          <th class="center" > <a  data-toggle="tooltip" class="btn btn-primary btn-mb"  onclick="javascript:visible_div();">
          <i style="color:#fff" class="fa fa-plus"></i>
          </th>
 
          <th class="center"> <input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
          <th class="center"><input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre2" id="filtro2" value=""  placeholder="-- Filtro 2 --"></th>
          <th class="center"><input  class="chosen-select" class="col-mb-2 form-control"  type="text" name="nombre3" id="filtro3"  value="" placeholder="-- Filtro 3 --"></th>
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
                <th class="center">DESCRIPCION</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">Nº BIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>   
                <th class="center">QR
         
        
        </tr>
      </thead>
      <tbody>
      <?php  
      $no = 1;
      $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria = 'Electronicos' ORDER BY codigo ASC")
                                      or die('error: '.mysqli_error($mysqli));

      while ($data = mysqli_fetch_assoc($query)) { 
        $precio_compra = format_rupiah($data['precio_compra']);
        $precio_venta = format_rupiah($data['precio_venta']);
     
        echo "<tr>
        <td width='30' class='center'>$no</td>
        <td width='50' class='center'>$data[codigo]</td>
        <td width='90' class='center'>$data[descripcion]</td>
        <td width='90' class='center'>$data[marca]</td>
        <td width='90' class='center'>$data[modelo]</td>
        <td width='90' class='center'>$data[serial]</td>
        <td width='90' class='center'>$data[bienesN]</td>
        <td width='90' class='center'>$data[color]</td>
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
</div><!--/.col -->
</div>   <!-- /.row -->
              </div>
            </form>
          </div>

<!--SEGURIDAD-->
<div role= "tabpanel" class="tab-pane" id="seguridad">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter.php" method="POST">
            <div class="box-body">
        
            <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">
    
    <table id="dataTables1" class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
        <th class="center">
        <input list="items" type="text" name="filtrado" id="trado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              </datalist></th>
           <th class="center"><input list="items" type="text" name="filtrado2"  id="trado2" placeholder="-- Especificar --" autocomplete="off" >
          <th class="center"><input list="items" type="text" name="filtrado3"  id="trado3" placeholder="-- Especificar --" autocomplete="off" >
          <th class="center" > <a  data-toggle="tooltip"   class="btn btn-primary btn-mb"  onclick="javascript:esconde_div();">
          <i style="color:#fff" class="fa fa-minus"></i>
          </th>
          <th class="center" > <a  data-toggle="tooltip" class="btn btn-primary btn-mb"  onclick="javascript:visible_div();">
          <i style="color:#fff" class="fa fa-plus"></i>
          </th>
 
          <th class="center"> <input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
          <th class="center"><input class="chosen-select"  class="col-mb-2 form-control" class="col-mb-2 form-control"  type="text" name="nombre2" id="filtro2" value=""  placeholder="-- Filtro 2 --"></th>
          <th class="center"><input  class="chosen-select" class="col-mb-2 form-control"  type="text" name="nombre3" id="filtro3"  value="" placeholder="-- Filtro 3 --"></th>
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

    <table id="dataTables1" class="table table-bordered table-striped table-hover">
      <thead>
      <tr>
          <th class="center">No.</th>
          <th class="center">CODIGO</th>
                <th class="center">DESCRIPCION</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">Nº BIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>   
                <th class="center">QR
         
        
        </tr>
      </thead>
      <tbody>
      <?php  
      $no = 1;
      $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE categoria='Seguridad' ORDER BY codigo ASC")
                                      or die('error: '.mysqli_error($mysqli));

      while ($data = mysqli_fetch_assoc($query)) { 
        $precio_compra = format_rupiah($data['precio_compra']);
        $precio_venta = format_rupiah($data['precio_venta']);
     
        echo "<tr>
                <td width='30' class='center'>$no</td>
                <td width='50' class='center'>$data[codigo]</td>
                <td width='90' class='center'>$data[descripcion]</td>
                <td width='90' class='center'>$data[marca]</td>
                <td width='90' class='center'>$data[modelo]</td>
                <td width='90' class='center'>$data[serial]</td>
                <td width='90' class='center'>$data[bienesN]</td>
                <td width='90' class='center'>$data[color]</td>
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
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_biblioteca.php" method="POST">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_bibliotecas.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_biblioteca" type="text" name="filtrado_biblioteca" id="filtrado_biblioteca" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false">
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
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca2" id="f2" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"><input list="items_biblioteca" type="text" name="filtrado_biblioteca3" id="f3" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="filtro" value="" placeholder="-- Filtro 1 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --" onpaste="return false"></th>
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
                <th class="center">ISBN</th>
                <th class="center">NºBIEN</th>
                <th class="center">COLOR</th>
                <th class="center">CONDICION</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">CANTIDAD</th>
                                <th class="center">QR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM biblioteca  ORDER BY codigo ASC")
                                or die('error: ' . mysqli_error($mysqli));

                              while ($data = mysqli_fetch_assoc($query)) {

                                echo "<tr>
                                <td width='30' class='center'>$no</td>
                                <td width='50' class='center'>$data[codigo]</td>
                                <td width='90' class='center'>$data[tipo]</td>
                                <td width='90' class='center'>$data[titulo]</td>
                                <td width='90' class='center'>$data[autor]</td>
                                <td width='90' class='center'>$data[editorial]</td>
                                <td width='50' class='center'>$data[isbn]</td>
                                <td width='50' class='center'>$data[bienesN]</td>
                                <td width='90' class='center'>$data[color]</td>
                                <td width='90' class='center'>$data[condicion]</td>
                                <td width='50' class='center'>$data[responsable]</td>
                                <td width='50' class='center'>$data[cedula]</td>
                                <td width='90' class='center'>$data[ubicacion]</td>
                                <td width='90' class='center'>$data[sede]</td>
                                <td width='90' class='center'>$data[cantidad]</td>          
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
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_vehiculos.php" method="POST">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_vehiculos.php" target="_blank">

                    <table id="dataTables_vehiculos" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_vehiculos" type="text" name="filtrado_vehiculos" id="filtrado_vehiculos" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false">
                            <datalist id="items_vehiculos">
                              <option value=""></option>
                              <option value="tipo"></option>
                              <option value="codigo"></option>
                              <option value="marca"></option>
                              <option value="modelo"></option>
                              <option value="placa"></option>
                              <option value="color"></option>
                              <option value="resguardo"></option>
                              <option value="sede"></option>
                              <option value="servicio"></option>
                              <option value="condicion"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items_vehiculos" type="text" name="filtrado_vehiculos2" id="filtrado_vehiculos2" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"><input list="items_vehiculos" type="text" name="filtrado_vehiculos3" id="filtrado_vehiculos3" placeholder="-- Especificar --"onpaste="return false"  autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="filtro" value="" placeholder="-- Filtro 1 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --" onpaste="return false"></th>
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
                <th class="center">TIPO</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">Nº CARROCERIA</th>
                <th class="center">COLOR</th>
                <th class="center">AÑO</th>
                <th class="center">PLACA</th>
                <th class="center">TIPO COMBUSTIBLE</th>
                <th class="center">CONDICION</th>
                <th class="center">UNIDAD</th>
                <th class="center">RESPONSABLE</th>
                <th class="center">CEDULA</th>
                <th class="center">UBICACION</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>
                <th class="center">QR</th>

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
                                <td width='80' class='center'>$data[tipo]</td>
                                <td width='80' class='center'>$data[marca]</td>
                                <td width='80' class='center'>$data[modelo]</td>
                                <td width='80' class='center'>$data[nmroCarroceria]</td>
                                <td width='80' class='center'>$data[color]</td>
                                <td width='80' class='center'>$data[anio]</td>
                                <td width='80' class='center'>$data[placa]</td>
                                <td width='50' class='center'>$data[tipoCombustible]</td>
                                <td width='50' class='center'>$data[condicion]</td>
                                <td width='80' class='center'>$data[unidad]</td>
                                <td width='90' class='center'>$data[responsable]</td>
                                <td width='90' class='center'>$data[cedula]</td>
                                <td width='90' class='center'>$data[ubicacion]</td>
                                <td width='90' class='center'>$data[sede]</td>
                                <td width='90' class='center'>$data[pertenece]</td>
            
                <td class='center'  width='100'>
                    <div>
      

              <a class='btn btn-primary btn-social pull-right' id='qr' data-toggle='modal' data-target='#exampleModal'>
                    <i id='$data[placa]' style='color:#000' class='fa fa-qrcode fa-2x'></i> QR
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


            <!--INMUEBLES-->
            <div role="tabpanel" class="tab-pane" id="inmuebles">
              <!-- form start -->
              <form role="form" class="form-horizontal" action="modules/stock_inventory/print_filter_inmuebles.php" method="POST">
                <div class="box-body">

                  <form name="formulario" method="post" action="modules/stock_inventory/print_inmuebles.php" target="_blank">

                    <table id="dataTables1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th class="center">
                            <input list="items_inmuebles" type="text" name="filtrado_binmuebles" id="filtrado_inmuebles" autocomplete="off" required="true" placeholder="-- Especificar--" onpaste="return false">
                            <datalist id="items_inmuebles">
                              <option value=""></option>
                              <option value="titulo"></option>
                              <option value="codigo"></option>
                              <option value="isbn"></option>
                              <option value="bienesN"></option>
                              <option value="autor"></option>
                              <option value="tipo"></option>
                              <option value="color"></option>
                              <option value="envoltura"></option>
                              <option value="editorial"></option>
                              <option value="codicion"></option>
                              <option value="ubicacion"></option>
                              <option value="responsable"></option>
                              <option value="cedula"></option>
                              <option value="sede"></option>
                            </datalist>
                          </th>
                          <th class="center"><input list="items_inmuebles" type="text" name="filtrado_inmuebles2" id="filtrado2" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"><input list="items_inmuebles" type="text" name="filtrado_inmuebles3" id="filtrado3" placeholder="-- Especificar --" onpaste="return false" autocomplete="off">
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                              <i style="color:#fff" class="fa fa-minus"></i>
                          </th>
                          <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                              <i style="color:#fff" class="fa fa-plus"></i>
                          </th>

                          <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" id="filtro" value="" placeholder="-- Filtro 1 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --" onpaste="return false"></th>
                          <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --" onpaste="return false"></th>
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
                <th class="center">QR</th>


                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $no = 1;

                              $query = mysqli_query($mysqli, "SELECT * FROM inmuebles ORDER BY codigo ASC")
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
                                <td width='90' class='center'>$data[habitantes]</td> 
                                <td width='90' class='center'>$data[direccion]</td>
                                <td width='50' class='center'>$data[condicion]</td>
                                <td width='90' class='center'>$data[responsable]</td>
                                <td width='50' class='center'>$data[cedula]</td> 
                                <td width='50' class='center'>$data[sede]</td>            
                <td class='center'  width='30'>
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

<script type="text/javascript">
  
   var elemento = document.getElementById("f_comu2");
   var elemento2 = document.getElementById("f_comu3");
   var elementos = [elemento, elemento2];
   var element = document.getElementById("filtro2");
   var element2 = document.getElementById("filtro3");
   var elementos2 = [element, element2];

   function esconde_div() {

console.log(elementos.length);

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
}

function visible_div(){

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
  }
}

</script>

<script >
  
//document.getElementById("contenido");

var qr= document.getElementById("contenido");
console.log(qr);
var cuerpo = $('#cuerpoModal');

qr.addEventListener("click",
  function(e){
    
    if(e.target.id=="qr"){
     // console.log(qr);
     // console.log(e.target.firstChild.nextSibling.id);
      serial = e.target.firstChild.nextSibling.id;
    // console.log(e.target);
      var parametros={"textqr":serial,"sizeqr":300};
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
    //console.log(this.id);
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