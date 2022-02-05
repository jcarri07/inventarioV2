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
      <i class="fa fa-edit icon-title"></i> Agregar Equipos de Seguridad
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=equipos_seguridad"> Seguridad </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/equipos_seguridad/proses.php?act=insert" method="POST">
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
                <label class="col-sm-2 control-label">No. Bien</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="bienesN" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="color" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dirección / Unidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Responsable</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="responsable" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cédula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
                </div>
              </div>
      
              <div class="form-group">
                <label class="col-sm-2 control-label">Ubicación</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ubicacion" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" value="<?php echo $sede; ?>" autocomplete="off" readonly required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                <input class="form-control" list="item" type="text" placeholder="-- Especificar --" name="pertenece" autocomplete="off" required>
                  <datalist id="item">
                    <option value=""></option>
                    <option value="ABAE">ABAE</option>
                    </datalist>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=equipos_seguridad" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE codigo='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Equipos de Seguridad
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=equipos_seguridad"> Seguridad </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/equipos_seguridad/proses.php?act=update" method="POST">
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
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="color" autocomplete="off" value="<?php echo $data['color']; ?>" required>
                </div>
              </div>     

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" value="<?php echo $data['condicion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dirección / Unidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad" autocomplete="off" value="<?php echo $data['unidad']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Responsable</label>
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
                <label class="col-sm-2 control-label">Ubicación</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ubicacion" autocomplete="off" value="<?php echo $data['ubicacion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                <input class="form-control" list="item" type="text" value="<?php echo $data['pertenece'];?>" name="pertenece" autocomplete="off" required>
                  <datalist id="item">
                    <option  selected value="ABAE">ABAE</option>
                    </datalist>
                </div>
              </div>
            </div>

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=equipos_seguridad" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div>
            <!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>