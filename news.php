<?php

if(!$add_site) exit;
define('TITLE', 'Aktualności');
?>

<span class="malelogo"><img src="img/malelogo.png"></span>
<h2>Aktualności</h2>
<?
echo "</div>";
$news_file = fopen("edytuj/news.txt", "r") or die("Blad! Nie moge otworzyc pliku news.txt");

# aktualnosci


rewind($news_file);
?>

<?
while ($linia = fgets($news_file)) {
// tytul
	if (strpos($linia, "[tytul]") !== false) {
		// $linia = str_replace('[tytul]', '<div class="news"><div align="left"><h3 id="label_'.$nr.'">', $linia); // brak zdefiniowanej nr
		$linia = str_replace('[tytul]', '<div class="news"><div align="left"><h3 id="label_">', $linia);
		$linia = str_replace('[/tytul]', "</h3></div>\n\n", $linia);
		}

                
// data
	$linia = str_replace('[autor]', '<span class="data">Autor notki: ', $linia);
	$linia = str_replace('[/autor]', "</span>\n\n", $linia);
	
	
	
// tresc
	$linia = str_replace('[tresc]', '<br><br><p>', $linia);
	$linia = str_replace('[/tresc]', "</p></div>\n", $linia);
	echo $linia;
        }



   echo "<div>\n";
?>
