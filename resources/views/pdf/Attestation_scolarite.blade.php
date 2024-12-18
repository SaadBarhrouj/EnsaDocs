<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attestation de Scolarité</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            line-height: 1.6;
            margin: 40px;
            position: relative;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header-title {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 18px;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 100px; 
        }
        .content {
            margin-top: 10px;
            text-align: justify;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
        }
        .stamp {
            position: absolute;
            bottom: 80px;
            right: 150px;
            font-size: 16px;
            font-weight: bold;
            color: #0077B6;
            transform: rotate(-20deg);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">

            <img src="../public/images/logo.png" alt="Logo"> 
        </div>
        <p>ROYAUME DU MAROC</p>
        <p>Université Abdelmalek Essaadi</p>
        <p>École Nationale des Sciences Appliquées</p>
        <p>Service des Affaires Étudiantes</p>
    </header>

    <main>
        <h1 class="header-title">Attestation de Scolarité</h1>
        <div class="content">
            <p>Le Directeur de l'École Nationale des Sciences Appliquées de Tétouan atteste que l'étudiante :</p>
            <p><strong>{{ $etudiant->nom }} </strong></p>
            <p>Apogee : <strong>{{ $etudiant->apogee }}</strong></p>
            <p>Email Institutionnel : <strong>{{ $etudiant->email }}</strong></p>
            <p>Numéro de la carte d'identité nationale : <strong>{{ $etudiant->cin }}</strong></p>
            <p>Code national de l'étudiante : <strong>{{ $etudiant->cne }}</strong></p>
            <p>Née le: <strong>{{ $etudiant->date_naissance }}</strong> à <strong>{{ $etudiant->lieu_naissance }} </p>

            <p>Poursuit ses études à l'École Nationale des Sciences Appliquées de Tétouan pour l'année universitaire 2023/2024.</p>
            <div class="details">
                <p>Diplôme : Diplôme d'Ingénieur - Génie Informatique</strong></p>
                <p>Filière : <strong>{{ $etudiant->filiere }}</strong></p>
            </div>
        </div>
    </main>


    <div class="signature">
        <p>Fait à Tétouan, le {{ now()->format('d F Y') }}</p>
    </div>

    <div class="footer">
        <p>Service des Affaires Étudiantes</p>
        <p>BP 2222, Tétouan</p>
        <p>Tél : 0539968802 | FAX : 05399694624</p>
        <p>Le présent document n'est délivré qu'en un seul exemplaire. Il appartient à l'étudiant d'en faire des photocopies certifiées conformes.</p>
    </div>

    <div class="stamp">
        <p>DOCUMENT OFFICIEL</p> <!-- Add text or other elements if needed for the stamp -->
    </div>
</body>
</html>
