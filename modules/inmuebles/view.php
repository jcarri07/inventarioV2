<style>
  .botones{
    height: 35px;
    margin-right: 10px;
    margin-bottom: 10px;
    width: 120px;
  }

  input[type=file] {
    opacity: 0;
    width: 100%;
    height: 100%;  
  }

  .textoInput{
    margin-top:-21px;
    text-align: center;
  }

  .anchoInput{
    width:140px;
  }

</style>
<script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.xlsx)$/i;
    
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegúrese de haber seleccionado un archivo de extensión .xlsx');
        archivoInput.value = '';
        return false;
    }
}
  </script>

<section class="content-header">
  <!--<div id="visorArchivo"></div>-->
  <h2>
  <i class="fa fa-folder-o icon-title"></i> 31000-0000 | Edificaciones, tierras y terrenos

    <form action="database/excel_to_mysql_inmuebles.php" method="POST" enctype="multipart/form-data">
        <button class="btn btn-primary btn-social pull-right botones" name="archivoInput" data-toggle="tooltip">
          <i class="fa fa-sign-in"></i></i>Importar&nbsp;&nbsp;
        </button>
        
        <div class="btn-group pull-right" role="group" aria-label="Basic example"> 
    
          <a class="btn btn-primary btn-social  pull-right botones" data-toggle="tooltip"> 
            <i class="fa fa-file-excel-o"></i> 
            <input method="post" type="file" id = "archivoInput" name="archivoInput" onchange="return validarExt()">
            <div class="textoInput">
              Cargar
            </div>  
          </a>

          <a class="btn btn-primary btn-social  pull-right botones" href="database\php_excel_inmuebles.php" data-toggle="tooltip">
            <i class="fa fa-sign-out"></i></i>Exportar&nbsp;&nbsp;
          </a>

          <a class="btn btn-primary btn-social  pull-right botones" href="?module=form_inmuebles&form=add" data-toggle="tooltip">
            <i class="fa fa-plus"></i> Agregar&nbsp;&nbsp;
          </a>

        </div>
    </form>
  </h2>
</section>
<br/>

<section class="content">
  <div class="row">
    <div class="col-md-12">
  
    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 
  
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Éxito!</h4>
              Datos registrados correctamente
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Éxito!</h4>
              Datos modificados correctamente
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Éxito!</h4>
              Datos eliminados correctamente
            </div>";
    }
      
    elseif ($_GET['alert'] == 8) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Seleccione el archivo que desea importar </h4>
            </div>";
    }

    ?>

      <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th class="center">ÍTEM</th>
                <th class="center">CÓDIGO</th>
                <th class="center">DESCRIPCIÓN</th>
                <th class="center">M²</th>
                <th class="center">PISOS</th>
                <th class="center">HABITACIONES</th>
                <th class="center">HABITANTES</th>
                <th class="center">No. BIEN</th>
                <th class="center">CONDICIÓN</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">UBICACIÓN</th>
                <th class="center">NOMBRE</th>
                <th class="center">CÉDULA</th>
                <th class="center">SEDE</th>
                <th class="center">PERTENECE</th>
                <th class="center">EDITAR</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($query);
            $_SESSION['sede'] = $data['sede'];
            $_SESSION['permisos_acceso'] = $data['permisos_acceso'];
            $permiso = $_SESSION['permisos_acceso'];
            $sede = $_SESSION['sede'];

            if ($sede == 'CTSR' && $permiso == 'Super Admin') {
              $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE categoria = 'inmuebles' ORDER BY codigo DESC")
                or die('error: '.mysqli_error($mysqli));
            } else {
              $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE categoria = 'inmuebles' and sede LIKE '$sede' ORDER BY codigo DESC")
                                            or die('error: '.mysqli_error($mysqli));
            }

            $query = mysqli_query($mysqli, "SELECT * FROM inmuebles WHERE categoria = 'inmuebles'  ORDER BY codigo DESC")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
              //$precio_venta = format_rupiah($data['precio_venta']);
           
              echo "<tr>
                      <td width='50'  class='center'>$no</td>
                      <td width='100' class='center'>$data[codigo]</td>
                      <td width='100' class='center'>$data[descripcion]</td>
                      <td width='100' class='center'>$data[metrosCuadrados]</td>
                      <td width='100' class='center'>$data[pisos]</td>
                      <td width='100' class='center'>$data[nmroCuartos]</td>
                      <td width='100' class='center'>$data[habitantes]</td> 
                      <td width='100' class='center'></td> 
                      <td width='100' class='center'>$data[condicion]</td>
                      <td width='100' class='center'></td>
                      <td width='100' class='center'>$data[direccion]</td>
                      <td width='100' class='center'>$data[responsable]</td>
                      <td width='100' class='center'>$data[cedula]</td> 
                      <td width='100' class='center'>$data[sede]</td>    
                      <td width='100' class='center'></td>        
                      <td width='100' class='center'>
                    <div>
            
                    <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:0.3px' class='btn btn-primary btn-xs' href='?module=form_inmuebles&form=edit&id=$data[codigo]'>
                        <i style='x:#fff' class='glyphicon glyphicon-edit'></i>
                    </a>";
            ?>
                    <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs" href="modules/inmuebles/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('¿Seguro de eliminar <?php echo $data['descripcion'].' '.$data['direccion']; ?>?');">
                        <i style="x:#fff" class="glyphicon glyphicon-trash"></i>
                    </a>         
            <?php

              if ($data['estado']=='nochequeado') { ?>
                  <a data-toggle="tooltip" data-placement="top" title="No chequeado"  class="btn btn-default btn-xs" href="modules/inmuebles/proses.php?act=off&codigo=<?php echo $data['codigo'];?>">
                  <i style="x:#F3EFEF" class="glyphicon glyphicon-unchecked"></i>
              </a> 
             <?php
             } 
             else { ?>
                   <a data-toggle="tooltip" data-placement="top" title="Chequeado"  class="btn btn-success btn-xs" href="modules/inmuebles/proses.php?act=on&codigo=<?php echo $data['codigo'];?>">
                   <i style="x:#fff" class="glyphicon glyphicon-check"></i>
              </a>
            <?php
           }

              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>

          <div class="row" style="height:35px;">
            <a class="btn btn-primary pull-right botones" id="btnInmueble"  style="height:35px;">
              <i></i> Reset Check
            </a>
          </div>

            <script src="assets/js/datatables.min.js" type="text/javascript"></script>
            <script>
              btn = document.getElementById("btnInmueble");
              btn.addEventListener("click", ()=> {
                if(confirm("¿Desea eliminar el chequeo de todos los inmuebles?")) {
                    window.location.href = "modules/inmuebles/proses.php?act=reset";
                  } 
              })
            </script>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content
