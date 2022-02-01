<style>
  .botones{
    height: 36px;
    margin-right: 2px;
  }

  input[type=file] {
    opacity: 0;
    width: 100%;
    height: 100%;  
  }

  .textoInput{
    margin-top:-22px;
    text-align: center;
  }

  .anchoInput{
    width:160px;
  }

</style>
<script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.xlsx)$/i;
    
    if(!extPermitidas.exec(archivoRuta)){
        alert('Asegurese de haber seleccionado un archivo de extension xlsx');
        archivoInput.value = '';
        return false;
    }
}
  </script>

<section class="content-header">
  <!--<div id="visorArchivo"></div>-->

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body table-responsive">

          <table class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th class="center">CODIGO</th>
                <th class="center">DESCRIPCION</th>
				        <th class="center">MARCA</th>
                <th class="center">MODELO</th>
                <th class="center">SERIAL</th>
                <th class="center">N° BIEN</th>
              </tr>
           
            </thead>
            <tbody>
           
            <?php  
            require "../../config/database.php";
            //echo $_POST['id'];
            
            if (isset($_POST['id'])) {
              $id = $_POST['id'];
           $query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE codigo='$id'") 
          or die('error: '.mysqli_error($mysqli));
         // $data = mysqli_fetch_assoc($query);        
        
            while ($data = mysqli_fetch_assoc($query)) { 
           

              echo "<tr>
                       <td width='100' class='center'>$data[codigo]</td>
                       <td width='100' class='center'>$data[descripcion]</td>
                       <td width='100' class='center'>$data[marca]</td>
                       <td width='100' class='center'>$data[modelo]</td>
                       <td width='100' class='center'>$data[serial]</td>
                       <td width='100' class='center'>$data[bienesN]</td>";

              echo "    </div>
                      </td>
                    </tr>";
            }
            if (!$data['foto']) { ?>
              <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/inventario/cargar.jpg" width="128">
            <?php
            }
            else { ?>
              <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/inventario/<?php echo $data['foto']; ?>" width="128">
            <?php
            }
          }
                ?>



            <script src="assets/js/datatables.min.js" type="text/javascript"></script>
            <script>


                /*$(document).ready( function () {
                $('#dataTables1').DataTable();*/
            // } );
      
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
            </tbody>
          </table>


          <table class="table table-bordered table-striped table-hover">
      
      <thead>
        <tr>
          <th class="center">SERIAL</th>
          <th class="center">COMPONENTE</th>
          <th class="center">CLASE</th>
          <th class="center">CAPACIDAD</th>
          <th class="center">MARCA</th>
          <th class="center">MODELO</th>
          <th class="center">CONDICION</th>
          <th class="center">VOLTAJE</th>
          <th class="center">CERTIFICACION</th>
        </tr>
     
      </thead>
      <tbody>
     
      <?php  
      require "../../config/database.php";
      //echo $_POST['id'];
      
      if (isset($_POST['id'])) {
        $id = $_POST['id'];
     $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$id'") 
    or die('error: '.mysqli_error($mysqli));
   // $data = mysqli_fetch_assoc($query);        
  

      while ($data = mysqli_fetch_assoc($query)) { 
                          
        echo "<tr>
  
                <td width='50' class='center'>$data[serial]</td>
                <td width='90' class='center'>$data[componente]</td>
                <td width='90' class='center'>$data[clase]</td>
                <td width='90' class='center'>$data[capacidad]</td>
                <td width='90' class='center'>$data[marca]</td>
                <td width='90' class='center'>$data[modelo]</td>
                <td width='90' class='center'>$data[condicion]</td>
                <td width='90' class='center'>$data[voltaje]</td>
                <td width='90' class='center'>$data[certificacion]</td>";
        echo "    </div>
                </td>
              </tr>";
      }
    }
      
      ?>



      <script src="assets/js/datatables.min.js" type="text/javascript"></script>
      <script>


          /*$(document).ready( function () {
          $('#dataTables1').DataTable();*/
      // } );

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
      </tbody>
    </table>


        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content
<section class="content-header">