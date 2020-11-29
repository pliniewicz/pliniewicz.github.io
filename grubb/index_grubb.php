<HTML>
<HEAD>Projekt Grubb</HEAD>
<body link="white" vlink="white" bgcolor="black">
  <div align="center"><table border="0" cellpadding="0" cellspacing="0" width="1024">
  <tr>
    <td width="100%" colspan="3"><?php include "include/gora.php"; ?></td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="ripit">
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
      else include "najnowsze.php";
      
      echo "</div>";
    ?>
   
	</td>
  </tr>
  <tr>
    <td width="100%" height="62" colspan="3" background="img/stopka.png"><hr><?php include "include/stopka.php"; ?></td>
  </tr>
  </table></div>
</body>
</HTML>
