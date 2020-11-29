<?php 
header('Content-type: text/html; charset=utf-8');
define('TITLE', 'Ogólnopolskie Seminarium Studentów Astronomii Kraków 2016'); 
?>
<h2><font color="yellow">O</font>gólnopolskie <br><font color="yellow">S</font>eminarium <br><font color="yellow">S</font>tudentów <br><font color="yellow">A</font>stronomii</h2>
<span class="data">Kraków 2016</span><br><br>
<?php
$page_title = 'Rejestracja';


	if(strlen($_POST['name'])>0)
	{
		$name = TRUE;
	}
	else
	{
		$name = FALSE;
		echo '<P>Prosze podać swoje imię!</P>';
	}
	if(strlen($_POST['surname'])>0)
	{
		$surname = TRUE;
	}
	else
	{
		$surname = FALSE;
		echo '<P>Proszę podać swoje nazwisko!</P>';
	}
	if(strlen($_POST['email'])>0)
	{
		$email = TRUE;
	}
	else
	{
		$email = FALSE;
		echo '<P>Prosze podać swój adres e-mail!</P>';
	}
	if(strlen($_POST['afil'])>0)
	{
		$afil = TRUE;
	}
	else
	{
		$afil = FALSE;
		echo '<P>Prosze podać swoją afiliację</P>';
	}
	if(strlen($_POST['year'])>0)
	{
		$year = TRUE;
	}
	else
	{
		$year = FALSE;
		echo '<P>Proszę podać swój rok studiów!</P>';
	}
	if($name && $surname && $email && $afil && $year)
	{
		$body = "Dziękujemy za zarejestrowanie się na OSSA 2016!<br><br>Twoje dane:<br><br>Imię: <b>{$_POST['name']}</b><br>Nazwisko: <b>{$_POST['surname']}</b><br>E-mail: <b>{$_POST['email']}</b><br>Afiliacja: <b>{$_POST['afil']}</b><br>Rok studiów: <b>{$_POST['year']}</b><br>Rodzaj prezentacji: <b>{$_POST['active']}</b><br>Uwagi: <b>{$_POST['comm']}</b><br><br>Opłata konferencyjna: <b>50 zł</b><br><br>Numer konta do wpłaty:<br><b>43 1160 2202 0000 0003 0621 5935</b><br>Kod Swift / BIC Bank Millenium:BIGBPLPW<br><br>Pełna nazwa banku:<br><b>Bank Millennium SA<br>ul. Stanisława Żaryna 2A,<br>02-593 Warszawa</b><br><br>Ostateczna data wpłaty: <b>20.08.2016</b> (dwudziesty sierpnia br.)<br><br>W tytule przelewu proszę wpisać: <b>{$_POST['name']} {$_POST['surname']} OSSA</b><br><br>Ostateczna data przesłania abstraktu:<br><b>01.09.2016</b> (pierwszy września br.)<br><br><b>Brak wpłaty wyklucza z udziału konferencji.</b><br><br><b>Brak abstraktu skutkuje brakiem miejsca na sesji referatowej.</b><br><br>-- <br>Pozdrawiamy<br>Organizatorzy OSSA 2016";
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=UTF-8\r\n";
		$headers .= "From: ossakonferencja2016@gmail.com\r\n";
		$headers .= "Reply-To: ossakonferencja2016@gmail.com\r\n";
		//mail($_POST['email'], 'Rejestracja OSSA 2016', $body , 'From: ossakonferencja2016@gmail.com');
		mail($_POST['email'], 'Rejestracja OSSA 2016', $body , $headers);
		$body2 = "Dane do rejestracji:<br>
		Imię: <b>{$_POST['name']}</b><br>Nazwisko: <b>{$_POST['surname']}</b><br>E-mail: <b>{$_POST['email']}</b><br>Afiliacja: <b>{$_POST['afil']}</b><br>Rok studiów: <b>{$_POST['year']}</b><br>Rodzaj prezentacji: <b>{$_POST['active']}</b><br>Uwagi: <b>{$_POST['comm']}</b><br><br>-- <br>Pozdrawiamy<br>Organizatorzy OSSA 2016";
		//mail('ossakonferencja2016@gmail.com', 'Rejestracja OSSA 2016', $body2 , 'From: ossakonferencja2016@gmail.com');
		mail('ossakonferencja2016@gmail.com', 'Rejestracja OSSA 2016', $body2 , $headers);
		echo '<P><font color="yellow"><b>Zostałeś/aś zarejestrowany/a.</b><BR>Na Twój adres e-mail została wysłana wiadomość z potwierdzeniem rejestracji.</font></P><br>
		<p><a href="index.php?go=ossa2016">OSSA 2016</a></p>';
	}
	else 
	{
		echo '<P>Wróć do formularza i spróbuj jeszcze raz.</P>';
	}

?>