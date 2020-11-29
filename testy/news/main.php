<?php

$news_file = fopen("pliki/news.txt", "r") or die("Blad! Nie moge otworzyc pliku news.txt");

echo "<div class=\"rowcontainer\">\n";

# lista aktualnosci
echo "<div class=\"quartercolumn\">\n";
echo "<h3>Aktualno¶ci</h3>\n<ul>\n";

$nr = 0;

while ($linia = fgets($news_file)) {
	if (strpos($linia, "[tytul]") !== false) {
		$linia = str_replace( '[tytul]', '', $linia);
		$linia = str_replace('[/tytul]', '', $linia);
		echo "<li><a href=\"#label_".$nr."\">".$linia."</a></li>\n";
		$nr++;
	}

	if($_GET[y] != "all" && $nr == $NEWS_MAX) {
		break;
	}
}

echo "<img src='img/tiny.jpg' height='1px' width='200px' style='margin-left: -30px;' /><br />\n";
echo "<div style='margin-top: 30px;'>\n";
echo "<a href='http://www.krakow.pl' ><img src='img/cracovia_750.jpg' /></a></div>";

echo "</ul>\n</div>\n";

# aktualnosci
echo "<div class=\"halfcolumn\">\n";
$nr = 0;

rewind($news_file);
while ($linia = fgets($news_file)) {
// tytul
	if (strpos($linia, "[tytul]") !== false) {
		$linia = str_replace('[tytul]', '<div class="news"><h3 id="label_'.$nr.'">', $linia);
		$linia = str_replace('[/tytul]', "</h3>\n", $linia);
		
		if($_GET[y] != "all" && $nr == $NEWS_MAX) {
			break;
		}

		$nr++;
	}
// data
	$linia = str_replace('[data]', '<span class="data">Nadano: ', $linia);
	$linia = str_replace('[/data]', "</span>\n", $linia);
// tresc
	$linia = str_replace('[tresc]', '<p>', $linia);
	$linia = str_replace('[/tresc]', "</p></div>\n", $linia);
	echo $linia;
	
	
}
echo "<p style=\"text-align: center\"><a href=\"index.php?x=1&y=all\">Archiwum</a></p>";
echo "</div>";

# szybkie linki
echo "<div class=\"quartercolumn\">\n";
include "pliki/linki.html";
echo "</div>";


echo "</div>";
?>
