<?php  

require_once "config/database.php";


$query = mysqli_query($mysqli, "SELECT id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
                                or die('error: '.mysqli_error($mysqli));


$data = mysqli_fetch_assoc($query);
?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1> 
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenid@ <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de inventarios
          </p>        
        </div>
      </div>  
    </div>
   
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00c0ef;color:#fff; border-radius: 5%;" class="small-box">
          <div class="inner" style="height: 30vh;">
          <div>
            <?php  
          
            $query = mysqli_query($mysqli, "SELECT COUNT(codigo) as numero FROM inventario")
                                            or die('Error '.mysqli_error($mysqli));
           
            $data = mysqli_fetch_assoc($query);
            ?>
            <h2 class = "titulo"> Inventarios </h2>
            <h2 class="prueba cantidad"> <?php echo $data['numero'];?> </h2>
            
          </div>
          </div>
         
          <div class="icon iconoMenu" >
          <?php 
            if($_SESSION['permisos_acceso']=='Trabajador'){  ?>
          <a ><i class="fa fa-folder fa-2x" style="color:#000000;opacity:0.1"></i></a>
          <?php 
            }else {?>
            <a href="?module=inventario"><i class="fa fa-folder fa-2x" style="color:#000000;opacity:0.1"></i></a>
            <?php 
            }?>
           
          </div>
            <a href="?module=inventario" class="small-box-footer bordes" title="Agregar" style="height: 5vh" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
        </div>
      </div><!-- ./col -->
 
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00a65a;color:#fff; border-radius: 5%;" class="small-box">
          <div class="inner" style="height: 30vh;">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(codigo_transaccion) as numero FROM transaccion_equipos")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h2 class = "titulo"> Movimientos </h2>
            <h2 class="prueba cantidad"><?php echo $data['numero']; ?></h2>
            
          </div>
          <div class="icon iconoMenu">
            <a href="?module=transaccion_equipos"><i class="fa fa-sign-in fa-2x" style="color:#000000;opacity:0.1"></i>
          </div>
     
            <a href="?module=transaccion_equipos" class="small-box-footer bordes" title="Agregar" style="height: 5vh" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#f39c12;color:#fff; border-radius: 5%;" class="small-box">
          <div class="inner" style="height: 30vh;">
            <?php  
  
            $query = mysqli_query($mysqli, "SELECT COUNT(codigo) as numero FROM inventario")
                                            or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h2 class="prueba cantidad" ><?php echo $data['numero']; ?></h2>
            <h2 class="titulo"> Reportes </h2>
          </div>
          <div class="icon iconoMenu">
          <a href="?module=stock_inventory"><i class="fa fa-file-text-o fa-2x" style="color:#000000;opacity:0.1"></i>
            
          </div>
          <a href="?module=stock_inventory" class="small-box-footer bordes" title="Imprimir"  data-toggle="tooltip"><i class="fa fa-print"></i></a>
        </div>
      </div><!-- ./col -->

      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div style="background-color:#dd4b39;color:#fff; border-radius: 5%;" class="small-box">
          <div class="inner" style="height: 30vh;">
            <?php   
  
            $query = mysqli_query($mysqli, "SELECT COUNT(codigo_transaccion) as numero FROM transaccion_equipos")
                                            or die('Error: '.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h2 class="prueba cantidad"><?php echo $data['numero']; ?></h2>
            <h2  class= "titulo"> Historial </h2>

          </div>
          <div class="icon iconoMenu">
          <a href="?module=history"><i class="fa fa-clone fa-2x" style="color:#000000;opacity:0.1"></i>
            
          </div>
          
          <a href="?module=history" class="small-box-footer bordes" title="Imprimir" data-toggle="tooltip"><i class="fa fa-print"></i></a>
          
        </div>
      </div><!-- ./col -->
    </div><!-- /.row -->
  </section><!-- /.content -->
  