<?php include_once("analyticstracking.php") ?>
<?php define('TITLE', 'Lista Członków'); ?>
<h3>Ogólnopolskie Seminarium Studentów Astronomii</h3>
<span class="data">Kraków 2016</span><br><br>
<p>Rejestracja</p>
<?php
$name = trim($_POST['name']);
$lastname = trim($_POST['lastname']);
$comment = trim($_POST['comment']);

if(empty($name) and empty($lastname) and empty($comment)) {
    
// prosty formularz zawierający dwa pola
echo '<form action="" method="post">
Imię: <input type="text" name="name" style="width: 200px;" /><br />
Nazwisko: <input type="text" name="lastname" style="width: 200px;" /><br />
Komentarz:<textarea name="comment" style="width: 200px; height: 100px;">
</textarea><br />
<input type="submit" value="Zapisz" />
</form>';
}
else {
    
    // dane pochodzące z formularza
    $dane = $name."`".$lastname."`".$comment."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "ossa2016/baza.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // blokada pliku do zapisu
    flock($fp, 2);
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // odblokowanie pliku
    flock($fp, 3);
    // zamknięcie pliku
    fclose($fp);
    
    echo "Dane zostały zapisane!<br />";
 
} 
?>
<?php

// wczytanie zawartości pliku do tablicy
$file = file("ossa2016/baza.txt");
// przechodzimy przez tablicę za pomocą pętli foreach
foreach($file as $value) {
// rozbijamy poszczególne linie na części
$exp = explode("`",$value);
// wyświetlamy rozbity tekst
echo $exp[0]." ".$exp[1]." ".$exp[2]."<hr />";
}

?> 