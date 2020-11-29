<?php
        ob_start();
        $add_site = true;?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Reply-to" content="bartlomiej.debski@byk.oa.uj.edu.pl" />
<meta name="Author" content="Bartlomiej Debski" />
<meta name="Copyright" content="Bartlomiej Debski 2010" />
<meta name="Language" content="pl" />
<head>
      <link rel="stylesheet" type="text/css" href="nksa.css" />
      <title>Naukowe Koło Studentów Astronomii UJ:<!--TITLE--></title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <style type="text/css">
    <!--

    body {
    font-color: silver
    }

	a {
    text-decoration: none;
	}

	a:hover {
    color: silver;
	}

    -->
  </style>





  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19851934-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  
</head>
<body link="white" vlink="white" background="img/tlo.jpg">
  <div align="center"><table border="0" cellpadding="0" cellspacing="0" width="1024">
   <tr>
    <td width="100%" height="31" colspan="3"><img src="img/szyld.png"></td>
  </tr>
  <tr>
    <td width="100%" colspan="3"><?php include "include/naglowek.php"; ?></td>
  </tr>
  <tr>
    <td width="245" valign="top" class="ripit" background="img/ramka_lewa.png"><?php include "include/menu.php"; ?></td>
    <td width="615" valign="top" class="ripit" background="img/ramka_srodek.png">
    <?php

    echo "<div class=\"dostron\">\n";

    	// zmienna $go przekazana metoda GET
      $go = $_GET['go'];
      
      // sprawdzamy czy zmienna $go nie jest pusta
      if(!empty($go)) {
      	// sprawdzamy czy plik o danej nazwie istnieje
      	if(is_file("$go.php")) include "$go.php";
      	// jezeli plik nie istnieje wyswietla się komunikat
      	else echo "<br />Takiej strony tutaj nie ma! :(<br><br>... Ale może będzie niebawem! :)";
      }
      // jezeli zmienna $go jest pusta wyswietla się strona glowna
      else include "news.php";
      
      echo "</div>";
    ?>
   
	</td>
  </tr>
  <tr>
    <td width="1024" height="62" colspan="3" background="img/stopka.png"><hr><?php include "include/stopka.php"; ?></td>
  </tr>
  </table></div>
</body>
</html>
<?
$title = ((defined('TITLE')) ? ' '.TITLE : '');

$html = ob_get_clean();
echo preg_replace('#<!--TITLE-->#', $title, $html);
?>
