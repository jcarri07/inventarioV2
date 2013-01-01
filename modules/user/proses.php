

<?php
session_start();


require_once "../../config/database.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {

	if ($_GET['act']=='insert') {
		if (isset($_POST['Guardar'])) {
	
			$username  = mysqli_real_escape_string($mysqli, trim($_POST['username']));
			$password  = mysqli_real_escape_string($mysqli, trim($_POST['password']));
			$name_user = mysqli_real_escape_string($mysqli, trim($_POST['name_user']));
			$cedula = mysqli_real_escape_string($mysqli, trim($_POST['cedula_user']));
			$sede = mysqli_real_escape_string($mysqli, trim($_POST['sede']));
			$permisos_acceso = mysqli_real_escape_string($mysqli, trim($_POST['permisos_acceso']));

            $query = mysqli_query($mysqli, "INSERT INTO usuarios(username,password,name_user,permisos_acceso,sede,cedula_user)
                                            VALUES('$username','$password','$name_user','$permisos_acceso','$sede','$cedula')")
                                            or die('error: '.mysqli_error($mysqli));    

          
            if ($query) {
                header("location: ../../main.php?module=user&alert=1");
            }
		}	
	}
	
	elseif ($_GET['act']=='update') {
		if (isset($_POST['Guardar'])) {
			if (isset($_POST['id_user'])) {
				$id_user            = mysqli_real_escape_string($mysqli, trim($_POST['id_user']));
				$username           = mysqli_real_escape_string($mysqli, trim($_POST['username']));
				$password           = mysqli_real_escape_string($mysqli, trim($_POST['password']));
				$name_user          = mysqli_real_escape_string($mysqli, trim($_POST['name_user']));
				$sede          		= mysqli_real_escape_string($mysqli, trim($_POST['sede']));
				$cedula        		= mysqli_real_escape_string($mysqli, trim($_POST['cedula_user']));
				$email              = mysqli_real_escape_string($mysqli, trim($_POST['email']));
				$telefono           = mysqli_real_escape_string($mysqli, trim($_POST['telefono']));
				$permisos_acceso    = mysqli_real_escape_string($mysqli, trim($_POST['permisos_acceso']));
				
				$name_file          = $_FILES['foto']['name'];
				$ukuran_file        = $_FILES['foto']['size'];
				$tipe_file          = $_FILES['foto']['type'];
				$tmp_file           = $_FILES['foto']['tmp_name'];
				
		
				$allowed_extensions = array('jpg','jpeg','png');
				
			
				$path_file          = "../../images/user/".$name_file;
		
				$file               = explode(".", $name_file);
				$extension          = array_pop($file);

				if (empty($_POST['password']) && empty($_FILES['foto']['name'])) {
					
                    $query = mysqli_query($mysqli, "UPDATE usuarios SET username 	= '$username',
                    													name_user 	= '$name_user',
                    													sede        = '$sede',
                    													cedula_user = '$cedula', 
                    													email       = '$email',
                    													telefono     = '$telefono',
                    													permisos_acceso   = '$permisos_acceso'
                                                                  WHERE id_user 	= '$id_user'")
                                                    or die('error: '.mysqli_error($mysqli));

                
                    if ($query) {
                  
                        header("location: ../../main.php?module=user&alert=2");
                    }
				}
		
				elseif (!empty($_POST['password']) && empty($_FILES['foto']['name'])) {
					
                    $query = mysqli_query($mysqli, "UPDATE usuarios SET username 	= '$username',
                    													name_user 	= '$name_user',
                    													sede        = '$sede', 
                    													cedula_user = '$cedula', 
                    													password 	= '$password',
                    													email       = '$email',
                    													telefono     = '$telefono',
                    													permisos_acceso   = '$permisos_acceso'
                                                                  WHERE id_user 	= '$id_user'")
                                                    or die('error : '.mysqli_error($mysqli));

             
                    if ($query) {
                    
                        header("location: ../../main.php?module=user&alert=2");
                    }
				}
				
				elseif (empty($_POST['password']) && !empty($_FILES['foto']['name'])) {
			
					if (in_array($extension, $allowed_extensions)) {
	                
	                    if($ukuran_file <= 1000000) { 
	                        
	                        if(move_uploaded_file($tmp_file, $path_file)) { 
                        		
			                    $query = mysqli_query($mysqli, "UPDATE usuarios SET username 	= '$username',
			                    													name_user 	= '$name_user',
			                    													sede        = '$sede', 
			                    													cedula_user = '$cedula_user', 
			                    													email       = '$email',
			                    													telefono     = '$telefono',
			                    													foto 		= '$name_file',
			                    													permisos_acceso   = '$permisos_acceso'
			                                                                  WHERE id_user 	= '$id_user'")
			                                                    or die('error : '.mysqli_error($mysqli));

			                    if ($query) {
			                    
			                        header("location: ../../main.php?module=user&alert=2");
			                    }
                        	} else {
	                           
	                            header("location: ../../main.php?module=user&alert=5");
	                        }
	                    } else {
	                       
	                        header("location: ../../main.php?module=user&alert=6");
	                    }
	                } else {
	                   
	                    header("location: ../../main.php?module=user&alert=7");
	                } 
				}
				
				else {
					
					if (in_array($extension, $allowed_extensions)) {
	                   
	                    if($ukuran_file <= 1000000) { 
	                       
	                        if(move_uploaded_file($tmp_file, $path_file)) { 
                        		
			                    $query = mysqli_query($mysqli, "UPDATE usuarios SET username 	= '$username',
			                    													name_user 	= '$name_user',
			                    													sede        = '$sede', 
			                    													cedula_user = '$cedula_user', 
			                    													password    = '$password',
			                    													email       = '$email',
			                    													telefono     = '$telefono',
			                    													foto 		= '$name_file',
			                    													permisos_acceso   = '$permisos_acceso'
			                                                                  WHERE id_user 	= '$id_user'")
			                                                    or die('error: '.mysqli_error($mysqli));

			                    
			                    if ($query) {
			                       
			                        header("location: ../../main.php?module=user&alert=2");
			                    }
                        	} else {
	                            
	                            header("location: ../../main.php?module=user&alert=5");
	                        }
	                    } else {
	                       
	                        header("location: ../../main.php?module=user&alert=6");
	                    }
	                } else {
	                
	                    header("location: ../../main.php?module=user&alert=7");
	                } 
				}
			}
		}
	}


	elseif ($_GET['act']=='on' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['id'])) {
			
			$id_user = $_GET['id'];
			$status  = "activo";

		
            $query = mysqli_query($mysqli, "UPDATE usuarios SET status  = '$status'
                                                          WHERE id_user = '$id_user'")
                                            or die('error: '.mysqli_error($mysqli));

  
            if ($query) {
               
                header("location: ../../main.php?module=user&alert=3");
            }
		}
	} 

	elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] == "Super Admin") {
		if (isset($_GET['id'])) {
			
			$id_user = $_GET['id'];
			$status  = "bloqueado";

		
            $query = mysqli_query($mysqli, "UPDATE usuarios SET status  = '$status'
                                                          WHERE id_user = '$id_user'")
                                            or die('Error : '.mysqli_error($mysqli));

        
            if ($query) {
              
                header("location: ../../main.php?module=user&alert=4");
            }
		}
	}

	elseif ($_GET['act']=='delete' && $_SESSION['permisos_acceso'] == "Super Admin") {

        if (isset($_GET['id'])) {
            $id_user = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id_user =  '$id_user'")
                                            or die('error '.mysqli_error($mysqli));

            $accion = "Eliminacion de usuario";

            $query = mysqli_query($mysqli, "INSERT INTO history(nombre, accion, cedula, permiso, fecha, hora) 
                                            VALUES('$NombreUser','$accion','$cedulauser', '$iduser', NOW(), DATE_FORMAT(NOW( ), '%H:%I:%S' ))")
                                            or die('error '.mysqli_error($mysqli)); 


            if ($query) {
     
                header("location: ../../main.php?module=user&alert=4");
            }
        }
    }

    elseif ($_GET['act']=='on' && $_SESSION['permisos_acceso'] != "Super Admin") {
    	echo'<script type="text/javascript">
    		alert("No puede desbloquear un nivel superior");
    		</script>';

    		header("location: ../../main.php?module=user");
    }

    elseif ($_GET['act']=='off' && $_SESSION['permisos_acceso'] != "Super Admin") {
    	echo'<script type="text/javascript">
    		alert("No puede bloquear un nivel superior");
    		
    		</script>';

    		header("location: ../../main.php?module=user");
    }

    elseif ($_GET['act']=='delete' && $_SESSION['permisos_acceso'] != "Super Admin") {
    		
    		echo'<script type="text/javascript">
    		alert("No puede eliminar un nivel superior");
    		</script>';

    		header("location: ../../main.php?module=user");
    }
}		
?>