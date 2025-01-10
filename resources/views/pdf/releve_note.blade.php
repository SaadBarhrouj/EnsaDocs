[14:48, 16/12/2024] Nada El Mourabet: <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relevé de Note</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 15mm 20mm;
            line-height: 1.5;
            position: relative;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
        }
        .header img {
            position: absolute;
            top: -80;
            left: -90;
            width: 150px;
            height: auto;
        }
        .content {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .info-inline {
            display: inline;
        }
        .info-inline span {
            margin-right: 15px;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo de l'École">
        <h2>Relevé de Note de l'Étudiant</h2>
    </div>

    <div style="text-align: right;">
        Tétouan, le {{ $etudiant['date'] }}
    </div>

    <div class="content">
        <p><strong>Nom Complet:</strong> {{ $etudiant['nom'] }} {{ $etudiant['prenom'] }}</p>
        <p><strong>Filière:</strong> {{ $etudiant['filiere'] }}</p>
        
        <p class="info-inline">
            <span><strong>Né(e) le:</strong> {{ $etudiant['date_naissance'] }}</span>
            <span><strong>à:</strong> {{ $etudiant['lieu_naissance'] }}</span>
        </p>
        <br>
        <p class="info-inline">
            <span><strong>CIN : </strong>{{ $etudiant['cin'] }}</span>
            <span><strong>CNE : </strong>{{ $etudiant['cne'] }}</span>
        </p>

        <h3>Notes :</h3>
        <table>
            <tr>
                <th>Matière</th>
                <th>Note</th>
            </tr>
            <tr>
                <td>Programmation Avancée</td>
                <td>{{ $notes['prog_avancee'] }} / 20</td>
            </tr>
            <tr>
                <td>Électro-numérique</td>
                <td>{{ $notes['electro_numerique'] }} / 20</td>
            </tr>
            <tr>
                <td>Théorie des graphes</td>
                <td>{{ $notes['theorie_graphes'] }} / 20</td>
            </tr>
            <tr>
                <td>Théorie des langages</td>
                <td>{{ $notes['theorie_langages'] }} / 20</td>
            </tr>
            <tr>
                <td>Génie logiciel</td>
                <td>{{ $notes['genie_logiciel'] }} / 20</td>
            </tr>
            <tr>
                <td>Management</td>
                <td>{{ $notes['management'] }} /20</td>
            </tr>
            <tr>
                <td><strong>Résultat d'Admission</strong></td>
                <td><strong>{{ number_format($moyenne, 2) }} / 20</strong></td>
            </tr>
        </table>

        <p><strong>Année Universitaire : </strong>{{ $notes['annee_universitaire'] }}</p>
    </div>

</body>
</html>
