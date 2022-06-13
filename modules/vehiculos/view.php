<style>
  .botones{
    height: 35px;
    margin-right: 10px;
    margin-bottom: 10px;
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
  <i class="fa fa-folder-o icon-title"></i> Vehículos

    <form action="database/excel_to_mysql_vehiculos.php" method="POST" enctype="multipart/form-data">
        <button class="btn btn-primary pull-right botones" title="Importar" name="archivoInput" data-toggle="tooltip">Importar</button>
        
        <div class="btn-group pull-right" role="group" aria-label="Basic example"> 
    
          <a class="btn btn-primary btn-social pull-right botones anchoInput"  title="Cargar archivo" data-toggle="tooltip"> 
            <i class="fa fa-file-excel-o"></i> 
            <input method="post" type="file" id = "archivoInput" name="archivoInput" onchange="return validarExt()">
            <div class="textoInput">
              Cargar Archivo
            </div>  
          </a>

          <a class="btn btn-primary btn-social  pull-right botones" href="database\php_excel_vehiculos.php" title="Exportar" data-toggle="tooltip">
            <i class="fa fa-sign-out"></i></i>Exportar&nbsp;&nbsp;
          </a>

          <a class="btn btn-primary btn-social  pull-right botones" href="?module=form_vehiculos&form=add"  title="Agregar" data-toggle="tooltip">
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
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos registrados correctamente
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos modificados correctamente
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos eliminados correctamente
            </div>";
    }
    
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Datos importados correctamente
            </div>";
    } 
    
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-ban'></i> Error!</h4> La placa ya existe 
            </div>";
    }   
    
    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
              Equipo chequeado
            </div>";
    } 
    
    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Datos exportados correctamente </h4>
            </div>";
    }

    elseif ($_GET['alert'] == 8) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Seleccione el archivo que desea importar </h4>
            </div>";
    }

    elseif ($_GET['alert'] == 9) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese que el archivo que sube es correcto
            </div>";
    }

    ?>

      <div class="box box-primary">
        <div class="box-body">

          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">CODIGO</th>
                <th class="center">DESCRIPCION</th>
                <th class="center">PLACA</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">AÑO</th>
                <th class="center">TIPO</th>
                <th class="center">COLOR</th>
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

            $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($query);

            $_SESSION['sede'] = $data['sede'];
            $_SESSION['permisos_acceso'] = $data['permisos_acceso'];
            $permiso = $_SESSION['permisos_acceso'];
            $sede = $_SESSION['sede'];

            if ($sede == 'CTSR' && $permiso == 'Super Admin') {
              $query = mysqli_query($mysqli, "SELECT * FROM vehiculos WHERE categoria= 'vehiculos' ORDER BY codigo DESC")
                  or die('error: '.mysqli_error($mysqli));
            } else {
              $query = mysqli_query($mysqli, "SELECT * FROM vehiculos WHERE categoria= 'vehiculos' and sede LIKE '$sede' ORDER BY codigo DESC")
                                              or die('error: '.mysqli_error($mysqli));
            }
            

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
              //$precio_venta = format_rupiah($data['precio_venta']);
           
              echo "<tr>
                      <td width='50'  class='center'>$no</td>
                      <td width='50'  class='center'>$data[codigo]</td>
                      <td width='100' class='center'>$data[descripcion]</td>
                      <td width='100' class='center'>$data[placa]</td>
                      <td width='120' class='center'>$data[marca]</td>
                      <td width='100' class='center'>$data[modelo]</td>
                      <td width='100' class='center'>$data[anio]</td>
                      <td width='100' class='center'>$data[tipo]</td>
                      <td width='100' class='center'>$data[color]</td>
                      <td width='100' class='center'>$data[condicion]</td>
                      <td width='100' class='center'>$data[unidad]</td>
                      <td width='120' class='center'>$data[responsable]</td>
                      <td width='100' class='center'>$data[cedula]</td>
                      <td width='100' class='center'>$data[ubicacion]</td>
                      <td width='100' class='center'>$data[sede]</td>
                      <td width='100'  class='center'>$data[pertenece]</td>
                      <td width='100' class='center'>
                    <div>
            
                    <a data-toggle='tooltip' data-placement='top' title='Modificar' style='margin-right:0.3px' class='btn btn-primary btn-xs' href='?module=form_vehiculos&form=edit&id=$data[codigo]'>
                        <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                    </a>";
            ?>
                    <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs" href="modules/vehiculos/proses.php?act=delete&id=<?php echo $data['codigo'];?>" onclick="return confirm('¿Seguro de eliminar <?php echo $data['tipo'].' '.$data['placa']; ?>?');">
                        <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                    </a>         
            <?php

              if ($data['estado']=='nochequeado') { ?>
                  <a data-toggle="tooltip" data-placement="top" title="No chequeado"  class="btn btn-default btn-xs" href="modules/vehiculos/proses.php?act=off&codigo=<?php echo $data['codigo'];?>">
                  <i style="color:#F3EFEF" class="glyphicon glyphicon-unchecked"></i>
              </a> 
             <?php
             } 
             else { ?>
                   <a data-toggle="tooltip" data-placement="top" title="Chequeado"  class="btn btn-success btn-xs" href="modules/vehiculos/proses.php?act=on&codigo=<?php echo $data['codigo'];?>">
                   <i style="color:#fff" class="glyphicon glyphicon-check"></i>
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
            <a class="btn btn-primary pull-right botones" id="btnVehiculos"  style="height:35px;">
              <i></i> Reset Check
            </a>
          </div>


            <script src="assets/js/datatables.min.js" type="text/javascript"></script>
            <script>
              btn = document.getElementById("btnVehiculos");
              btn.addEventListener("click", ()=> {
                if(confirm("¿Desea eliminar el chequeo de todos los vehículos?")) {
                    window.location.href = "modules/vehiculos/proses.php?act=reset";
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
