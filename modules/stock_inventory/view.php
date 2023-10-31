<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Reportes de inventario
    <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir
    </a>
  </h1>
</section>

</br>
<form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body" id="contenido">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">
                  <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
                <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
                <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
                <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                    <i style="color:#fff" class="fa fa-minus"></i>
                </th>
                <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                    <i style="color:#fff" class="fa fa-plus"></i>
                </th>

                <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
                <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
                <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
        <table id="dataTables2" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">ITEMss </th>
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

            $query = mysqli_query($mysqli, "SELECT * FROM inventario ORDER BY nombre DESC") or die('Error: ' . mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) {
              $precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);

              echo "<tr>
                  <td width='30'  class='center'>$no</td>
                  <td width='80'  class='center'>$data[codigo]</td>
                  <td width='180' class='center'>$data[serial]</td>
                  <td width='180' class='center'>$data[descripcion]</td>
                  <td width='180' class='center'>$data[marca]</td>
                  <td width='180' class='center'>$data[modelo]</td>
                  <td width='180' class='center'>$data[color]</td>
                  <td width='180' class='center'>$data[bienesN]</td>
                  <td width='180' class='center'>$data[condicion]</td>
                  <td width='180' class='center'>$data[unidad]</td>
                  <td width='180' class='center'>$data[nombre]</td>
                  <td width='180' class='center'>$data[cedula]</td>
                  <td width='180' class='center'>$data[ubicacion]</td>
                  <td width='180' class='center'>$data[sede]</td>
                  <td width='180' class='center'>$data[pertenece]</td>
                  <td class='center' width='85'>
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
<script>
  $(document).ready(function() {
    $('#dataTables2').DataTable();
  });

  $(document).ready(function() {
    load(1);
  });

  function load(page) {
    var parametros = {
      "action": "ajax",
      "page": page
    };
    $("#loader").fadeIn('slow');
    $.ajax({
      url: 'paises_ajax.php',
      data: parametros,
      beforeSend: function(objeto) {
        $("#loader").html("<img src='loader.gif'>");
      },

      success: function(data) {
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }
</script>

<script type="text/javascript">
  var elemento = document.getElementById("filtro2");
  var elemento2 = document.getElementById("filtro3");
  var elementos = [elemento, elemento2];
  var elementos2 = [filtrado2, filtrado3];
</script>

<script>
  function esconde_div() {

    if (elementos.length > 1) {

      elementos2[1].style.display = 'none';
      elementos[1].style.display = 'none';
      elementos[1].value = "";
      elementos2[1].value = "";
      var ultimo = elementos.pop();
      var ultimox = elementos2.pop();

    } else if (elementos.length > 0) {

      elementos2[0].style.display = 'none';
      elementos[0].style.display = 'none';
      elementos[0].value = "";
      elementos2[0].value = "";
      var ultimo = elementos.pop();
      var ultimox = elementos2.pop();
    }
  }

  function visible_div() {

    if (elementos.length < 1) {

      elementos.push(elemento);
      elementos2.push(filtrado2);
      elementos[0].style.display = '';
      elementos2[0].style.display = '';

    } else if (elementos.length < 2) {

      elementos.push(elemento2);
      elementos2.push(filtrado3);
      elementos[1].style.display = '';
      elementos2[1].style.display = '';
    }

  }

  var qr = document.getElementById("contenido");
  var cuerpo = $('#cuerpoModal');
  //console.log(qr);
  qr.addEventListener("click",
    function(e) {

      if (e.target.id == "qr") {
        console.log(e.target.firstChild.nextSibling.id);
        codigo = e.target.firstChild.id;
        var parametros = {
          "textqr": codigo,
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

<!--<input type="button" onclick="javascript:esconde_div();" value="Ocultar div" />
<input type="button" onclick="javascript:visible_div();" value="div visible" />
<div id="capa">esto es una capa</div>-->

<!--Nivel Academico-->
<div role="tabpanel" class="tab-pane" id="refrigeracion">

  <!-- form start -->
  <form role="form" class="form-horizontal" method="POST">
    <div class="box-body">


      </br>
      <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">

        <table id="dataTables1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">
                <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                  <i style="color:#fff" class="fa fa-minus"></i>
              </th>
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                  <i style="color:#fff" class="fa fa-plus"></i>
              </th>

              <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
                  $query = mysqli_query($mysqli, "SELECT codigo,descripcion,serial,marca,modelo,color,bienesN, condicion, ubicacion, nombre, cedula, sede, pertenece,cantidad,precio_compra,precio_venta,unidad,estado FROM inventario WHERE categoria= 'refrigeracion' ORDER BY codigo ASC")
                    or die('error: ' . mysqli_error($mysqli));

                  while ($data = mysqli_fetch_assoc($query)) {
                    $precio_compra = format_rupiah($data['precio_compra']);
                    $precio_venta = format_rupiah($data['precio_venta']);

                    echo "<tr>
                          <td width='30'  class='center'>$no</td>
                          <td width='50'  class='center'>$data[codigo]</td>
                          <td width='90'  class='center'>$data[serial]</td>
                          <td width='90'  class='center'>$data[descripcion]</td>
                          <td width='90'  class='center'>$data[marca]</td>
                          <td width='90'  class='center'>$data[modelo]</td>
                          <td width='90'  class='center'>$data[color]</td>
                          <td width='90'  class='center'>$data[bienesN]</td>
                          <td width='90'  class='center'>$data[condicion]</td>
                          <td width='90'  class='center'>$data[unidad]</td>
                          <td width='130' class='center'>$data[nombre]</td>
                          <td width='90'  class='center'>$data[cedula]</td>
                          <td width='90'  class='center'>$data[ubicacion]</td>
                          <td width='90'  class='center'>$data[sede]</td>
                          <td width='90'  class='center'>$data[pertenece]</td>
                          
                      
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

      <div class="box-footer">


      </div><!-- /.box footer -->

    </div>
  </form>
</div>

<!--Formacion en el exterior-->
<div role="tabpanel" class="tab-pane" id="cientificos">

  <!-- form start -->
  <form role="form" class="form-horizontal" method="POST">
    <div class="box-body">

      </br>
      <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">

        <table id="dataTables1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">
                <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                  <i style="color:#fff" class="fa fa-minus"></i>
              </th>
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                  <i style="color:#fff" class="fa fa-plus"></i>
              </th>

              <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
                    <th class="center">ITEM</th>
                    <th class="center">CODIGO</th>
                    <th class="center">SERIAL</th>
                    <th class="center">DESCRIPCION</th>
                    <th class="center">MARCA</th>
                    <th class="center">MODELO</th>
                    <th class="center">COLOR</th>
                    <th class="center">No. BIEN</th>
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
                  $query = mysqli_query($mysqli, "SELECT codigo,descripcion,serial,marca,modelo,color,bienesN, condicion, ubicacion, nombre, cedula, sede, pertenece,cantidad,precio_compra,precio_venta,unidad,estado FROM inventario WHERE categoria = 'cientificos' ORDER BY codigo ASC")
                    or die('error: ' . mysqli_error($mysqli));

                  while ($data = mysqli_fetch_assoc($query)) {
                    $precio_compra = format_rupiah($data['precio_compra']);
                    $precio_venta = format_rupiah($data['precio_venta']);

                    echo "<tr>
                          <td width='30'  class='center'>$no</td>
                          <td width='50'  class='center'>$data[codigo]</td>
                          <td width='90'  class='center'>$data[serial]</td>
                          <td width='90'  class='center'>$data[descripcion]</td>
                          <td width='90'  class='center'>$data[marca]</td>
                          <td width='90'  class='center'>$data[modelo]</td>
                          <td width='90'  class='center'>$data[color]</td>
                          <td width='90'  class='center'>$data[bienesN]</td>
                          <td width='90'  class='center'>$data[condicion]</td>
                          <td width='90'  class='center'>$data[unidad]</td>
                          <td width='130' class='center'>$data[nombre]</td>
                          <td width='90'  class='center'>$data[cedula]</td>
                          <td width='90'  class='center'>$data[ubicacion]</td>
                          <td width='90'  class='center'>$data[sede]</td>
                          <td width='90'  class='center'>$data[pertenece]</td>
                          
                      
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

      <div class="box-footer">

      </div><!-- /.box footer -->

    </div>
  </form>
</div>

<!--Experiencia publica-->
<div role="tabpanel" class="tab-pane" id="seguridad">

  <!-- form start -->
  <form role="form" class="form-horizontal" method="POST">
    <div class="box-body">


      </br>
      <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">

        <table id="dataTables1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">
                <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                  <i style="color:#fff" class="fa fa-minus"></i>
              </th>
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                  <i style="color:#fff" class="fa fa-plus"></i>
              </th>

              <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
                    <th class="center">ITEM</th>
                    <th class="center">CODIGO</th>
                    <th class="center">SERIAL</th>
                    <th class="center">DESCRIPCION</th>
                    <th class="center">MARCA</th>
                    <th class="center">MODELO</th>
                    <th class="center">COLOR</th>
                    <th class="center">No. BIEN</th>
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
                  $query = mysqli_query($mysqli, "SELECT codigo,descripcion,serial,marca,modelo,color,bienesN, condicion, ubicacion, nombre, cedula, sede, pertenece,cantidad,precio_compra,precio_venta,unidad,estado FROM inventario WHERE categoria='seguridad' ORDER BY codigo ASC")
                    or die('error: ' . mysqli_error($mysqli));

                  while ($data = mysqli_fetch_assoc($query)) {
                    $precio_compra = format_rupiah($data['precio_compra']);
                    $precio_venta = format_rupiah($data['precio_venta']);

                    echo "<tr>
                          <td width='30'  class='center'>$no</td>
                          <td width='50'  class='center'>$data[codigo]</td>
                          <td width='90'  class='center'>$data[serial]</td>
                          <td width='90'  class='center'>$data[descripcion]</td>
                          <td width='90'  class='center'>$data[marca]</td>
                          <td width='90'  class='center'>$data[modelo]</td>
                          <td width='90'  class='center'>$data[color]</td>
                          <td width='90'  class='center'>$data[bienesN]</td>
                          <td width='90'  class='center'>$data[condicion]</td>
                          <td width='90'  class='center'>$data[unidad]</td>
                          <td width='130' class='center'>$data[nombre]</td>
                          <td width='90'  class='center'>$data[cedula]</td>
                          <td width='90'  class='center'>$data[ubicacion]</td>
                          <td width='90'  class='center'>$data[sede]</td>
                          <td width='90'  class='center'>$data[pertenece]</td>
                          
                      
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

      <div class="box-footer">

      </div><!-- /.box footer -->

    </div>
  </form>
</div>

<!--Datos Laborales-->
<div role="tabpanel" class="tab-pane" id="biblioteca">

  <!-- form start -->
  <form role="form" class="form-horizontal" method="POST">
    <div class="box-body">

      </br>
      <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">

        <table id="dataTables1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">
                <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                  <i style="color:#fff" class="fa fa-minus"></i>
              </th>
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                  <i style="color:#fff" class="fa fa-plus"></i>
              </th>

              <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
                    <th class="center">ITEM</th>
                    <th class="center">CODIGO</th>
                    <th class="center">TIPO</th>
                    <th class="center">TITULO</th>
                    <th class="center">AUTOR</th>
                    <th class="center">EDITORIAL</th>
                    <th class="center">CANTIDAD</th>
                    <th class="center">ISBN</th>
                    <th class="center">No. BIEN</th>
                    <th class="center">CONDICION</th>
                    <th class="center">UBICACION</th>
                    <th class="center">RESPONSABLE</th>
                    <th class="center">SEDE</th>
                    <th class="center">COLOR</th>
                    <th class="center">ENVOLTURA</th>
                    <th class="center">EDITAR</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($mysqli, "SELECT codigo,cedula,tipo,titulo,autor,editorial,cantidad,isbn,bienesN, condicion, unidad, ubicacion, responsable, cedula, sede, pertenece, detalles,color,serial,envoltura,precio_compra,precio_venta,sede,estado FROM inventario WHERE categoria = 'biblioteca' ORDER BY codigo ASC")
                    or die('error: ' . mysqli_error($mysqli));

                  while ($data = mysqli_fetch_assoc($query)) {
                    $precio_compra = format_rupiah($data['precio_compra']);
                    $precio_venta = format_rupiah($data['precio_venta']);

                    echo "<tr>
                          <td width='30' class='center'>$no</td>
                          <td width='50' class='center'>$data[codigo]</td>
                          <td width='90' class='center'>$data[descripcion]</td>
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
                          <td width='90' class='center'>$data[envoltura]</td>               
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


      <div class="box-footer">

      </div><!-- /.box footer -->
    </div>
  </form>
</div>

<!--Personal Militar-->
<div role="tabpanel" class="tab-pane" id="vehiculos">

  <!-- form start -->
  <form role="form" class="form-horizontal" method="POST">
    <div class="box-body">

      </br>
      <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php" target="_blank">

        <table id="dataTables1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th class="center">
                <input list="items" type="text" name="filtrado" id="filtrado" autocomplete="off" required="true" placeholder="-- Especificar--">
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
              <th class="center"><input list="items" type="text" name="filtrado2" id="filtrado2" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"><input list="items" type="text" name="filtrado3" id="filtrado3" placeholder="-- Especificar --" autocomplete="off">
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:esconde_div();">
                  <i style="color:#fff" class="fa fa-minus"></i>
              </th>
              <th class="center"> <a data-toggle="tooltip" class="btn btn-primary btn-mb" onclick="javascript:visible_div();">
                  <i style="color:#fff" class="fa fa-plus"></i>
              </th>

              <th class="center"> <input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre" value="" placeholder="-- Filtro 1 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" class="col-mb-2 form-control" type="text" name="nombre2" id="filtro2" value="" placeholder="-- Filtro 2 --"></th>
              <th class="center"><input class="chosen-select" class="col-mb-2 form-control" type="text" name="nombre3" id="filtro3" value="" placeholder="-- Filtro 3 --"></th>
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
              </br>
              <table id="dataTables2" class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th class="center">ITEM</th>
                    <th class="center">CODIGO</th>
                    <th class="center">MARCA</th>
                    <th class="center">CLASE</th>
                    <th class="center">TIPO</th>
                    <th class="center">MODELO</th>
                    <th class="center">PLACAS</th>
                    <th class="center">COLOR</th>
                    <th class="center">CILINDROS</th>
                    <th class="center">TRANSMISION</th>
                    <th class="center">CONDICION</th>
                    <th class="center">UNIDAD</th>
                    <th class="center">UBICACION</th>
                    <th class="center">SEDE</th>
                    <th class="center">RESGUARDO</th>
                    <th class="center">RESPONSABLE</th>
                    <th class="center">EDITAR</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = mysqli_query($mysqli, "SELECT codigo, serial, marca, clase, tipo, modelo, placas, color, cilindros, transmision, condicion, unidad, ubicacion, resguardo, sede, responsable,estado FROM inventario WHERE categoria= 'vehiculos' ORDER BY codigo ASC")
                    or die('error: ' . mysqli_error($mysqli));

                  while ($data = mysqli_fetch_assoc($query)) {
                    //$precio_compra = format_rupiah($data['precio_compra']);
                    //$precio_venta = format_rupiah($data['precio_venta']);

                    echo "<tr>
                          <td width='30'  class='center'>$no</td>
                          <td width='50'  class='center'>$data[codigo]</td>
                          <td width='90'  class='center'>$data[marca]</td>
                          <td width='90'  class='center'>$data[clase]</td>
                          <td width='90'  class='center'>$data[tipo]</td>
                          <td width='90'  class='center'>$data[modelo]</td>
                          <td width='90'  class='center'>$data[placas]</td>
                          <td width='90'  class='center'>$data[color]</td>
                          <td width='90'  class='center'>$data[cilindros]</td>
                          <td width='90'  class='center'>$data[transmision]</td>
                          <td width='130' class='center'>$data[condicion]</td>
                          <td width='90'  class='center'>$data[unidad]</td>
                          <td width='90'  class='center'>$data[ubicacion]</td>
                          <td width='90'  class='center'>$data[sede]</td>
                          <td width='90'  class='center'>$data[resguardo]</td>
                          <td width='90'  class='center'>$data[responsable]</td>
                      
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