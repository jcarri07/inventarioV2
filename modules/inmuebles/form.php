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
      <i class="fa fa-edit icon-title"></i> Agregar inmuebles
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inmuebles"> Inmuebles </a></li>
      <li class="active"> Agregar </li>
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
          
              $query_select = mysqli_query($mysqli, "SELECT categoria, codigo FROM inmuebles
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

              $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo = "$buat_id";

              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Código </label>
                <div class="col-sm-5">
                  <input type="tet"  class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                <input class="form-control" list="datalistOptions" name="descripcion" id="exampleDataList" placeholder="-- Seleccionar --" required>
                 <datalist id="datalistOptions">
                 <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT codigo, nombre FROM guia WHERE categoria = 'inmuebles' ORDER BY codigo ASC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[nombre]\"> $data_obat[codigo] </option>";
                      }
                    ?>
                </datalist>
               </div>
             </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">M²</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="metrosCuadrados" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Pisos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="pisos" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Habitaciones </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCuartos" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Habitantes</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="habitantes" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">No. Bien</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="bienesN" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <select class="chosen-select"  name="condicion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value=""></option>
                    <option value="En uso">En uso</option>
                    <option value="En comodato">En comodato</option>
                    <option value="En arrendamiento">En arrendamiento</option>
                    <option value="En mantenimiento">En mantenimiento</option>
                    <option value="En reparación">En reparación</option>
                    <option value="En proceso de disposición">En proceso de disposición</option>
                    <option value="En desuso por obsolescencia ">En desuso por obsolescencia </option>
                    <option value="En desuso por inservibilidad">En desuso por inservibilidad </option>
                    <option value="En desuso por obsolescencia">En desuso por obsolescencia </option>
                    <option value="En Almacén o Depósito para su asignación">En Almacén o Depósito para su asignación</option>
                    <option value="Otra uso">Otro uso</option>
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
                  <input type="text" class="form-control" name="direccion" autocomplete="off" required>
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
                  <input type="text" class="form-control" name="cedula" onkeypress="return validaNumericos(event)" onpaste="return false" autocomplete="off" required>
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
                  <a href="?module=inmuebles" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div>
            <!-- /.bosede footer -->
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
      <i class="fa fa-edit icon-title"></i> Modificar inmuebles
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inmuebles"> Inmuebles </a></li>
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
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                <input class="form-control" list="datalistOptions" name="descripcion" id="exampleDataList" value="<?php echo $data['descripcion']; ?>" required>
                 <datalist id="datalistOptions">
                 <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT codigo, nombre FROM guia WHERE categoria = 'inmuebles' ORDER BY codigo ASC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[nombre]\"> $data_obat[codigo] </option>";
                      }
                    ?>
                </datalist>
               </div>
             </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">M²</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="metrosCuadrados" autocomplete="off" value="<?php echo $data['metrosCuadrados']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Pisos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="pisos" autocomplete="off" onkeypress="return validaNumericos(event)"  value="<?php echo $data['pisos']; ?>" required>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Habitaciones</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCuartos" autocomplete="off"  onkeypress="return validaNumericos(event)" onpaste="return false" value="<?php echo $data['nmroCuartos']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Habitantes</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="habitantes" autocomplete="off" onkeypress="return validaNumericos(event)" onpaste="return false" value="<?php echo $data['habitantes']; ?>" required>
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
                  <select class="chosen-select"  name="condicion" data-placeholder="-- Seleccionar --" autocomplete="off" required>
                    <option value="<?php echo $data['condicion'];?>"><?php echo $data['condicion'];?></option>
                    <option value="En uso">En uso</option>
                    <option value="En comodato">En comodato</option>
                    <option value="En arrendamiento">En arrendamiento</option>
                    <option value="En mantenimiento">En mantenimiento</option>
                    <option value="En reparación">En reparación</option>
                    <option value="En proceso de disposición">En proceso de disposición</option>
                    <option value="En desuso por obsolescencia ">En desuso por obsolescencia </option>
                    <option value="En desuso por inservibilidad">En desuso por inservibilidad </option>
                    <option value="En desuso por obsolescencia">En desuso por obsolescencia </option>
                    <option value="En Almacén o Depósito para su asignación">En Almacén o Depósito para su asignación</option>
                    <option value="Otra uso">Otro uso</option>
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
                  <input type="text" class="form-control" name="direccion" autocomplete="off" value="<?php echo $data['direccion']; ?>" required>
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
                  <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Pertenece</label>
                <div class="col-sm-5">
                <input class="form-control" list="item" name="pertenece" type="text" value="<?php echo $data['pertenece'];?>" name="pertenece" autocomplete="off" required>
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
                  <a href="?module=inmuebles" class="btn btn-default btn-reset">Cancelar</a>
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