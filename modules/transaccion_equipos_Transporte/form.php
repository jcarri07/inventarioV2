
<script type="text/javascript">
  function tampil_obat(input){
    var num = input.value;

    $.post("modules/transaccion_equipos/inventario.php", {
      dataidobat: num,
    }, function(response) {      
      $('#stok').html(response)

      document.getElementById('jumlah_masuk').focus();
    });
  }

  function cek_jumlah_masuk(input) {
    jml = document.formObatMasuk.jumlah_masuk.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }

  function hitung_total_stok() {
    bil1 = document.formObatMasuk.stok.value;
    bil2 = document.formObatMasuk.jumlah_masuk.value;
	tt = document.formObatMasuk.transaccion.value;
	
    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var salida = eval(bil1) - eval(bil2);
	  var hasil = eval(bil1) + eval(bil2);
    }

	if (tt=="Salida"){
		document.formObatMasuk.total_stok.value = (salida);
	}	else {
		document.formObatMasuk.total_stok.value = (hasil);
	} 
    
  }
  
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
      <i class="fa fa-edit icon-title"></i> Agregar transacción
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=transaccion_equipos_transporte">Transporte </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/transaccion_equipos_transporte/proses.php?act=insert" method="POST" name="formObatMasuk">
            <div class="box-body">
              <?php  
            
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_transaccion,6) as codigo FROM transaccion_equipos_transporte
                                                ORDER BY codigo_transaccion DESC LIMIT 1")
                                                or die('Error : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                 
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }

              $query = mysqli_query($mysqli, "SELECT cedula_user,sede, id_user, name_user, foto, permisos_acceso FROM usuarios WHERE id_user='$_SESSION[id_user]'")
              or die('error: '.mysqli_error($mysqli));
              $data = mysqli_fetch_assoc($query);
              $_SESSION['sede'] = $data['sede'];
              $sede = $_SESSION['sede'];

              $tahun          = date("Y");
              $buat_id        = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo_transaccion = "TM-$tahun-$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Transacción</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_transaccion" value="<?php echo $codigo_transaccion; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="fecha_a" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" required>
                </div>
              </div>
              <hr>
   
              <div class="form-group">
                <label class="col-sm-2 control-label">Tipo</label>
                <div class="col-sm-5">
                <select class="form-control chosen-select" name="transaccion" id="tipo_transaccion" data-placeholder="-- Especificar --" onchange="changeTipo();">
                  <option value=""></option>
					        <option value="Salida">Salida</option>
				         	<option value="Entrada">Entrada</option>
				          </select>
                </div>
              </div>

              <div class="form-group">  
                <label class="col-sm-2 control-label">Descripción</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="codigo" data-placeholder="-- Seleccionar vehículo --" onchange="tampil_obat(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT codigo, descripcion FROM transporte ORDER BY descripcion ASC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[codigo]\"> $data_obat[codigo] | $data_obat[descripcion] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Motivo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="motivo" autocomplete="off" required>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Entrega</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="entrega" autocomplete="off"  required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cédula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula_e" onkeypress='return validaNumericos(event)' onpaste="return false" autocomplete="off"  required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="sede_entrega" name="lugar_e" value="<?php echo $sede; ?>" autocomplete="off" required readonly>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Empresa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="empresa" id="empresa_entrega" value="ABAE" autocomplete="off" required readonly>
                </div>
              </div>  

              <div class="form-group">
                <label class="col-sm-2 control-label">Recibe</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="recibe" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cédula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula_r" onkeypress='return validaNumericos(event)' onpaste="return false" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" list="item" placeholder="-- Especificar --" id="sede_recibe" name="lugar_r" autocomplete="off" required>
                    <datalist id="item">
                      <option value=""></option>
                      <option value="CTSR">CTSR</option>
                      <option value="SAT">SAT</option>
                      <option value="Baemari">Baemari</option>
                      <option value="Luepa">Luepa</option>
                      <option value="CIDE">CIDE</option>
                    </datalist>
                </div>
              </div> 

              <div class="form-group">
                <label class="col-sm-2 control-label">Empresa</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" list="empresa" placeholder="-- Especificar --" id="empresa_recibe" name="empresa_r" autocomplete="off" required>
                  <datalist id="empresa">
                    <option value=""></option>
                    <option value="ABAE">ABAE</option>
                  </datalist>
                </div>
              </div>  
			                     
            
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=transaccion_equipos_transporte" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
  <script>
    const tipo_transaccion = document.getElementById('tipo_transaccion');
    const sede_entrega = document.getElementById('sede_entrega');
    const sede_recibe = document.getElementById('sede_recibe');
    const empresa_entrega = document.getElementById('empresa_entrega');
    const empresa_recibe = document.getElementById('empresa_recibe');

    function changeTipo() {
      
      if (tipo_transaccion.value == "Entrada" || "") {
          sede_entrega.value = "";
          empresa_entrega.value = "";
          empresa_recibe.setAttribute('readonly', 'readonly');
          sede_recibe.setAttribute('readonly','readonly');

          empresa_entrega.readOnly = false;
          sede_entrega.readOnly = false;
  

          sede_recibe.value = "<?php echo $sede; ?>";
          empresa_recibe.value = "ABAE";

      } else {
          sede_entrega.value = "<?php echo $sede; ?>";

          empresa_entrega.value = "ABAE";

          empresa_entrega.setAttribute('readonly', 'readonly');
          sede_entrega.setAttribute('readonly','readonly');

          empresa_recibe.readOnly = false;
          sede_recibe.readOnly =false;

          sede_recibe.value = "";
          empresa_recibe.value = "";
      }
    }
  </script>
<?php
}
?>