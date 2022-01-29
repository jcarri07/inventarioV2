<section class="content-header">
  <h1>
    <i class="fa fa-history icon-title"></i> Historial   
  </h1>
  <ol class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
    <li class="active"> Historial </li>
  </ol>
<br>

<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">-->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/Datatables-10.10.20/css/dataTables.bootstrap4.min.css">
    <div class="box box-primary">
      <form role="form" class="form-horizontal" method="GET" action="modules/history/print_filter_history.php" target="_blank">
        <div class="box-body">
        
          <div class="form-group">

            <label style="margin-left:40px" class="col-sm-1">Fecha</label>
            <div class="col-sm-2">
              <input style="margin-left:-40px" type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal2" autocomplete="off" required>
            </div>

            <label style="margin-left:-10px" class="col-sm-1">Hasta</label>
            <div class="col-sm-2">
              <input style="margin-left:-40px" type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_akhir2" autocomplete="off" required>
            </div>
          </div>
          
          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 120px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>

</section>

<!-- Main content -->
<section  class="content">
  <form name="formulario" method="post" action="modules/stock_inventory/print_filter.php">          

  <div class="row">
    <div class="col-md-12">    
      <div class="box box-primary" >
        <div class="box-body" id="contenido">

          <section>
            <a class="btn btn-primary btn-social pull-right" href="modules/stock_inventory/print_history.php" style="height:35px;" target="_blank">
              <i class="fa fa-print"></i> Imprimir historial
            </a>
            </br></br>
          </section>

          <p STYLE="color: #EEEEEE;"></p>
          <table id="dataTables" class="table table-bordered table-striped table-hover" >
            <thead>
              <tr>
                <th class="center">NO.</th>
                <th class="center">USUARIO</th>
                <th class="center">CEDULA</th>
                <th class="center">ID</th>
                <th class="center">FECHA</th>
                <th class="center">HORA</th>
                <th class="center">ACCION</th>
              </tr>
            </thead>
            <tbody>
            <?php  
              require_once "config/database.php";

              $no = 1;
          
              $query = mysqli_query($mysqli, "SELECT nombre, cedula, permiso, accion, fecha, hora, permiso FROM history ORDER BY fecha DESC") 
                        or die('Error: '.mysqli_error($mysqli));

           
              while ($data = mysqli_fetch_assoc($query)) { 
                $originalDate = $data['fecha'];
                $fecha = date("d-m-Y", strtotime($originalDate));
              
                echo "<tr>
                <td width='50'  class='center'>$no</td>
                <td width='200' class='center'>$data[nombre]</td>
                <td width='200' class='center'>$data[cedula]</td>
                <td width='200' class='center'>$data[permiso]</td>
                <td width='200' class='center'>$fecha</td>
                <td width='200' class='center'>$data[hora]</td>
                <td width='200' class='center'>$data[accion]</td>
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
</section><!-- /.content </div> /.login-box-body -->
</div><!-- /.login-box -->
    <!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>*-->
    
    <!--jQuery 2.1.3--> 
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>

    <!--Bootstrap 3.3.2 JS -->
    <script src="assets/js/datatables.min.js" type="text/javascript"></script>

    <script>


      $(document).ready( function () {
        $('#dataTables').DataTable();
      } );
      
      $(document).ready(function(){
        load(1);
      });

    </script>
