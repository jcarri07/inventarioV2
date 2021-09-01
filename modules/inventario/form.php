<script src="js/alertifyjs/alertify.js"></script>

<script type="text/javascript">

  function validaNumericos(event) {

    var string;

    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
} 
</script>

<script type="text/javascript">

    $('.tab-submit').on('click', function() {  

        var data = $(this).attr('href');

        $('.tab-pane').parent('li').removeClass('active');
        $('li a[href^="'+data+'"]').parent('li').addClass('active');

        $('tab-pane').removeClass('active');
        $(data).addClass("active");

        alert(data);
        alert(prev);
  })
</script>

<?php

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar equipos
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
        <div role = "tabpanel">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#agregar" aria-controls="" data-toggle="tab" role="tab">Agregar</a></li>
            <li role="presentation" ><a href="#internos" aria-controls="" data-toggle="tab" role="tab">Componentes Internos</a></li>
          </ul>

<!-- COMUNICACION -->
    <div class="tab-content" >
        <div role= "tabpanel" class="tab-pane active" id="agregar">             
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

            <div class="form-group" >
                <label class="col-sm-6 control-label">Foto</label>
                <div class="col-sm-6">
                  <input type="file" name="foto">
                  <br/>
                <?php  
                if ($data['foto']=="") { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/user-default.png" width="128">
                <?php
                }
                else { ?>
                  <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/<?php echo $data['foto']; ?>" width="128">
                <?php
                }
                ?>
                </div>
              </div>

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
    <div role= "tabpanel" class="tab-pane" id="internos">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inventario/proses copy.php?act=insert" method="POST">
            <div class="box-body">
              

            <div class="form-group">
                <label class="col-sm-4 control-label" >CODIGO </label>
                <div class="col-sm-3">
                  <input type="text"  class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>


            <table border="1"  class="table table-bordered table-striped table-hover">
            <thead>

          <tr> 
            <th class="center">COMPONENTE</th>
            <th class="center">CLASE</th>
            <th class="center">CAPACIDAD</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <tr>
            <td class="center">DISCO DURO 1 : </td>
            <td><input type="text" class="form-control" name="clased1" autocomplete="off"></td>
            <td><input type="text" class="form-control" name="capd1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcad1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modd1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="seriald1" autocomplete="off" required></td>
            <td><input type="text" class="form-control" name="cond1" autocomplete="off" ></td>
          </tr>
          <tr>
            <td class="center">DISCO DURO 2 : </td>
            <td><input type="text" class="form-control" name="clased2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="capd2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcad2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modd2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="seriald2" autocomplete="off" required></td>
            <td><input type="text" class="form-control" name="cond2" autocomplete="off" ></td>
          </tr>

          <tr> 
            <th class="center"></th>
            <th class="center">VOLTAJE</th>
            <th class="center">CERTIFICACION</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <tr>
            <td class="center">FUENTE DE PODER : </td>
            <td><input type="text" class="form-control" name="volfp" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="certfp" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcafp" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modfp" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="serialfp" autocomplete="off"required ></td>
            <td><input type="text" class="form-control" name="condfp" autocomplete="off" ></td>
          </tr>

         
          <tr> 
            <th class="center"></th>
            <th class="center">CAPACIDAD</th>
            <th class="center">CLASE</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <tr>
            <td class="center">TARJETA DE VIDEO : </td>
            <td><input type="text" class="form-control" name="captv" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="clasetv" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcatv" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modtv" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="serialtv" autocomplete="off" required></td>
            <td><input type="text" class="form-control" name="contv" autocomplete="off" ></td>
          </tr>

          
       
          <tr> 
            <th class="center"></th>
            <th class="center">CAPACIDAD</th>
            <th class="center">CLASE</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <tr>
            <td class="center">MEMORIA RAM 1: </td>
            <td><input type="text" class="form-control" name="capmr1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="clasemr1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcamr1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modmr1" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="serialmr1" autocomplete="off" required ></td>
            <td><input type="text" class="form-control" name="conmr1" autocomplete="off" ></td>
          </tr>

          
          <tr> 
            <th class="center"></th>
            <th class="center">CAPACIDAD</th>
            <th class="center">CLASE</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <tr>
            <td class="center">MEMORIA RAM 2 : </td>
            <td><input type="text" class="form-control" name="capmr2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="clasemr2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="marcamr2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="modmr2" autocomplete="off" ></td>
            <td><input type="text" class="form-control" name="serialmr2" autocomplete="off"required ></td>
            <td><input type="text" class="form-control" name="conmr2" autocomplete="off" ></td>
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


   </div>
     </div>
       </div>
       
     

</section><!-- /.content-->
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

        <div role = "tabpanel">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#modificar" aria-controls="" data-toggle="tab" role="tab">Modificar</a></li>
            <li role="presentation" ><a href="#internos2" aria-controls="" data-toggle="tab" role="tab">Componentes Internos</a></li>
          </ul>

<!-- COMUNICACION -->
    <div class="tab-content" >
        <div role= "tabpanel" class="tab-pane active" id="modificar"> 
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
    </div>

    <!--MOBILIARIO-->
    <div role= "tabpanel" class="tab-pane" id="internos2">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inventario/proses copy.php?act=update" method="POST">
            <div class="box-body">
              
            <div class="form-group">
                <label class="col-sm-4 control-label">Código</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                </div>
              </div>
              <table border="1"  class="table table-bordered table-striped table-hover">
            <thead>

          <tr> 
            <th class="center">COMPONENTE</th>
            <th class="center">CLASE</th>
            <th class="center">CAPACIDAD</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>


               <?php
               
            if (isset($_GET['id'])) {

           $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='disco1'") 
          or die('error: '.mysqli_error($mysqli));
          $data  = mysqli_fetch_assoc($query);

            }            
             ?>

          <tr>
            <td class="center">DISCO DURO 1 : </td>
            <td><input type="text" class="form-control" name="clased1" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
            <td><input type="text" class="form-control" name="capd1" autocomplete="off" value="<?php echo $data['capacidad']; ?>" ></td>
            <td><input type="text" class="form-control" name="marcad1" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
            <td><input type="text" class="form-control" name="modd1" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
            <td><input type="text" class="form-control" name="seriald1" autocomplete="off"value="<?php echo $data['serial']; ?>"  required></td>
            <td><input type="text" class="form-control" name="cond1" autocomplete="off"  value="<?php echo $data['condicion']; ?>"></td>
          </tr>
          <?php
               
               if (isset($_GET['id'])) {
   
              $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='disco2'") 
             or die('error: '.mysqli_error($mysqli));
             $data  = mysqli_fetch_assoc($query);
   
               }            
                ?>
          
          <tr>
            <td class="center">DISCO DURO 2 : </td>
            <td><input type="text" class="form-control" name="clased2" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
            <td><input type="text" class="form-control" name="capd2" autocomplete="off" value="<?php echo $data['capacidad']; ?>" ></td>
            <td><input type="text" class="form-control" name="marcad2" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
            <td><input type="text" class="form-control" name="modd2" autocomplete="off" value="<?php echo $data['modelo']; ?>"></td>
            <td><input type="text" class="form-control" name="seriald2" autocomplete="off"value="<?php echo $data['serial']; ?>"  required></td>
            <td><input type="text" class="form-control" name="cond2" autocomplete="off"  value="<?php echo $data['condicion']; ?>"></td>
          </tr>

          <tr> 
            <th class="center"></th>
            <th class="center">VOLTAJE</th>
            <th class="center">CERTIFICACION</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <?php
               
               if (isset($_GET['id'])) {
   
              $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='fuente de poder'") 
             or die('error: '.mysqli_error($mysqli));
             $data  = mysqli_fetch_assoc($query);
   
               }            
                ?>

          <tr>
            <td class="center">FUENTE DE PODER : </td>
            <td><input type="text" class="form-control" name="volfp" autocomplete="off" value="<?php echo $data['voltaje']; ?>" ></td>
            <td><input type="text" class="form-control" name="certfp" autocomplete="off" value="<?php echo $data['certificacion']; ?>" ></td>
            <td><input type="text" class="form-control" name="marcafp" autocomplete="off" value="<?php echo $data['marca']; ?>" ></td>
            <td><input type="text" class="form-control" name="modfp" autocomplete="off" value="<?php echo $data['modelo']; ?>" ></td>
            <td><input type="text" class="form-control" name="serialfp" autocomplete="off"value="<?php echo $data['serial']; ?>" required ></td>
            <td><input type="text" class="form-control" name="condfp" autocomplete="off" value="<?php echo $data['condicion']; ?>" ></td>
          </tr>

         
          <tr> 
            <th class="center"></th>
            <th class="center">CAPACIDAD</th>
            <th class="center">CLASE</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>

          <?php
               
               if (isset($_GET['id'])) {
   
              $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='tarjeta de video'") 
             or die('error: '.mysqli_error($mysqli));
             $data  = mysqli_fetch_assoc($query);
   
               }            
                ?>
          <tr>
            <td class="center">TARJETA DE VIDEO : </td>
            <td><input type="text" class="form-control" name="captv" autocomplete="off" value="<?php echo $data['capacidad']; ?>"></td>
            <td><input type="text" class="form-control" name="clasetv" autocomplete="off" value="<?php echo $data['clase']; ?>" ></td>
            <td><input type="text" class="form-control" name="marcatv" autocomplete="off"value="<?php echo $data['marca']; ?>"  ></td>
            <td><input type="text" class="form-control" name="modtv" autocomplete="off" value="<?php echo $data['modelo']; ?>" ></td>
            <td><input type="text" class="form-control" name="serialtv" autocomplete="off" value="<?php echo $data['serial']; ?>" required></td>
            <td><input type="text" class="form-control" name="contv" autocomplete="off" value="<?php echo $data['condicion']; ?>" ></td>
          </tr>

          
       
          <tr> 
            <th class="center"></th>
            <th class="center">CAPACIDAD</th>
            <th class="center">CLASE</th>
            <th class="center">MARCA</th>
            <th class="center">MODELO</th>
            <th class="center">SERIAL</th>
				    <th class="center">CONDICION</th>
          </tr>
          <?php
               
               if (isset($_GET['id'])) {
   
              $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='memoria ram1'") 
             or die('error: '.mysqli_error($mysqli));
             $data  = mysqli_fetch_assoc($query);
   
               }            
                ?>

          <tr>
            <td class="center">MEMORIA RAM 1: </td>
            <td><input type="text" class="form-control" name="capmr1" autocomplete="off"value="<?php echo $data['capacidad']; ?>" ></td>
            <td><input type="text" class="form-control" name="clasemr1" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
            <td><input type="text" class="form-control" name="marcamr1" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
            <td><input type="text" class="form-control" name="modmr1" autocomplete="off" value="<?php echo $data['modelo']; ?>" ></td>
            <td><input type="text" class="form-control" name="serialmr1" autocomplete="off" value="<?php echo $data['serial']; ?>" required ></td>
            <td><input type="text" class="form-control" name="conmr1" autocomplete="off" value="<?php echo $data['condicion']; ?>" ></td>
          </tr>

          
          <?php
               
               if (isset($_GET['id'])) {
   
              $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]' AND componente='memoria ram1'") 
             or die('error: '.mysqli_error($mysqli));
             $data  = mysqli_fetch_assoc($query);
   
               }            
                ?>

          <tr>
            <td class="center">MEMORIA RAM 1: </td>
            <td><input type="text" class="form-control" name="capmr2" autocomplete="off"value="<?php echo $data['capacidad']; ?>" ></td>
            <td><input type="text" class="form-control" name="clasemr2" autocomplete="off" value="<?php echo $data['clase']; ?>"></td>
            <td><input type="text" class="form-control" name="marcamr2" autocomplete="off" value="<?php echo $data['marca']; ?>"></td>
            <td><input type="text" class="form-control" name="modmr2" autocomplete="off" value="<?php echo $data['modelo']; ?>" ></td>
            <td><input type="text" class="form-control" name="serialmr2" autocomplete="off" value="<?php echo $data['serial']; ?>" required ></td>
            <td><input type="text" class="form-control" name="conmr2" autocomplete="off" value="<?php echo $data['condicion']; ?>" ></td>
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


                $(document).ready( function () {
                $('#dataTables2').DataTable();
            } );
      
            $(document).ready(function(){
              load(1);
            });

            function load(page){
              var parametros = {"action":"ajax","page":page};
              $("#loader").fadeIn('slow');
              $.ajax({
              url:'paises_ajax.php',
              data: parametros,
              beforeSend: function(objeto){
              $("#loader").html("<img src='loader.gif'>");
            },

            success:function(data){
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
function esconde_div(){

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
 
function visible_div(){

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

var qr= document.getElementById("contenido2");
console.log(qr);
var cuerpo = $('#cuerpoModal');

qr.addEventListener("click",
  function(e){
    
    if(e.target.id=="qr"){
      //console.log(qr);
      //console.log(e.target.firstChild.nextSibling.id);
      serial = e.target.firstChild.nextSibling.id;
      //console.log(e.target);
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
				 
			 }).done(function(data){
        cuerpo.html(data);
       })
    }
  }
);

$( "#qr" ).click(function( event ) {
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