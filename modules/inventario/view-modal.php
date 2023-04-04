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



<html>
<head>
<title>Nuevo documento</title>

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

function imprimirSeleccion(nombre) {
var ficha = document.getElementById(nombre);
var ventimp = window.open(' ', 'popimpr');
ventimp.document.write('<html><head><title></title>');
ventimp.document.write('<link rel="stylesheet" type="text/css" href="assets/css/style.css">'); //Aquí agregué la hoja de estilos
ventimp.document.write('<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">');
//ventimp.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">');
ventimp.document.write('</head><body >');
ventimp.document.write( ficha.innerHTML );
ventimp.document.close();
ventimp.print( );
ventimp.close();
}

</script>

</head>
<body>
<section class="content-header" id="div_print">
  <!--<div id="visorArchivo"></div>-->

  <table border="0">
        <tr>
            <td><img src="assets/img/Cintillo MINCYT.png" width="300" align='center' ;></td>
            <td width="400"></td>
            <td><img src="assets/img/ABAE Logo.png" width="150" align='center' ;></td>
        </tr>
    </table>


<section class="content">
  <div class="row" id="div_print">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body table-responsive">
        <h3 align='center'><b>FICHA RESUMEN DEL EQUIPO</b></h3>
        </br>

          <table class="table table-bordered table-striped table-hover" align='center'>
      
            <thead>
              <tr>
                <th class="center">Código</th>
                <th class="center">Descripción</th>
				        <th class="center">Marca</th>
                <th class="center">Modelo</th>
                <th class="center">Serial</th>
                <th class="center">N° Bien</th>
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
             $foto = "";

            while ($data= mysqli_fetch_assoc($query)) { 

           
              
              echo "<tr>
                       <td width='100' class='center'>$data[codigo]</td>
                       <td width='100' class='center'>$data[descripcion]</td>
                       <td width='100' class='center'>$data[marca]</td>
                       <td width='100' class='center'>$data[modelo]</td>
                       <td width='100' class='center'>$data[serial]</td>
                       <td width='100' class='center'>$data[bienesN]</td>";
                      
                        $foto = $data['foto'];
              
            }
          }

          ?> </tbody>


          </table><?php

          if (!$foto) { ?> 
          </br>
            <div align='center'> <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/inventario/cargar.jpg" width="128"></div>
            </br>
           <?php
           }
           else {  ?>
           </br>
              <div align='center' ><img style="border:1px solid #eaeaea;border-radius:5px;" src="images/inventario/<?php echo $foto; ?>" width="150"></div>
              </br>
             <?php
           }
           

          
        ?></script>
            


          <table class="table table-bordered table-striped table-hover" align='center'>
      
      <thead>
        <tr>
          <th class="center">Componente</th>
          <th class="center">Clase</th>
          <th class="center">Capacidad</th>
          <th class="center">Marca</th>
          <th class="center">Modelo</th>          
          <th class="center">Serial</th>
          <th class="center">Condición</th>
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
  
                <td width='90' class='center'>$data[componente]</td>
                <td width='90' class='center'>$data[clase]</td>
                <td width='90' class='center'>$data[capacidad]</td>
                <td width='90' class='center'>$data[marca]</td>
                <td width='90' class='center'>$data[modelo]</td>                
                <td width='50' class='center'>$data[serial]</td>
                <td width='90' class='center'>$data[condicion]</td>
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
</section><!-- /.content-->
  </body>
  <div style='text-align:right' >
  <a type="button" href="javascript:imprimirSeleccion('div_print')" class="btn btn-default">Imprimir</a>
  <a type="button" class="btn btn-default" data-dismiss="modal">Cerrar</a>
  </div>
</html> 