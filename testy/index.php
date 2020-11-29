<?php
setcookie("online","yes");

function gen_time() {
	$time = explode(" ", microtime());
	$usec = (double)$time[0];
	$sec = (double)$time[1];
	return $sec + $usec;
}
$start = gen_time();

function get_IP(){
	if ($_SERVER['HTTP_X_FORWARDED_FOR']) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}


if($_COOKIE["online"] !== "yes") {
	$da = date("d/m/y H:i:s");
	$ip = get_IP();
	
	if($file = fopen("help/stats.log", 'a')) {
		fwrite($file, $da."\t".$ip."\n");
		fclose($file);
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-2"/>
	<link rel="stylesheet" type="text/css" href="nksa.css" />
	<style type="text/css">
		.linia {overflow: hidden; background-color: #000000; height: 4px; width: 100%; padding: 0;}
	</style>
	<!--[if lt IE 8]>
	<style> .linia { margin-top: -10px; }</style>
	<![endif]-->

	<title>OSSA IV * Kraków 2007</title>
</head>

<body>

<?php

# Glowny plik konfiguracyjny
include "setup.php";

# Naglowek (logo, nazwa, menu)
# !!! NIE EDYTOWAC !!!
include "top.php";

# Tresc, galerie, etc.
# superglobalna zmienna 'x' przechowuje wartosc strony do wyswietlenia

if( isset($_GET[x]) ) {
	$file = $linki[$_GET[x]]['katalog']."/main.php";
	require $file;
} else {
	$file = $linki[$DEFAULT_LINK]['katalog']."/main.php";
	require $file;
}

include "bottom.php";

?>

</body>
</html>
