

<?php  
	require_once "../../config/database.php";
	$var1=$_GET['var'];
	$coma = ".";

	$query = mysqli_query($mysqli, "SELECT * FROM inventario WHERE serial = '$var1'")
                                    or die('error'.mysqli_error($mysqli));

    $rows  = mysqli_num_rows($query);

    if ($rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $var2   = $data['descripcion'];
    	$var3	= $data['marca'];
    	$var4	= $data['modelo'];	
    	$var5	= $data['color'];
    	$var6	= $data['bienesN'];
    	$var7	= $data['condicion'];
    	$var8	= $data['sede'];
    	$var9   = $data['pertenece'];
    	$var10   = $data['nombre'];
    	$var11   = $data['cedula'];
    	$var12   = $data['ubicacion'];
    }

    $var1 = " SERIAL: ".$data['serial'];
    $var2 = " DESCRIPCION: ".$data['descripcion'];
    $var3 = " MARCA: ".$data['marca'];
    $var4 = " MODELO: ".$data['modelo'];
    $var5 = " COLOR: ".$data['color'];
    $var6 = " COD. BIENES NAC.: ".$data['bienesN'];
    $var7 = " CONDICION: ".$data['condicion'];
    $var8 = " SEDE: ".$data['sede'];
    $var9 = " PERTENECE: ".$data['pertenece'];
    $var10 = " RESPONSABLE: ".$data['nombre'];
    $var11 = " CEDULA: ".$data['cedula'];
    $var12 = " UBICACION: ".$data['ubicacion'];
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Generar códigos QR con</title>

    
	<div class="container" >
	<h1>Generar código QR</h1>
	<form method="post" id="generador">
	<div class="row">
	<div class="col-md-1">
		  <div class="form-group">
			<textarea name="textarea" hidden="hidden" rows="10" cols="50" class="form-control" id="textqr" required><?php echo $var1.$coma. PHP_EOL ;
			echo $var2.$coma. PHP_EOL; 
			echo $var3.$coma. PHP_EOL; 
			echo $var4.$coma. PHP_EOL; 
			echo $var5.$coma. PHP_EOL; 
			echo $var6.$coma. PHP_EOL; 
			echo $var7.$coma. PHP_EOL; 
			echo $var8.$coma. PHP_EOL; 
			echo $var9.$coma. PHP_EOL; 
			echo $var10.$coma. PHP_EOL;  
			echo $var11.$coma. PHP_EOL; 
			echo $var12.$coma. PHP_EOL; ?></textarea>
			
		  </div>  
	</div>
	
	<div class="col-md-2">
		  <div class="form-group">
			<label for="textqr">Tamaño</label>
			<select class="form-control" id="sizeqr">
				<option value="100">100 px</option>
				<option value="200">200 px</option>
				<option value="300"selected>300 px</option>
				<option value="400">400 px</option>
				<option value="500">500 px</option>
			</select>
		  </div>
		  <button class="cargar btn btn-primary" onclick='myFunction()' type="submit">Generar</button>
		  
	</div>
	<div class="col-md-6">
		<div class="result"> 
		</div>
	</div>
	</div>   
</form>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$( "#generador" ).submit(function( event ) {
			var textqr=$("#textqr").val();
			var sizeqr=$("#sizeqr").val();
			parametros={"textqr":textqr,"sizeqr":sizeqr};
			 $.ajax({
				type: "POST",
				url: "qr.php",
				data: parametros,
				success: function(datos){
					$(".result").html(datos);
				}
				 
			 })
			
		  event.preventDefault();
		});

		$(document).ready(function(){
   		$(".cargar").click();
		});
			function myFunction(){
			console.log("cargando");

		}
	</script>