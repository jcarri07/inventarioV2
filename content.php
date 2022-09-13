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
	//Equipos Comunicaciones
	elseif ($_GET['module'] == 'inventario') {
		include "modules/inventario/view.php";

	} elseif ($_GET['module'] == 'form_inventario') {
		include "modules/inventario/form.php";

	}
	//Equipos de maquinaria
	elseif ($_GET['module'] == 'maquinaria') {
		include "modules/maquinaria/view.php";

	} elseif ($_GET['module'] == 'form_maquinaria') {
		include "modules/maquinaria/form.php";
	}
	//Mobiliario y equipos de oficina

	elseif ($_GET['module'] == 'Oficina') {
		include "modules/Oficina/view.php";

	} elseif ($_GET['module'] == 'form_Oficina') {
		include "modules/Oficina/form.php";
	}
	//equipos cientificos y electronicos
	elseif ($_GET['module'] == 'Cientificos') {
		include "modules/Cientificos/view.php";

	} elseif ($_GET['module'] == 'form_Cientificos') {
		include "modules/Cientificos/form.php";
	}
	
	//equipos inmuebles
	elseif ($_GET['module'] == 'inmuebles') {
		include "modules/inmuebles/view.php";
	
	} elseif ($_GET['module'] == 'form_inmuebles') {
		include "modules/inmuebles/form.php";
	} 

	//Equipos de seguridad
	elseif ($_GET['module'] == 'medicos') {
		include "modules/medicos/view.php";

	} elseif ($_GET['module'] == 'form_medicos') {
		include "modules/medicos/form.php";
	}

	//Equipos de biblioteca
	elseif ($_GET['module'] == 'biblioteca') {
		include "modules/biblioteca/view.php";

	} elseif ($_GET['module'] == 'form_biblioteca') {
		include "modules/biblioteca/form.php";
	}

	//transporte
	elseif ($_GET['module'] == 'transporte') {
		include "modules/transporte/view.php";

	} elseif ($_GET['module'] == 'form_transporte') {
		include "modules/transporte/form.php";
	

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

	//transaccion equipos transporte
	} elseif ($_GET['module'] == 'transaccion_equipos_transporte') {
		include "modules/transaccion_equipos_transporte/view.php";

	} elseif ($_GET['module'] == 'form_transaccion_equipos_transporte') {
		include "modules/transaccion_equipos_transporte/form.php";

	//transaccion inmuebles
	} elseif ($_GET['module'] == 'transaccion_equipos_inmuebles') {
		include "modules/transaccion_equipos_inmuebles/view.php";

	} elseif ($_GET['module'] == 'form_transaccion_equipos_inmuebles') {
		include "modules/transaccion_equipos_inmuebles/form.php";
	
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
