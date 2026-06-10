<?php
session_start();

if (!isset($_SESSION['korisnik'])) {
    die("Niste prijavljeni!");
}

$ime = $_SESSION['korisnik'];

if ($_SESSION['rola'] == 'administrator') {
    echo "Dobro došli $ime. Vaša razina je administrator.";
} else {
    echo "Dobro došli $ime.";
}
?>