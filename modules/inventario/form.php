<script src="js/alertifyjs/alertify.js"></script>
<?php
$codigo = "";
if (isset($_GET["codigo"])) {
  $codigo = $_GET["codigo"];
}
?>
<script type="text/javascript">
  function validaNumericos(event) {

    var string;

    if (event.charCode >= 48 && event.charCode <= 57) {
      return true;
    }
    return false;
  }
</script>

<script type="text/javascript">
  $('.tab-submit').on('click', function() {

    var data = $(this).attr('href');

    $('.tab-pane').parent('li').removeClass('active');
    $('li a[href^="' + data + '"]').parent('li').addClass('active');

    $('tab-pane').removeClass('active');
    $(data).addClass("active");

    alert(data);
    alert(prev);
  })


  $(document).ready(function() {
    var codigo = "<?php echo $codigo; ?>";
    if (codigo != "") {
      $('#modalInterno').modal('show');
    }
  });

  function mostrarFormularioInternos() {
    /*var codigo = "<?php echo $codigo; ?>";
    document.getElementById("internosItem").click();
    $('#internos #codigoInternos').val(codigo);*/
    window.location.href = "?module=form_inventario&form=addcomp";
  }
</script>

<script>
  const submit_internos = document.getElementById('submit_internos');
  const form_int = document.getElementById('form_int');
  const component_submit = document.getElementById('comp');
  const prueba = document.getElementById('prueba');

  console.log("aaa")

  // submit_internos.addEventListener('click', ()=> {
  //     console.log(component_submit.value);
  // })

  function cambiarLocation() {
    // form_int.submit();
    // console.log("Guardando datos");
    window.location.href = "?module=inventario&alert=1";
    // //submitComponent.click();
    console.log("._.")
    console.log(prueba.value);
  }
</script>

<?php

if ($_GET['form'] == 'add') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar equipos
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inventario"> Oficina </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>


  <!-- Modal -->
  <div class="modal fade" id="modalInterno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="height:45px;">
        </div>
        <div class="modal-body" style="font-size: 25px; text-align:center;">
          ¿Desea registrar los componentes internos de este equipo?
        </div>
        <div class="modal-footer">
          <a id="submit_internos" type="button" class="btn btn-secondary" onclick="cambiarLocation()" data-dismiss="modal">Cerrar</a>
          <a type="button" class="btn btn-primary" onclick="mostrarFormularioInternos();" data-dismiss="modal">Registrar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div role="tabpanel">


            <!-- Oficina -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="agregar">
                <!-- form start -->
                <form role="form" class="form-horizontal" action="modules/inventario/proses.php?act=insert" method="POST" enctype="multipart/form-data">
                  <div class="box-body">
                    <?php

                    $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                      or die('error: ' . mysqli_error($mysqli));
                    $data = mysqli_fetch_assoc($query);
                    $_SESSION['sede'] = $data['sede'];
                    $sede = $_SESSION['sede'];


                    $query_id = mysqli_query($mysqli, "SELECT codigo FROM inventario
                                                ORDER BY codigo DESC LIMIT 1")
                      or die('error ' . mysqli_error($mysqli));

                    $count = mysqli_num_rows($query_id);

                    if ($count <> 0) {

                      $data_id = mysqli_fetch_assoc($query_id);
                      $codigo = $data_id['codigo'] + 1;
                      error_reporting(E_ERROR | E_WARNING | E_PARSE);
                    } else {
                      $codigo = 1;
                    }


                    $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
                    $codigo = "$buat_id";
                    ?>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Código </label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Descripción</label>
                      <div class="col-sm-5">
                        <input class="form-control" list="datalistOptions" name="descripcion" id="exampleDataList" placeholder="-- Seleccionar --" required>
                        <datalist id="datalistOptions">
                          <option value=""></option>
                          <?php
                          $query_obat = mysqli_query($mysqli, "SELECT codigo, nombre FROM guia WHERE categoria = 'Oficina' ORDER BY codigo ASC")
                            or die('error ' . mysqli_error($mysqli));
                          while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                            echo "<option value=\"$data_obat[nombre]\"> $data_obat[codigo] </option>";
                          }
                          ?>
                        </datalist>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Marca</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="marca" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Modelo</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="modelo" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Color</label>
                      <div class="col-sm-5">
                        <select class="chosen-select" name="color" data-placeholder="-- Seleccionar --" onchange="tampil_obat(this)" autocomplete="off">
                          <option value=""></option>
                          <?php
                          $query_obat = mysqli_query($mysqli, "SELECT * FROM colores")
                            or die('error ' . mysqli_error($mysqli));
                          while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                            echo "<option value=\"$data_obat[nombre]\">$data_obat[nombre]</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Serial</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="serial" autocomplete="off">
                      </div>
                      <div id="resultado"></div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Bien</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="bienesN" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Condición</label>
                      <div class="col-sm-5">
                        <select class="chosen-select" name="condicion" data-placeholder="-- Seleccionar --" autocomplete="off">
                          <option value=""></option>
                          <option value="Optimo">Optimo</option>
                          <option value="Regular">Regular</option>
                          <option value="Deteriorado">Deteriorado</option>
                          <option value="Averiado">Averiado</option>
                          <option value="Chatarra">Chatarra</option>
                          <option value="No operativo">No operativo</option>
                          <option value="Otra condición">Otra condición</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dirección / Unidad</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="unidad" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Ubicación</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="ubicacion" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="responsable" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Cédula</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="cedula" onkeypress='return validaNumericos(event)' onpaste="return false" autocomplete="off" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Sede</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="sede" value="<?php echo $sede; ?>" autocomplete="off" readonly required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pertenece</label>
                      <div class="col-sm-5">
                        <input class="form-control" list="item" type="text" placeholder="-- Especificar --" name="pertenece" autocomplete="off" required>
                        <datalist id="item">
                          <option value=""></option>
                          <option value="ABAE">ABAE</option>
                        </datalist>
                      </div>
                    </div>

                    <!-- <div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>
                      <div class="col-sm-5">
                        <input type="file" name="foto" class="form-control">
                        <br />
                        <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/INABAE_Logo.png" width="128">
                      </div>
                    </div> -->

                    <div class="box-footer">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                          <a href="?module=inventario" class="btn btn-default btn-reset">Atras</a>
                        </div>
                      </div>
                    </div>
                </form>
              </div>

            </div>
          </div>
        </div>


  </section><!-- /.content-->
<?php
} else if ($_GET['form'] == 'addcomp') { ?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar equipos
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=form_inventario&form=add"> Agregar </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!--MOBILIARIO-->
          <div role="tabpanel" class="tab-pane" id="internos">
            <!-- form start -->
            <form id="form_int" class="form-horizontal" action="modules/inventario/proses copy.php?act=insert" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <?php

                $query_id = mysqli_query($mysqli, "SELECT codigo FROM inventario
                                                ORDER BY codigo DESC LIMIT 1")
                  or die('error ' . mysqli_error($mysqli));

                $data  = mysqli_fetch_assoc($query_id);
                $codigo = $data['codigo'];

                ?>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Código </label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>" id="codigoInternos" readonly required>
                  </div>
                </div>


                <table border="1" class="table table-bordered table-striped table-hover">
                  <thead>

                    <tr>
                      <th class="center">Componente</th>
                      <th class="center">Clase</th>
                      <th class="center">Capacidad</th>
                      <th class="center">Marca</th>
                      <th class="center">Modelo</th>
                      <th class="center">Serial</th>
                      <th class="center">Condición</th>
                    </tr>
                    <tr>
                      <td class="center">Disco duro 1 : </td>
                      <td><input id="prueba" type="text" class="form-control" name="clased1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="capd1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcad1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modd1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="seriald1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="cond1" autocomplete="off"></td>
                    </tr>
                    <tr>
                      <td class="center">Disco duro 2 : </td>
                      <td><input type="text" class="form-control" name="clased2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="capd2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcad2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modd2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="seriald2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="cond2" autocomplete="off"></td>
                    </tr>

                    <tr>
                      <th class="center"></th>
                      <th class="center">Voltaje</th>
                      <th class="center">Certificación</th>
                      <th class="center">Marca</th>
                      <th class="center">Modelo</th>
                      <th class="center">Serial</th>
                      <th class="center">Condición</th>
                    </tr>
                    <tr>
                      <td class="center">Fuenta de poder : </td>
                      <td><input type="text" class="form-control" name="volfp" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="certfp" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcafp" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modfp" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="serialfp" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="condfp" autocomplete="off"></td>
                    </tr>


                    <tr>
                      <th class="center"></th>
                      <th class="center">Capacidad</th>
                      <th class="center">Clase</th>
                      <th class="center">Marca</th>
                      <th class="center">Modelo</th>
                      <th class="center">Serial</th>
                      <th class="center">Condición</th>
                    </tr>
                    <tr>
                      <td class="center">Tarjeta de video : </td>
                      <td><input type="text" class="form-control" name="captv" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="clasetv" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcatv" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modtv" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="serialtv" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="contv" autocomplete="off"></td>
                    </tr>

                    <tr>
                      <th class="center"></th>
                      <th class="center">Capacidad</th>
                      <th class="center">Clase</th>
                      <th class="center">Marca</th>
                      <th class="center">Modelo</th>
                      <th class="center">Serial</th>
                      <th class="center">Condición</th>
                    </tr>
                    <tr>
                      <td class="center">Memoria ram 1: </td>
                      <td><input type="text" class="form-control" name="capmr1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="clasemr1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcamr1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modmr1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="serialmr1" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="conmr1" autocomplete="off"></td>
                    </tr>


                    <tr>
                      <th class="center"></th>
                      <th class="center">Capacidad</th>
                      <th class="center">Clase</th>
                      <th class="center">Marca</th>
                      <th class="center">Modelo</th>
                      <th class="center">Serial</th>
                      <th class="center">Condición</th>
                    </tr>
                    <tr>
                      <td class="center">Memoria ram 2 : </td>
                      <td><input type="text" class="form-control" name="capmr2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="clasemr2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="marcamr2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="modmr2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="serialmr2" autocomplete="off"></td>
                      <td><input type="text" class="form-control" name="conmr2" autocomplete="off"></td>
                    </tr>
                    <thead>
                </table>

              </div>

              <div class="box-footer">
                <div class="form-group">
                  <div class="col-sm-offset-10 col-sm-10">
                    <input id="comp" type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                    <a href="?module=inventario" class="btn btn-default btn-reset">Cancelar</a>
                  </div>
                </div>
              </div><!-- /.box footer -->

            </form>
          </div>

        </div>
      </div>
    </div>

  </section><!-- /.content-->
<?php
} elseif ($_GET['form'] == 'edit') {
  if (isset($_GET['id'])) {

    $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE codigo='$_GET[id]'")
      or die('error: ' . mysqli_error($mysqli));
    $data  = mysqli_fetch_assoc($query);
  }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar equipos
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inventario"> Oficina </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">

          <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#modificar" aria-controls="" data-toggle="tab" role="tab">Modificar</a></li>
              <li role="presentation"><a href="#internos2" aria-controls="" data-toggle="tab" role="tab">Componentes internos</a></li>
            </ul>

            <!-- COMUNICACION -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="modificar">
                <!-- form start -->
                <form role="form" class="form-horizontal" action="modules/inventario/proses.php?act=update" method="POST" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Código</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Descripción</label>
                      <div class="col-sm-5">
                        <input class="form-control" list="datalistOptions" name="descripcion" id="exampleDataList" value="<?php echo $data['descripcion']; ?>" required>
                        <datalist id="datalistOptions">
                          <option value=""></option>
                          <?php
                          $query_obat = mysqli_query($mysqli, "SELECT codigo, nombre FROM guia WHERE categoria = 'Oficina' ORDER BY codigo ASC")
                            or die('error ' . mysqli_error($mysqli));
                          while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                            echo "<option value=\"$data_obat[nombre]\"> $data_obat[codigo] </option>";
                          }
                          ?>
                        </datalist>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Marca</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="marca" autocomplete="off" value="<?php echo $data['marca']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Modelo</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="modelo" autocomplete="off" value="<?php echo $data['modelo']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Color</label>
                      <div class="col-sm-5">
                        <select class="chosen-select" name="color" data-placeholder="-- Seleccionar --" onchange="tampil_obat(this)" autocomplete="off" required>
                          <option value="<?php echo $data['color']; ?>"><?php echo $data['color']; ?></option>
                          <?php
                          $query_obat = mysqli_query($mysqli, "SELECT * FROM colores")
                            or die('error ' . mysqli_error($mysqli));
                          while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                            echo "<option value=\"$data_obat[nombre]\">$data_obat[nombre]</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Serial</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="serial" autocomplete="off" value="<?php echo $data['serial']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">No. Bien</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="bienesN" autocomplete="off" value="<?php echo $data['bienesN']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Condición</label>
                      <div class="col-sm-5">
                        <select class="chosen-select" name="condicion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                          <option value="<?php echo $data['condicion']; ?>"><?php echo $data['condicion']; ?></option>
                          <option value="Optimo">Optimo</option>
                          <option value="Regular">Regular</option>
                          <option value="Deteriorado">Deteriorado</option>
                          <option value="Averiado">Averiado</option>
                          <option value="Chatarra">Chatarra</option>
                          <option value="No operativo">No operativo</option>
                          <option value="Otra condición">Otra condición</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Dirección / Unidad</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="unidad" autocomplete="off" value="<?php echo $data['unidad']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Ubicación</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="ubicacion" autocomplete="off" value="<?php echo $data['ubicacion']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="responsable" autocomplete="off" value="<?php echo $data['responsable']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Cédula</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="cedula" autocomplete="off" onkeypress="return validaNumericos(event)" onpaste="return false" value="<?php echo $data['cedula']; ?>" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Sede</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" readonly required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Pertenece</label>
                      <div class="col-sm-5">
                        <input class="form-control" list="item" type="text" value="<?php echo $data['pertenece']; ?>" name="pertenece" autocomplete="off" required>
                        <datalist id="item">
                          <option selected value="ABAE">ABAE</option>
                        </datalist>
                      </div>
                    </div>

                    <!--div class="form-group">
                      <label class="col-sm-2 control-label">Foto</label>
                      <div class="col-sm-5">
                        <input type="file" name="foto" class="form-control">
                        <br />
                        <?php
                        if ($data['foto'] == "") { ?>
                          <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/INABAE_Logo." width="128">
                        <?php
                        } else { ?>
                          <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/inventario/<?php echo $data['foto']; ?>" width="128">
                        <?php
                        }
                        ?>
                      </div>
                    </div-->

                  </div><!-- /.box body -->

                  <div class="box-footer">
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                        <a href="?module=inventario" class="btn btn-default btn-reset">Cancelar</a>
                      </div>
                    </div>
                  </div><!-- /.box footer -->
                </form>
              </div>

              <!--MOBILIARIO-->
              <div role="tabpanel" class="tab-pane" id="internos2">
                <!-- form start -->
                <form role="form" class="form-horizontal" action="modules/inventario/proses copy.php?act=update" method="POST">
                  <div class="box-body">

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Código</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                      </div>
                    </div>
                    <table border="1" class="table table-bordered table-striped table-hover">
                      <thead>

                        <tr>
                          <th class="center">Componente</th>
                          <th class="center">Clase</th>
                          <th class="center">Capacidad</th>
                          <th class="center">Marca</th>
                          <th class="center">Modelo</th>
                          <th class="center">Serial</th>
                          <th class="center">Condición</th>
                        </tr>
                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='disco1'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>

                        <tr>
                          <td class="center">Disco duro 1 : </td>
                          <td><input type="text" class="form-control" name="clased1" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
                          <td><input type="text" class="form-control" name="capd1" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcad1" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modd1" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="seriald1" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="cond1" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>
                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='disco2'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>

                        <tr>
                          <td class="center">Disco duro 2 : </td>
                          <td><input type="text" class="form-control" name="clased2" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
                          <td><input type="text" class="form-control" name="capd2" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcad2" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modd2" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="seriald2" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="cond2" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>

                        <tr>
                          <th class="center"></th>
                          <th class="center">Voltaje</th>
                          <th class="center">Certificación</th>
                          <th class="center">Marca</th>
                          <th class="center">Modelo</th>
                          <th class="center">Serial</th>
                          <th class="center">Condición</th>
                        </tr>
                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='fuente de poder'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>

                        <tr>
                          <td class="center">Fuente de poder : </td>
                          <td><input type="text" class="form-control" name="volfp" autocomplete="off" value="<?php echo $data['voltaje']; ?>"></td>
                          <td><input type="text" class="form-control" name="certfp" autocomplete="off" value="<?php echo $data['certificacion']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcafp" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modfp" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="serialfp" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="condfp" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>


                        <tr>
                          <th class="center"></th>
                          <th class="center">Capacidad</th>
                          <th class="center">Clase</th>
                          <th class="center">Marca</th>
                          <th class="center">Modelo</th>
                          <th class="center">Serial</th>
                          <th class="center">Condición</th>
                        </tr>
                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='tarjeta de video'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>
                        <tr>
                          <td class="center">Tarjeta de video : </td>
                          <td><input type="text" class="form-control" name="captv" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
                          <td><input type="text" class="form-control" name="clasetv" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcatv" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modtv" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="serialtv" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="contv" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>

                        <tr>
                          <th class="center"></th>
                          <th class="center">Capacidad</th>
                          <th class="center">Clase</th>
                          <th class="center">Marca</th>
                          <th class="center">Modelo</th>
                          <th class="center">Serial</th>
                          <th class="center">Condición</th>
                        </tr>
                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='memoria ram1'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>

                        <tr>
                          <td class="center">Memoria ram 1: </td>
                          <td><input type="text" class="form-control" name="capmr1" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
                          <td><input type="text" class="form-control" name="clasemr1" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcamr1" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modmr1" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="serialmr1" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="conmr1" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>


                        <?php

                        if (isset($_GET['id'])) {

                          $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='memoria ram2'")
                            or die('error: ' . mysqli_error($mysqli));
                          $data  = mysqli_fetch_assoc($query);
                        }
                        ?>

                        <tr>
                          <td class="center">Memoria ram 2: </td>
                          <td><input type="text" class="form-control" name="capmr2" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
                          <td><input type="text" class="form-control" name="clasemr2" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
                          <td><input type="text" class="form-control" name="marcamr2" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
                          <td><input type="text" class="form-control" name="modmr2" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
                          <td><input type="text" class="form-control" name="serialmr2" autocomplete="off" value="<?php echo $data['serial']; ?>"></td>
                          <td><input type="text" class="form-control" name="conmr2" autocomplete="off" value="<?php echo $data['condicion']; ?>"></td>
                        </tr>
                        <thead>
                    </table>



                  </div>

                  <div class="box-footer">
                    <div class="form-group">
                      <div class="col-sm-offset-10 col-sm-10">
                        <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                        <a href="?module=inventario" class="btn btn-default btn-reset">Cancelar</a>
                      </div>
                    </div>
                  </div><!-- /.box footer -->

                </form>
              </div>
            </div>
            </form>
          </div>

          </form>
        </div>


      </div>
    </div>
    </div>

  </section><!-- /.content -->
<?php
}
?>

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

  //document.getElementById("contenido");

  var qr = document.getElementById("contenido2");
  console.log(qr);
  var cuerpo = $('#cuerpoModal');

  // qr.addEventListener("click",
  //   function(e){

  //     if(e.target.id=="qr"){
  //       //console.log(qr);
  //       //console.log(e.target.firstChild.nextSibling.id);
  //       serial = e.target.firstChild.nextSibling.id;
  //       //console.log(e.target);
  //       var parametros={"textqr":serial,"sizeqr":300};
  //       $.ajax({
  // 				type: "POST",
  //         dataType: "html",
  // 				url: "modules/generateQr/qrModal.php",
  // 				data: parametros,
  // 				//success: function(datos){
  //           //console.log(cuerpo);
  //           //cuerpo.html(datos);
  // 					//$(".result").html(datos);
  //           //console.log(datos);
  // 				//}

  // 			 }).done(function(data){
  //         cuerpo.html(data);
  //        })
  //     }
  //   }
  // );

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
  $(document).ready(() => {
    let url = location.href.replace(/\/$/, "");

    if (location.hash) {
      const hash = url.split("#");
      $('#myTab a[href="#' + hash[1] + '"]').tab("show");
      url = location.href.replace(/\/#/, "#");
      history.replaceState(null, null, url);
      setTimeout(() => {
        $(window).scrollTop(0);
      }, 400);
    }

    $('a[data-toggle="tab"]').on("click", function() {
      let newUrl;
      const hash = $(this).attr("href");
      if (hash == "#agregar") {
        newUrl = url.split("#")[0];
      } else {
        newUrl = url.split("#")[0] + hash;
      }
      newUrl += "/";
      history.replaceState(null, null, newUrl);
    });
  });
</script>