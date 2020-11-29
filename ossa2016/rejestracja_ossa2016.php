<?php include_once("analyticstracking.php") ?>
<?php define('TITLE', 'Ogólnopolskie Seminarium Studentów Astronomii Kraków 2016'); ?>
<h2><font color="yellow">O</font>gólnopolskie <br><font color="yellow">S</font>eminarium <br><font color="yellow">S</font>tudentów <br><font color="yellow">A</font>stronomii</h2>
<span class="data">Kraków 2016</span><br><br>
<?php
$page_title = 'Rejestracja';

if (isset($_POST['submit']))
{
	if(strlen($_POST['name'])>0)
	{
		$name = TRUE;
	}
	else
	{
		$name = FALSE;
		echo '<P>Zapomniałeś podać swoje imię!</P>';
	}
	if(strlen($_POST['surname'])>0)
	{
		$surname = TRUE;
	}
	else
	{
		$surname = FALSE;
		echo '<P>Zapomniałeś podać swoje nazwisko!</P>';
	}
	if(strlen($_POST['email'])>0)
	{
		$email = TRUE;
	}
	else
	{
		$email = FALSE;
		echo '<P>Zapomniałeś podać swój adres e-mail!</P>';
	}
	if($name && $surname && $email)
	{
		$body = "Dziękujemy za zarejestrowanie się na OSSA 2016!\n Twoje imię to '{$_POST['name']}'";
		mail($_POST['email'], 'Dziękujemy za zarejestrowanie się!', $body, 'From: bartosz.smierciak@gmail.com');
		echo '<P>Zostałeś/aś zarejestrowany/a. Na Twój adres e-mail została wysłana wiadomość z potwierdzeniem rejestracji.</P>';
	}
	else 
	{
		echo '<P>Wróć do formularza i spróbuj jeszcze raz.</P>';
	}
}
else
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<fieldset><legend>Wprowadź do poniższewgo formularza informacje na swój temat:</legend>
	<P><B>Imię:</B> <input type="text" name="name" size="20" maxlength="40" /></P>
	<P><B>Nazwisko:</B> <input type="text" name="surname" size="20" maxlength="40" /></P>
	<P><B>E-mail:</B> <input type="text" name="email" size="20" maxlength="40" /></P>
</fieldset>
<div align="center"><input type="submit" name="submit" value="Wyślij dane" /></div>
</form>

}

<br><br>

