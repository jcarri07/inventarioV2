<?php
//Accesos del super admin
if ($_SESSION['permisos_acceso'] == 'Super Admin') { ?>

	<ul class="sidebar-menu">
		<li class="header">MENU</li>

		<?php

		if ($_GET["module"] == "start") {
			$active_home = "active";
		} else {
			$active_home = "";
		}
		?>
		<li class="<?php echo $active_home; ?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
		</li>
		<?php

		//Inventarios
		/*if ($_GET["module"]=="inventario" || $_GET["module"]=="form_inventario") { ?>
    <li class="active">
      <a href="?module=inventario"><i class="fa fa-folder"></i> Inventarios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=inventario"><i class="fa fa-folder"></i> Inventarios </a>
      </li>
  <?php
  }*/

		//TODOS los inventarios

		if ($_GET["module"] == "inventario") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=inventario"><i class="fa fa-circle-o"></i> Comunicación </a></li>
					<li><a href="?module=mobiliario_equipoOficina"><i class="fa fa-circle-o"></i> Mobiliario y de oficina</a></li>
					<li><a href="?module=refrigeracion_electrodomesticos"><i class="fa fa-circle-o"></i> Refrigeracion y Electrodomesticos</a></li>
					<li><a href="?module=equiposcientificos_electricos"><i class="fa fa-circle-o"></i> Cientificos y Electronicos</a></li>
					<li><a href="?module=equipos_seguridad"><i class="fa fa-circle-o"></i> Seguridad</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a href="?module=vehiculos"><i class="fa fa-circle-o"></i> Vehiculos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "inventario") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=inventario"><i class="fa fa-circle-o"></i> Comunicación </a></li>
					<li><a href="?module=mobiliario_equipoOficina"><i class="fa fa-circle-o"></i> Mobiliario y de oficina</a></li>
					<li><a href="?module=refrigeracion_electrodomesticos"><i class="fa fa-circle-o"></i> Refrigeracion y electrodomesticos</a></li>
					<li><a href="?module=equiposcientificos_electricos"><i class="fa fa-circle-o"></i> Cientificos y electronicos</a></li>
					<li><a href="?module=equipos_seguridad"><i class="fa fa-circle-o"></i> Seguridad</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a href="?module=vehiculos"><i class="fa fa-circle-o"></i> Vehiculos</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=inventario"><i class="fa fa-circle-o"></i> Comunicación </a></li>
					<li><a href="?module=mobiliario_equipoOficina"><i class="fa fa-circle-o"></i> Mobiliario y de Oficina</a></li>
					<li><a href="?module=refrigeracion_electrodomesticos"><i class="fa fa-circle-o"></i> Refrigeracion y Electrodomesticos</a></li>
					<li><a href="?module=equiposcientificos_electricos"><i class="fa fa-circle-o"></i> Cientificos y Electronicos</a></li>
					<li><a href="?module=equipos_seguridad"><i class="fa fa-circle-o"></i> Seguridad</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a href="?module=vehiculos"><i class="fa fa-circle-o"></i> Vehiculos</a></li>
				</ul>
			</li>
		<?php
		}

		/*----------------------------------------------------------------------------------------------------

		//Control de equipos
		if ($_GET["module"] == "transaccion_equipos" || $_GET["module"] == "form_transaccion_equipos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		}*/
	    /*-------------------------------------------------------------------------------------------------*/


		if ($_GET["module"] == "transaccion_equipos") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Control de equipos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Control de Equipos </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Control de Biblioteca </a></li>
				<li> <a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Control de Inmuebles </a></li>
				<li>  <a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-circle-o"></i> Control de Vehiculos </a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "transaccion_equipos") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Control de equipos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Control de Equipos </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Control de Biblioteca </a></li>
				<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Control de Inmuebles </a></li>
				<li><a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-circle-o"></i> Control de Vehiculos </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Control de equipos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Control de Equipos </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Control de Biblioteca </a></li>
				<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Control de Inmuebles </a></li>
				<li><a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-circle-o"></i> Control de Vehiculos </a></li>
				</ul>
			</li>
		<?php
		}

		
      /*-------------------------------------------------------------------------------------------------*/
	/*	//Control de equipos biblioteca 
		if ($_GET["module"] == "transaccion_equipos_biblioteca" || $_GET["module"] == "form_transaccion_equipos_biblioteca") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		}

		//Control de equipos vehiculos 
		if ($_GET["module"] == "transaccion_equipos_vehiculos" || $_GET["module"] == "form_transaccion_equipos_vehiculos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		}

		//Control de equipos inmuebles 
		if ($_GET["module"] == "transaccion_equipos_inmuebles" || $_GET["module"] == "form_transaccion_equipos_inmuebles") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		}*/

		//Informes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informe</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		}

		//Administrar usuarios
		if ($_GET["module"] == "user" || $_GET["module"] == "form_user") { ?>
			<li class="active">
				<a href="?module=user"><i class="fa fa-user"></i> Administrar Usuarios</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=user"><i class="fa fa-user"></i> Administrar Usuarios</a>
			</li>
		<?php
		}

		//Respaldo

		if ($_GET["module"] == "backup") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);" action="modules\backup\php_excel2.php">
					<i class="fa fa-file-text"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a data-toggle="modal" data-target="#exampleModalCenter" ><i class="fa fa-save"></i> Inventario </a></li>
					<li><a href="#respaldo"><i class="fa fa-save"></i> Control de Movimientos</a></li>
					<li><a href="#respaldo2"><i class="fa fa-save"></i> Biblioteca</a></li>
					<li><a href="#respaldo3"><i class="fa fa-save"></i> Inmuebles</a></li>
					<li><a href="#respaldo4"><i class="fa fa-save"></i> Vehiculos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "backup") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-save"></i> Inventario </a></li>
					<li class="active"><a href="?module=backup/php_excel2.php"><i class="fa fa-save"></i>Control de Movimientos</a></li>
					<li><a href="#respaldo2"><i class="fa fa-save"></i> Biblioteca</a></li>
					<li><a href="#respaldo3"><i class="fa fa-save"></i> Inmuebles</a></li>
					<li><a href="#respaldo4"><i class="fa fa-save"></i> Vehiculos</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-database"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a data-toggle="modal" href="#respaldo"><i class="fa fa-save"></i>Inventario </a></li>
					<li><a data-toggle="modal" href="#respaldo1"><i class="fa fa-save"></i> Control de Movimientos </a></li>
					<li><a data-toggle="modal" href="#respaldo2"><i class="fa fa-save"></i> Biblioteca</a></li>
					<li><a data-toggle="modal" href="#respaldo3"><i class="fa fa-save"></i> Inmuebles</a></li>
					<li><a data-toggle="modal" href="#respaldo4"><i class="fa fa-save"></i> Vehiculos</a></li>
				</ul>
			</li>


		<?php
		}

		//Historial
		if ($_GET["module"] == "history" || $_GET["module"] == "") { ?>
			<li class="active">
				<a href="?module=history"><i class="fa fa-history"></i> Historial </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=history"><i class="fa fa-history"></i> Historial </a>
			</li>
		<?php
		}

		//Cambiar Contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		}
		?>
	</ul>

<?php
}

//Accesos de trabajador
elseif ($_SESSION['permisos_acceso'] == 'Trabajador') { ?>
	<!-- sidebar menu start -->
	<ul class="sidebar-menu">
		<li class="header">MENU</li>

		<?php

		//Inicio
		if ($_GET["module"] == "start") { ?>
			<li class="active">
				<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
			</li>
		<?php
		}

		//Inventarios
		/*if ($_GET["module"]=="inventario" || $_GET["module"]=="form_inventario") { ?>
    <li class="active">
      <a href="?module=inventario"><i class="fa fa-folder"></i> Inventarios </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=inventario"><i class="fa fa-folder"></i> Inventarios </a>
      </li>
  <?php
  }*/

		//Informes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		}

		if ($_GET["module"] == "transaccion_equipos" || $_GET["module"] == "form_transaccion_equipos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		}

		//Control de equipos biblioteca 
		if ($_GET["module"] == "transaccion_equipos_biblioteca" || $_GET["module"] == "form_transaccion_equipos_biblioteca") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		}

		//Control de equipos vehiculos 
		if ($_GET["module"] == "transaccion_equipos_vehiculos" || $_GET["module"] == "form_transaccion_equipos_vehiculos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		}

		//Control de equipos inmuebles 
		if ($_GET["module"] == "transaccion_equipos_inmuebles" || $_GET["module"] == "form_transaccion_equipos_inmuebles") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		}

		//Cambiar contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		}
		?>
	</ul>
<?php
}

//Acceso del admin
if ($_SESSION['permisos_acceso'] == 'Admin') { ?>

	<ul class="sidebar-menu">
		<li class="header">MENU</li>

		<?php

		//Inicio
		if ($_GET["module"] == "start") { ?>
			<li class="active">
				<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
			</li>
		<?php
		}

		//Inventarios
		if ($_GET["module"] == "inventario" || $_GET["module"] == "form_inventario") { ?>
			<li class="active">
				<a href="?module=inventario"><i class="fa fa-folder"></i> Inventarios </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=inventario"><i class="fa fa-folder"></i>Inventarios</a>
			</li>
		<?php
		}

		//Control de equipos
		if ($_GET["module"] == "transaccion_equipos" || $_GET["module"] == "form_transaccion_equipos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos"><i class="fa fa-clone"></i> Control de Equipos </a>
			</li>
		<?php
		}

		//Control de equipos biblioteca 
		if ($_GET["module"] == "transaccion_equipos_biblioteca" || $_GET["module"] == "form_transaccion_equipos_biblioteca") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-clone"></i> Control de Biblioteca </a>
			</li>
		<?php
		}

		//Control de equipos vehiculos 
		if ($_GET["module"] == "transaccion_equipos_vehiculos" || $_GET["module"] == "form_transaccion_equipos_vehiculos") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_vehiculos"><i class="fa fa-clone"></i> Control de Vehiculos</a>
			</li>
		<?php
		}

		//Control de equipos inmuebles 
		if ($_GET["module"] == "transaccion_equipos_inmuebles" || $_GET["module"] == "form_transaccion_equipos_inmuebles") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-clone"></i> Control de Inmuebles</a>
			</li>
		<?php
		}

		//Informes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes</a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Reportes </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Control de Movimientos </a></li>
				</ul>
			</li>
		<?php
		}

		//Administrar usuarios
		if ($_GET["module"] == "user" || $_GET["module"] == "form_user") { ?>
			<li class="active">
				<a href="?module=user"><i class="fa fa-user"></i> Administrar Usuarios</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=user"><i class="fa fa-user"></i> Administrar Usuarios</a>
			</li>
		<?php
		}

		//Cambiar contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Cambiar Contraseña</a>
			</li>
		<?php
		}
		?>
	</ul>


<?php
}
?>