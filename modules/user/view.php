

<section class="content-header">
  <h1>
    <i class="fa fa-user icon-title"></i> Gestión de Usuarios

    <a class="btn btn-primary btn-social pull-right" href="?module=form_user&form=add" title="Agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>

<!-- Main content -->
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
              Datos de usuario registrados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
           Datos de usuario cambiados satisfactoriamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            El usuario ha sido activado correctamente.
            </div>";
    }
 
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             El usuario se bloqueó con éxito.
            </div>";
    }
   
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             Asegúrese de que el archivo que se sube es correcto.
            </div>";
    }

    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
            Asegúrese de que la imagen no es más de 1 MB.
            </div>";
    }
 
    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             Asegúrese de que el tipo de archivo subido sea  *.JPG, *.JPEG, *.PNG.
            </div>";
    }

    ?>

      <div class="box box-primary">
        <div class="box-body">
     
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
       
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Foto</th>
                <th class="center">Usuario</th>
                <th class="center">ID</th>
                <th class="center">Nombre del usuario</th>
                <th class="center">Permisos de acceso</th>
                <th class="center">Sede</th>
                <th class="center">Status</th>
                <th class="center"></th>
              </tr>
            </thead>


                        <tbody>
            <?php  
            $no = 1;
      
            $query = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id_user DESC")
                                            or die('error: '.mysqli_error($mysqli));


            while ($data = mysqli_fetch_assoc($query)) { 
                
              echo "<tr>
                      <td width='50' class='center'>$no</td>";

                      if ($data['foto']=="") { ?>
                        <td class='center'><img class='img-user' src='images/user/user-default.png' width='25'></td>
                      <?php
                      } else { ?>
                        
                        <td class='center'><img class='img-user' src='images/user/<?php echo $data['foto']; ?>' width='25'></td>
                      <?php
                      }

              echo "  
                      <td>$data[username]</td>
                      <td>$data[id_user]</td>
                      <td>$data[name_user]</td>
                      <td>$data[permisos_acceso]</td>
                      <td>$data[sede]</td>
                      <td class='center'>$data[status]</td>

                      <td class='center' width='100'>
                          <div>";

                          if ($data['status']=='activo') { ?>
                            <a data-toggle="tooltip" data-placement="top" title="Bloqueado" style="margin-right:1px" class="btn btn-warning btn-xs" href="modules/user/proses.php?act=off&id=<?php echo $data['id_user'];?>">
                                <i style="color:#fff" class="glyphicon glyphicon-off"></i>
                            </a>
            <?php
                          } 
                          else { ?>
                            <a data-toggle="tooltip" data-placement="top" title="activo" style="margin-right:5px" class="btn btn-success btn-xs" href="modules/user/proses.php?act=on&id=<?php echo $data['id_user'];?>">
                                <i style="color:#fff" class="glyphicon glyphicon-ok"></i>
                            </a>
            <?php
                          }
                          
              echo "      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-xs' href='?module=form_user&form=edit&id=$data[id_user]'>
                                <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
              ?>   
              <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-xs" href="modules/user/proses.php?act=delete&id=<?php echo $data['id_user'];?>" onclick="return confirm('estas seguro de eliminar este usuario <?php echo $data['name_user']; ?> ?');">
                        <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
              </a>
              
              <?php
                       echo "    
                       </div>
                      </td>
                    </tr>";
              $no++;
                        }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content