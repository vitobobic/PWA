<?php
$ime = "Vito";
$prezime = "Bobic";
$godinaRodjenja = "2006";

$ispis = substr($ime, 0, 1) . "." . $prezime . "/" . substr($godinaRodjenja, -2);

echo $ispis;
?>