<?php
$csvFile = 'listejours.csv';// Chemin CSV
$tableFile = 'table_content.php';


if (($handle = fopen($csvFile, 'r')) !== FALSE) {  // Ouvrir le CSV
    
    $tableContent = fopen($tableFile, 'w'); // open puis write

    $index = 1;

    
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {  // lire contenu CSV ligne après ligne
        
        $htmlRow = "<tr>\n"; // vréation d'une ligne tableau pour chaque ligne du CSV
        $htmlRow .= "<td>" . $index++ . "</td>\n";
        $htmlRow .= "<td>" . htmlspecialchars($data[0]) . "</td>\n";
        $htmlRow .= "</tr>\n";

        
        fwrite($tableContent, $htmlRow);  // Écrire la ligne dans le fichier HTML
    }

    // Fermer les fichiers
    fclose($handle);
    fclose($tableContent);

    echo "Le fichier table_content.php a été généré avec succès.";
} else {
    echo "Impossible de lire le fichier CSV.";
}
?>
