<!-- top div -->
<div style="background-image: url(img/bg.jpg); background-repeat: repeat-x;	width: 100%; height: 210px; padding: 0;">
<img src="img/ossa.jpg" alt="logo"/>
<span style="font: normal 30px trebuchet ms; color: #92d1f5; vertical-align: middle; position: absolute; top: 50px; left: 250px; height: 25px">
Ogólnopolskie&nbsp;Seminarium&nbsp;Studentów&nbsp;Astronomii<br/>Kraków&nbsp;20-22 wrze¶nia 2007
</span>

<?php
# Generowanie menu 
echo "<ul id=\"menu\">\n";

for($i=1; $i < $LINKS_NR+1; $i++) {
	echo " <li><a href=\"index.php?x=$i\" ";
	if(isset($_GET[x])) {
		if($i == $_GET[x])
			echo 'id="current"';
	} else {
		if($i == $DEFAULT_LINK)
			echo 'id="current"';
	}
	echo ">";
	echo $linki[$i]['nazwa'];
	echo "</a></li>\n";
}
echo '</ul>';
?>
</div> <!-- end top div -->
<div class="linia"></div>

<!-- end top section -->

