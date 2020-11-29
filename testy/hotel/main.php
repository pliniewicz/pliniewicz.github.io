<?php

include_once('zapisy/md/markdown.php');

$html = Markdown(file_get_contents('hotel/hotel.txt'));
?>

<div class="rowcontainer">
<div class="quartercolumn">&nbsp;</div>
<div class="halfcolumn">
<? echo $html; ?>
</div>
</div>
