<script src="js/alertifyjs/alertify.js"></script>
<script type="text/javascript">

  function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
} 
</script>

<?php

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar equipos de comunicacion
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
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inventario/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
              
              $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
              $data = mysqli_fetch_assoc($query);
              $_SESSION['sede'] = $data['sede'];
              $sede = $_SESSION['sede'];
          
              
              $query_id = mysqli_query($mysqli, "SELECT codigo FROM inventario
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo = $data_id['codigo']+1;
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
                  <input type="text"  class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
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
                <label class="col-sm-2 control-label">Serial</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="serial" autocomplete="off" required>
                </div>
                <div id="resultado"></div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="color" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Bienes Nacionales</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="bienesN" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" required>
                </div>
              </div>

              <!-- <div class="form-group" >
                <label class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-5">
                <input class="form-control" list="items0" type="text" placeholder="--Especificar--" name="unidad" autocomplete="off" required>
                  <datalist id="items0">
                    <option value=""></option>
                    <option value="USMI">USMI</option>
                    <option value="UDLP">UDLP</option>
                    <option value="UDIT">UDIT</option>
                    <option value="UDPP">UDPP</option>
                    </datalist>
                </div>
              </div>-->

              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad</label>
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
                <label class="col-sm-2 control-label">Responsable</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>
            
              <!--<div class="form-group">
                <label class="col-sm-2 control-label">Numero de Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="clasificacion" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="pertenece" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="USMI">ABAE</option>
                    <option value="UDLP">Otro</option>
                    <option value="caja">Caja</option>
                    <option value="raya">Raya</option>
                    <option value="tubo">Tubo</option>
                  </select>
                </div>
              </div>-->

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" value="<?php echo $sede; ?>" autocomplete="off" readonly required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                <input class="form-control" list="item" type="text" placeholder="--Especificar--" name="pertenece" autocomplete="off" required>
                  <datalist id="item">
                    <option value=""></option>
                    <option value="ABAE">ABAE</option>
                    </datalist>
                </div>
              </div>

              <!--<div class="form-group">
                <label class="col-sm-2 control-label">Precio de Compra</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_compra" name="pcompra" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Venta</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_venta" name="pventa" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                  </div>
                </div>
              </div>-->

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
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT categoria,codigo,serial,marca,modelo,bienesN,color,descripcion,condicion,ubicacion,nombre,cedula,sede,pertenece,unidad FROM inventario WHERE codigo='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar equipo
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inventario">Item</a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inventario/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Código</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Serial</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="serial" autocomplete="off" value="<?php echo $data['serial']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" value="<?php echo $data['descripcion']; ?>" required>
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
                  <input type="text" class="form-control" name="color" autocomplete="off" value="<?php echo $data['color']; ?>" required>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Bienes Nacionales</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="bienesN" autocomplete="off" onkeypress='return validaNumericos(event)'  value="<?php echo $data['bienesN']; ?>" required>
                </div>
              </div>    

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" value="<?php echo $data['condicion']; ?>" required>
                </div>
              </div>


            <!--  <div class="form-group" >
                <label class="col-sm-2 control-label">Direccion/ Unidad</label>
                <div class="col-sm-5">
                <input class="form-control" list="items0" type="text" value="<?php echo $data['unidad'];?>" autocomplete="off" required>
                  <datalist id="items0">
                    <option value="USMI">USMI</option>
                    <option value="UDLP">UDLP</option>
                    <option value="UDIT">UDIT</option>
                    <option value="UDPP">UDPP</option>
                    </datalist>
                </div>
              </div>-->

              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad" autocomplete="off" value="<?php echo $data['unidad']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Responsable</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" value="<?php echo $data['nombre']; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Ubicacion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ubicacion" autocomplete="off" value="<?php echo $data['ubicacion']; ?>" required>
                </div>
              </div>

             

             <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Nº de Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="clasificacion" autocomplete="off" onkeypress='return validaNumericos(event)' value="<?php //echo $data['clasificacion']; ?>" required>
                </div>
              </div>       

              <div class="form-group">
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="pertenece" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value="<?php echo $data['pertenece']; ?>"></option>
                   <option selected value="UDMI">ABAE</option>
                    <option value="UDLP">Otro</option>
                    <option value="caja"></option>
                    <option value="raya"></option>
                    <option value="tubo">Tubo</option>
                  </select>
                </div>
              </div>-->

              <div class="form-group" >
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                <input class="form-control" list="item" type="text" value="<?php echo $data['pertenece'];?>" name="pertenece" autocomplete="off" required>
                  <datalist id="item">
                    <option  selected value="ABAE">ABAE</option>
                    </datalist>
                </div>
              </div>

              <!--<div class="form-group">
                <label class="col-sm-2 control-label">Precio de Compra</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_compra" name="pcompra" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo format_rupiah($data['precio_compra']); ?>" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Precio de Venta</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon">$.</span>
                    <input type="text" class="form-control" id="precio_venta" name="pventa" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo format_rupiah($data['precio_venta']); ?>" required>
                  </div>
                </div>
              </div>-->


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
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>