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

		if ($_GET["module"] == "maquinaria") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria</a></li>
					<li><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "maquinaria") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria</a></li>
					<li onclick=hola()><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria </a></li>
					<li ><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
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
					<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
				<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
				<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "transaccion_equipos") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
				<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
				<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
				<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
				<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
				<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
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

		//Control de equipos transporte 
		if ($_GET["module"] == "transaccion_equipos_transporte" || $_GET["module"] == "form_transaccion_equipos_transporte") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
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

		//Reportes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
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

		//Respaldo
		if ($_GET["module"] == "backup") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);" action="modules\backup\php_excel2.php">
					<i class="fa fa-download"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a data-toggle="modal" href="#respaldo1"><i class="fa fa-circle-o"></i> Equipos </a></li>
					<li><a data-toggle="modal" href="#respaldo3"><i class="fa fa-circle-o"></i> Transporte</a></li>
					<li><a data-toggle="modal" href="#respaldo2"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a data-toggle="modal" href="#respaldo4"><i class="fa fa-circle-o"></i> Inmuebles</a></li>
					<li><a data-toggle="modal" href="#respaldo5"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "backup") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-download"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"><a data-toggle="modal" href="#respaldo1"><i class="fa fa-circle-o"></i> Equipos </a></li>
				<li><a data-toggle="modal" href="#respaldo3"><i class="fa fa-circle-o"></i> Transporte</a></li>
					<li><a data-toggle="modal" href="#respaldo2"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a data-toggle="modal" href="#respaldo4"><i class="fa fa-circle-o"></i> Inmuebles</a></li>
					<li><a data-toggle="modal" href="#respaldo5"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-download"></i> <span>Respaldo</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li class="active"><a data-toggle="modal" href="#respaldo1"><i class="fa fa-circle-o"></i> Equipos </a></li>
				<li><a data-toggle="modal" href="#respaldo3"><i class="fa fa-circle-o"></i> Transporte</a></li>
					<li><a data-toggle="modal" href="#respaldo2"><i class="fa fa-circle-o"></i> Biblioteca</a></li>
					<li><a data-toggle="modal" href="#respaldo4"><i class="fa fa-circle-o"></i> Inmuebles</a></li>
					<li><a data-toggle="modal" href="#respaldo5"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		}

		//Administrar usuarios
		if ($_GET["module"] == "user" || $_GET["module"] == "form_user") { ?>
			<li class="active">
				<a href="?module=user"><i class="fa fa-user"></i> Usuarios</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=user"><i class="fa fa-user"></i> Usuarios</a>
			</li>
		<?php
		}

		//Cambiar Contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
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

		
//DESPLEGABLE MOVIMIENTOS

if ($_GET["module"] == "transaccion_equipos") { ?>
	<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
} elseif ($_GET["module"] == "transaccion_equipos") { ?>
	<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
} else { ?>
	<li class="treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
}
/*
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

		//Control de equipos transporte 
		if ($_GET["module"] == "transaccion_equipos_transporte" || $_GET["module"] == "form_transaccion_equipos_transporte") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
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
*/

		//Reportes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
				</ul>
			</li>
		<?php
		}

		//Cambiar contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
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
		//TODOS los inventarios

		if ($_GET["module"] == "maquinaria") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria</a></li>
					<li><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "maquinaria") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria</a></li>
					<li onclick=hola()><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-table"></i> <span>Inventarios</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=maquinaria"><i class="fa fa-circle-o"></i>Maquinaria </a></li>
					<li ><a class="btn_mblr" href="?module=transporte"><i class="fa fa-circle-o"></i>Transporte</a></li>
					<li><a href="?module=oficina"><i class="fa fa-circle-o"></i>Comunicaciones</a></li>
					<li><a href="?module=medicos"><i class="fa fa-circle-o"></i>Médicos</a></li>
					<li><a href="?module=cientificos"><i class="fa fa-circle-o"></i>Científicos</a></li>
					<li><a href="?module=biblioteca"><i class="fa fa-circle-o"></i>Biblioteca</a></li>
					<li><a href="?module=inventario"><i class="fa fa-circle-o"></i>Oficina</a></li>
					<li><a href="?module=inmuebles"><i class="fa fa-circle-o"></i>Inmuebles</a></li>
				</ul>
			</li>
		<?php
		}

//DESPLEGABLE MOVIMIENTOS

if ($_GET["module"] == "transaccion_equipos") { ?>
	<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
} elseif ($_GET["module"] == "transaccion_equipos") { ?>
	<li class="active treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
} else { ?>
	<li class="treeview">
		<a href="javascript:void(0);">
			<i class="fa fa-calendar-o"></i> <span>Movimientos</span> <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		<li class="active"> <a href="?module=transaccion_equipos"><i class="fa fa-circle-o"></i> Equipos </a></li>
		<li><a href="?module=transaccion_equipos_transporte"><i class="fa fa-circle-o"></i> Transporte </a></li>
		<li> <a href="?module=transaccion_equipos_biblioteca"><i class="fa fa-circle-o"></i> Biblioteca </a></li>
		<li><a href="?module=transaccion_equipos_inmuebles"><i class="fa fa-circle-o"></i> Inmuebles </a></li>
		</ul>
	</li>
<?php
}
/*		//Control de equipos
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

		//Control de equipos transporte 
		if ($_GET["module"] == "transaccion_equipos_transporte" || $_GET["module"] == "form_transaccion_equipos_transporte") { ?>
			<li class="active">
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=transaccion_equipos_transporte"><i class="fa fa-clone"></i> Control de transporte</a>
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
*/
		//Reportes
		if ($_GET["module"] == "stock_inventory") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios</a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
				</ul>
			</li>
		<?php
		} elseif ($_GET["module"] == "stock_report") { ?>
			<li class="active treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
				</ul>
			</li>
		<?php
		} else { ?>
			<li class="treeview">
				<a href="javascript:void(0);">
					<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Inventarios </a></li>
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Movimientos </a></li>
				</ul>
			</li>
		<?php
		}

		//Administrar usuarios
		if ($_GET["module"] == "user" || $_GET["module"] == "form_user") { ?>
			<li class="active">
				<a href="?module=user"><i class="fa fa-user"></i> Usuarios</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=user"><i class="fa fa-user"></i> Usuarios</a>
			</li>
		<?php
		}

		//Cambiar contraseña
		if ($_GET["module"] == "password") { ?>
			<li class="active">
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
			</li>
		<?php
		} else { ?>
			<li>
				<a href="?module=password"><i class="fa fa-lock"></i> Contraseña</a>
			</li>
		<?php
		}
		?>
	</ul>
<?php
}
?>