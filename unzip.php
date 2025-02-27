<?php
$zip = new ZipArchive();
$filename = "./website.zip"; // Vervang dit door de naam van je zip-bestand

if ($zip->open($filename) === TRUE) {
    $zip->extractTo('./'); // Geef hier het pad op waar je de bestanden wilt uitpakken
    $zip->close();
    echo 'Bestanden succesvol uitgepakt!';
} else {
    echo 'Het is niet gelukt om het zip-bestand te openen.';
}
?>