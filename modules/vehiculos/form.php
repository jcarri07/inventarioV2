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
      <i class="fa fa-edit icon-title"></i> Agregar vehiculos
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/vehiculos/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
              
              $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
              $data = mysqli_fetch_assoc($query);
              $_SESSION['sede'] = $data['sede'];
              $sede = $_SESSION['sede'];

              $query_id = mysqli_query($mysqli, "SELECT codigo FROM vehiculos
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
                <label class="col-sm-2 control-label">Marca</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="marca" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Tipo de Vehiculo</label>
                <div class="col-sm-5">
                <input class="form-control" list="items1" type="text" placeholder="--Especificar--" name="tipo" autocomplete="off" required>
                  <datalist id="items1">
                    <option value=""></option>
                    <option value="Privado">Privado</option>
                    <option value="Trans. Bienes o Mat">Trans. Bienes o Mat</option>
                    <option value="Apoyo Logistico">Apoyo Logistico</option>
                    <option value="Trans. Alimentos">Trans. Alimentos</option>
                    <option value="Trans. Mat. Peligroso">Trans. Mat. Peligroso</option>
                    <option value="Arrastre de carga">Arrastre de carga</option>
                    <option value="Clinica">Clinica</option>
                    </datalist>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Modelo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="modelo" autocomplete="off" required>
                </div>
              </div>
             
              <div class="form-group">
                <label class="col-sm-2 control-label">Numero de Placa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="placa" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Color</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="color" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cilindros</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cilindros" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Carroceria</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCarroceria" autocomplete="off" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Transmision</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="transmision" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Motor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nMotor" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Servicio</label>
                <div class="col-sm-5">
                <input class="form-control" list="items1" type="text" placeholder="--Especificar--" name="servicio" autocomplete="off" required>
                  <datalist id="items1">
                    <option value=""></option>
                    <option value="Privado">Privado</option>
                    <option value="Trans. Bienes o Mat">Trans. Bienes o Mat</option>
                    <option value="Apoyo Logistico">Apoyo Logistico</option>
                    <option value="Trans. Alimentos">Trans. Alimentos</option>
                    <option value="Trans. Mat. Peligroso">Trans. Mat. Peligroso</option>
                    <option value="Arrastre de carga">Arrastre de carga</option>
                    <option value="Clinica">Clinica</option>
                    </datalist>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Uso del Vehiculo</label>
                <div class="col-sm-5">
                <input class="form-control" list="items" type="text" placeholder="--Especificar--" name="uso" autocomplete="off" required>
                  <datalist id="items">
                    <option value=""></option>
                    <option value="Carga">Carga</option>
                    <option value="Carga puerto libre">Carga puerto libre</option>
                    <option value="Construccion">Construccion</option>
                    <option value="Deportivo">Deportivo</option>
                    <option value="Especial">Especial</option>
                    <option value="Grua">Grua</option>
                    <option value="Maq. Pesada">Maq. Pesada</option>
                    <option value="Particular">Particular</option>
                    <option value="Particular puerto libre">Particular puerto libre</option>
                    <option value="Transporte privado">Transporte privado</option>
                    <option value="Transporte publico">Transporte publico</option>
                    </datalist>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condicion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Tipo de Combustible</label>
                <div class="col-sm-5">
                <input class="form-control" list="items0" type="text" placeholder="--Especificar--" name="tipoCombustible" autocomplete="off" required>
                  <datalist id="items0">
                    <option value=""></option>
                    <option value="Gas">Gas</option>
                    <option value="Gasoil">(Diesel)</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Mixto">(Gasolina y Gas)</option>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Capacidad Tanque</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="capacidadTanque" autocomplete="off" required>
                </div>
              </div> 

              <div class="form-group">
                <label class="col-sm-2 control-label">Ubicación</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ubicacion" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Resguardo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="resguardo" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Responsable</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="responsable" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" onkeypress='return validaNumericos(event)' autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Año</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="anio" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad"  autocomplete="off" required>
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
                  <a href="?module=vehiculos" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT * FROM vehiculos WHERE codigo='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar datos vehiculos
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=vehiculos">Item</a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/vehiculos/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Código</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group" >
                <label class="col-sm-2 control-label">Tipo de Vehiculo</label>
                <div class="col-sm-5">
                <input class="form-control" list="items1" type="text" placeholder="<?php echo $data['tipo']; ?>" name="tipo" autocomplete="off" required>
                  <datalist id="items1">
                    <option value=""></option>
                    <option value="Privado">Privado</option>
                    <option value="Trans. Bienes o Mat">Trans. Bienes o Mat</option>
                    <option value="Apoyo Logistico">Apoyo Logistico</option>
                    <option value="Trans. Alimentos">Trans. Alimentos</option>
                    <option value="Trans. Mat. Peligroso">Trans. Mat. Peligroso</option>
                    <option value="Arrastre de carga">Arrastre de carga</option>
                    <option value="Clinica">Clinica</option>
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
                <label class="col-sm-2 control-label">Placa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="placa" autocomplete="off" value="<?php echo $data['placa']; ?>" required>
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
                <label class="col-sm-2 control-label">Transmision</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="transmision" autocomplete="off"  value="<?php echo $data['transmision']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cilindros</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cilindros" autocomplete="off"  value="<?php echo $data['cilindros']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Carroceria</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nmroCarroceria" autocomplete="off"  value="<?php echo $data['nmroCarroceria']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nº Motor</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nMotor" autocomplete="off"  value="<?php echo $data['nMotor']; ?>" required>
                </div>
              </div>        

              <div class="form-group" >
                <label class="col-sm-2 control-label">Tipo de Combustible</label>
                <div class="col-sm-5">
                <input class="form-control" list="items0" type="text" placeholder="<?php echo $data['tipoCombustible']; ?>" name="tipoCombustible" autocomplete="off" required>
                  <datalist id="items0">
                    <option value=""></option>
                    <option value="Gas">Gas</option>
                    <option value="Gasoil">(Diesel)</option>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Mixto">(Gasolina y Gas)</option>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Capacidad Tanque</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="capacidadTanque" autocomplete="off"  value="<?php echo $data['capacidadTanque']; ?>" required>
                </div>
              </div>  

              <div class="form-group" >
                <label class="col-sm-2 control-label">Servicio</label>
                <div class="col-sm-5">
                <input class="form-control" list="items1" type="text" placeholder="<?php echo $data['servicio']; ?>" name="servicio" autocomplete="off" required>
                  <datalist id="items1">
                    <option value=""></option>
                    <option value="Privado">Privado</option>
                    <option value="Trans. Bienes o Mat">Trans. Bienes o Mat</option>
                    <option value="Apoyo Logistico">Apoyo Logistico</option>
                    <option value="Trans. Alimentos">Trans. Alimentos</option>
                    <option value="Trans. Mat. Peligroso">Trans. Mat. Peligroso</option>
                    <option value="Arrastre de carga">Arrastre de carga</option>
                    <option value="Clinica">Clinica</option>
                    </datalist>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Condición</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="condicion" autocomplete="off" value="<?php echo $data['condicion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Ubicacion</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="ubicacion" autocomplete="off" value="<?php echo $data['ubicacion']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Unidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="unidad" autocomplete="off" value="<?php echo $data['unidad']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="sede" autocomplete="off" value="<?php echo $data['sede']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Responsable</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="responsable" autocomplete="off" value="<?php echo $data['responsable']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Resguardo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="resguardo" autocomplete="off" value="<?php echo $data['resguardo']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" autocomplete="off" value="<?php echo $data['cedula']; ?>" required>
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
                  <a href="?module=vehiculos" class="btn btn-default btn-reset">Cancelar</a>
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