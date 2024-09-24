<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des jours de la semaine</title>
    <style>
        /* STYLES POUR LE TABLEAU HTML QUI VIENDRA DE GENERATE.PHP*/
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        table {
        border-collapse: collapse;
        width: 50%;
        background-color: white;
        border-radius: 10px; 
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        overflow: hidden; 
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #cc0000;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Jour</th>
            </tr>
        </thead>
        <tbody>
            <?php // début partie php
                // Inclusion du tableau créé avec generate.php
                include('table_content.php');
            ?> <!-- fin partie php >
        </tbody>
    </table>

</body>
</html>
