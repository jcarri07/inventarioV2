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
        <div class="box-body">

          <table class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">SERIAL</th>
                <th class="center">MARCA</th>
				        <th class="center">MODELO</th>
                <th class="center">CONDICION</th>
                <th class="center">DIREC/UNIDAD</th>
                <th class="center">RESPONSABLE</th>
              
              </tr>


              
            </thead>
            <tbody>
            <?php  
            $no = 1;

            
               
            if (isset($_GET['id'])) {

           $query = mysqli_query($mysqli, "SELECT * FROM componentes WHERE codigo='$_GET[id]'") 
          or die('error: '.mysqli_error($mysqli));

            }            
  
            while ($data = mysqli_fetch_assoc($query)) { 
              /*$precio_compra = format_rupiah($data['precio_compra']);
              $precio_venta = format_rupiah($data['precio_venta']);*/
           
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='50' class='center'>$data[codigo]</td>
                      <td width='90' class='center'>$data[serial]</td>
                      <td width='90' class='center'>$data[descripcion]</td>
                      <td width='90' class='center'>$data[marca]</td>
                      <td width='90' class='center'>$data[modelo]</td>
                      <td width='90' class='center'>$data[color]</td>";
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
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
