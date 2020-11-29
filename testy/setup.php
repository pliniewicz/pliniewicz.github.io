<?
# Maksymalna liczba newsow na stronie
$NEWS_MAX = 5;

# {{{ MENU GLOWNE
# ------------------------------
# Liczba wszystkich elementow menu
$LINKS_NR = 4;

# Domyslna strona (liczba odpowiada kluczowi nr - ponizej)
$DEFAULT_LINK = 1;

# Dane dotyczace poszczegolnych podstron.
# Zmienna 'nr' identyfikuje poszczegolne podstrony, 'nazwa' okresla teskt
# wyswietlany na zakladce menu, zmienna 'katalog' okresla nazwe katalogu,
# w ktorym musi sie znajdowac plik 'menu.php'.
$link1 = array('nr' => 1, 'nazwa' => "Aktualno¶ci",	'katalog' => "news");
$link2 = array('nr' => 2, 'nazwa' => "OSSA",				'katalog' => "wtf");
$link4 = array('nr' => 4, 'nazwa' => "Program",			'katalog' => "program");
$link5 = array('nr' => 4, 'nazwa' => "Zakwaterowanie",'katalog' => "hotel");

$linki = array( 1 => $link1,
					 2 => $link2,
					 3 => $link4,
					 4 => $link5
					 );

# KONIEC MENU GLOWNE }}}
?>
