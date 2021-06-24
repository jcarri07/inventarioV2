<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
} else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}
	//Equipos comunicacion
	elseif ($_GET['module'] == 'inventario') {
		include "modules/inventario/view.php";

	} elseif ($_GET['module'] == 'form_inventario') {
		include "modules/inventario/form.php";
	}
	//Equipos de refrigeracion y electrodomesticos
	elseif ($_GET['module'] == 'refrigeracion_electrodomesticos') {
		include "modules/refrigeracion_electrodomesticos/view.php";

	} elseif ($_GET['module'] == 'form_refrigeracion_electrodomesticos') {
		include "modules/refrigeracion_electrodomesticos/form.php";
	}
	//Mobiliario y equipos de oficina

	elseif ($_GET['module'] == 'mobiliario_equipoOficina') {
		include "modules/mobiliario_equipoOficina/view.php";

	} elseif ($_GET['module'] == 'form_mobiliario_equipoOficina') {
		include "modules/mobiliario_equipoOficina/form.php";
	}
	//equipos cientificos y electronicos
	elseif ($_GET['module'] == 'equiposcientificos_electricos') {
		include "modules/equiposcientificos_electricos/view.php";

	} elseif ($_GET['module'] == 'form_equiposcientificos_electricos') {
		include "modules/equiposcientificos_electricos/form.php";
	}
	
	//Equipos de seguridad
	elseif ($_GET['module'] == 'equipos_seguridad') {
		include "modules/equipos_seguridad/view.php";

	} elseif ($_GET['module'] == 'form_equipos_seguridad') {
		include "modules/equipos_seguridad/form.php";
	}

	//Equipos de biblioteca
	elseif ($_GET['module'] == 'biblioteca') {
		include "modules/biblioteca/view.php";

	} elseif ($_GET['module'] == 'form_biblioteca') {
		include "modules/biblioteca/form.php";
	}

	//Vehiculos
	elseif ($_GET['module'] == 'vehiculos') {
		include "modules/vehiculos/view.php";

	} elseif ($_GET['module'] == 'form_vehiculos') {
		include "modules/vehiculos/form.php";
	
	//transaccion equipos
	} elseif ($_GET['module'] == 'transaccion_equipos') {
		include "modules/transaccion_equipos/view.php";

	} elseif ($_GET['module'] == 'form_transaccion_equipos') {
		include "modules/transaccion_equipos/form.php";
	
	//transaccion equipos biblioteca
	} elseif ($_GET['module'] == 'transaccion_equipos_biblioteca') {
		include "modules/transaccion_equipos_biblioteca/view.php";

	} elseif ($_GET['module'] == 'form_transaccion_equipos_biblioteca') {
		include "modules/transaccion_equipos_biblioteca/form.php";
	
	//Stock inventory
	} elseif ($_GET['module'] == 'stock_inventory') {
		include "modules/stock_inventory/view2.php";

	//Stock Report
	} elseif ($_GET['module'] == 'stock_report') {
		include "modules/stock_report/view.php";

	//Generate QR
	} elseif ($_GET['module'] == 'generateQr') {
		include "modules/generateQr/index.php";
	
	//History
	} elseif ($_GET['module'] == 'history') {
		include "modules/history/view.php";
	
	//User
	} elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	
	} elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";

	} elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";

	} elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";

	} elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	
	//Backup
	} elseif ($_GET['module'] == 'backup') {
		include "modules/backup/view.php";
	}
}
