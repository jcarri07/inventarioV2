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
      <i class="fa fa-edit icon-title"></i> Agregar equipos de inmuebles
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inmuebles"> Agregar </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inmuebles/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
              
              $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
              $data = mysqli_fetch_assoc($query);
              $_SESSION['sede'] = $data['sede'];
              $sede = $_SESSION['sede'];

              $query_id = mysqli_query($mysqli, "SELECT codigo FROM inmuebles
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              ?>

              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT categoria, codigo FROM inmuebles
                                                where categoria = 'inmuebles' ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo = $data_id['codigo']+1;
                  error_reporting(E_ERROR | E_WARNING | E_PARSE);
              } else {
                  $codigo = 1;
              }

              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Código </label>
                <div class="col-sm-5">
                  <input type="tet"  class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipo" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">M²</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="metrosCuadrados" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Pisos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="pisos" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° Cuartos </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCuartos" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° Habitantes</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="habitantes" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="direccion" autocomplete="off" required>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" required>
                </div>
                <div id="resultado"></div>
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
                  <input type="text" class="form-control" name="cedula" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" value="<?php echo $sede; ?>" autocomplete="off" readonly required>
                </div>
              </div>
            </div><!-- /.bosede body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=inmuebles" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.bosede footer -->
          </form>
        </div><!-- /.bosede -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE codigo='$_GET[id]'") 
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
      <li><a href="?module=inmuebles">Item</a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inmuebles/proses.php?act=update" method="POST">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-2 control-label">Código</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tipo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="tipo" autocomplete="off" value="<?php echo $data['tipo']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">M²</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="metrosCuadrados" autocomplete="off" value="<?php echo $data['metrosCuadrados']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Pisos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="pisos" autocomplete="off" onkeypress='return validaNumericos(event)'  value="<?php echo $data['pisos']; ?>" required>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">N° Cuartos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCuartos" autocomplete="off" value="<?php echo $data['nmroCuartos']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° Habitantes</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="habitantes" autocomplete="off" value="<?php echo $data['habitantes']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="direccion" autocomplete="off" value="<?php echo $data['direccion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condicón</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" value="<?php echo $data['condicion']; ?>" required>
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
                  <input type="text" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" required>
                </div>
              </div>
            </div>



          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=inmuebles" class="btn btn-default btn-reset">Cancelar</a>
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