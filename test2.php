<?php
$text = "Portez ce vieux whisky au juge blond qui fume.";
$newtext = wordwrap($text, 15, "<br />\n");

echo $newtext;
?>