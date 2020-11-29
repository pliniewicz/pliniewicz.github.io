<?php 
header('Content-type: text/html; charset=utf-8');
define('TITLE', 'Ogólnopolskie Seminarium Studentów Astronomii Kraków 2016');
?>
<table>
<tr>
<td><img src="logoossa200px.png"></td>
<td>
<h2>
<font color="yellow">O</font>gólnopolskie <br>
<font color="yellow">S</font>eminarium <br>
<font color="yellow">S</font>tudentów <br>
<font color="yellow">A</font>stronomii<br>
<span class="data">Kraków 2016</span><br><br>
</h2>
</td>
</tr>
</table>
<center><font color="yellow" size="5">Rejestracja</font></center><br>
<form action="http://byk.oa.uj.edu.pl/~nksa/index.php?go=mail" method="post">

<fieldset><legend><font color="yellow">Wprowadź do poniższego formularza informacje na swój temat:</legend>
	<P><font color="yellow"><B>Imię:</B></font><br> <input type="text" name="name" size="40" maxlength="40" /></P><br>
	<P><font color="yellow"><B>Nazwisko:</B></font><br> <input type="text" name="surname" size="40" maxlength="40" /></P><br>
	<P><font color="yellow"><B>E-mail:</B></font><br> <input type="text" name="email" size="40" maxlength="40" /></P><br>
	<P><font color="yellow"><B>Afiliacja:</B></font><br> <input type="text" name="afil" size="40" maxlength="40" /></P><br>
	<P><font color="yellow"><B>Rok studiów:</B></font><br> <input type="text" name="year" size="40" maxlength="40" /></P><br>
	<P><font color="yellow"><B>Rodzaj prezentacji:</B></font><br>
	<P><select name="active">
    <option value="Brak">Brak</option>
    <option value="Plakat">Plakat</option>
    <option value="Prezentacja">Prezentacja</option>
	</select></P><br>
	<P><font color="yellow"><B>Uwagi:</B></font><br> <textarea  name="comm" cols="42" rows="6"></textarea></P><br>
	</P>
</fieldset>

<div align="center">
<input type="submit" name="submit" value="Wyślij dane" />
</div>
</form>
<br>
<p><a href="index.php?go=ossa2016">OSSA 2016</a></p>


<br><br>

