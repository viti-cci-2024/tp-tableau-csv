<?php
// Chemin pour creer fichier CSV
$csvFile = 'listejours.csv';

// Liste des jours de la semaine
$jours = [
    ['Lundi'],
    ['Mardi'],
    ['Mercredi'],
    ['Jeudi'],
    ['Vendredi'],
    ['Samedi'],
    ['Dimanche']
];

// ouvre fichier + mode écriture ok
$file = fopen($csvFile, 'w');

// Vérification si open fichier est ok
if ($file === FALSE) {
    // si erreur
    echo "Erreur : Impossible de créer ou d'ouvrir le fichier CSV.";
} else {
    // Si ok - va écrire
    foreach ($jours as $jour) {
        fputcsv($file, $jour);
    }

    // Fermeture csv après écriture des données (note: ne pas oublier fclose)
    fclose($file);

    // confirmation ok
    echo "Le fichier CSV a été généré avec succès sous le nom de listejours.csv";
}
?>
