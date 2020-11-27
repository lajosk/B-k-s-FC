<?php
$szerver = "localhost";
$felhasznalo = "root";
$jelszo = "";
$adatbazis = "bekesfc";


$ablakcim = array(
    'cim' => 'Békési FC',
);

$fejlec = array(
    'kepforras' => 'logo_2.png',
    'kepalt' => 'logo',
	'cim' => 'Békési FC'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Békési FC',
	'weboldal' => 'http://www.bekesfc.gportal.hu/'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'hirek' => array('fajl' => 'hirek', 'szoveg' => 'Hírek', 'menun' => array(1,1)),
	'videok' => array('fajl' => 'videok', 'szoveg' => 'Videok', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1, 1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'kuldes' => array('fajl' => 'kuldes', 'szoveg' => '', 'menun' => array(0,0)),
    'emailek' => array('fajl' => 'emailek', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

//
// Galéria
//
$MAPPA = './kepek/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$MAXMERET = 500*1024;
?>