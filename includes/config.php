<?php
    define('DBUSER','smartpay_user');
    define('DBPWD','Password123$');
    define('DBHOST','localhost');
    define('DBNAME','logbook');

	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/logbook/php-templates/dashboard.php":
			$CURRENT_PAGE = "Dashboard"; 
			$PAGE_TITLE = "Dashboard";
			break;
		case "/logbook/php-templates/locations.php":
			$CURRENT_PAGE = "Locations"; 
			$PAGE_TITLE = "Booth Location";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Winabwangu";
	}


?>