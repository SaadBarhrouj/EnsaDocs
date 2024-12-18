<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template de lettre de recommandation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 15mm 20mm;
            line-height: 1.5;
            position: relative;
        }
        .date {
            
            text-align: right;
            margin-bottom: 20px;
        }
        .header {
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }
        .header img {
            position: absolute;
            top: -115;
            left: -100;
            width: 150px; 
            height: auto;
        }
        .header div {
            text-align: center;
        }
        .content p {
            margin: 10px 0;
            text-align: justify;
        }
        .content .indent {
            text-indent: 0.5cm;
        }
        .signature {
            margin-top: 40px;
            text-align: right;
        }
        .signature p {
            margin: 5px 0;
        }
        .signature .signature-image {
            display: inline-block;
            margin-top: 10px;
            width: 150px;
            height: 50px;
            background: url('signature-example.png') no-repeat center;
            background-size: contain;
        }
        .footer {
            position: fixed;
            bottom: 15mm;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 11px;
            border-top: 1px solid #000;
            padding-top: 5px;
        }
    </style>
</head>
<body>
    <div class="date">
        <p>Tétouan, le {{ $etudiant['date'] }}</p>
    </div>

    <div class="header">
    
        <img src="{{ public_path('images/logo.png') }}" alt="Logo de l'École">
        <div>
            <p><strong>Le Directeur de l'École Nationale des Sciences Appliquées de Tétouan</strong></p>
            <p><strong>À</strong></p>
            <p><strong>Monsieur le Directeur Général</strong></p>
        </div>
    </div>

    <div class="content">
        <p class="indent"><strong>Objet : Stage d'été</strong></p>

        <p class="indent">Monsieur,</p>

        <p class="indent">
            Soucieuse d'adapter sa formation aux exigences du marché de l'emploi, l'École Nationale des Sciences Appliquées de Tétouan organise des stages pour ses élèves
            afin de consolider les connaissances acquises durant leur parcours académique.
        </p>

        <p>
            À cet effet, nous vous demandons de bien vouloir accueillir l'élève <strong>{{ $etudiant['nom'] }} {{ $etudiant['prenom'] }}</strong>,
            inscrite en <strong>{{ $etudiant['filiere'] }}</strong>, pour un stage au sein de votre entreprise.
        </p>

        <p>
            En cas d'accord de votre part, nous vous serions reconnaissants de nous retourner, dans les meilleurs délais, la convention cadre ci-jointe, dûment remplie.
        </p>

        <p>
            Nous précisons que notre élève sera soumise à la réglementation en vigueur dans votre entreprise.
        </p>

        <p>
            Nous vous prions d'agréer, Monsieur, l'expression de notre considération distinguée.
        </p>
    </div>

    <div class="signature">
        <p>Mr. Responsable</p>
        <div class="signature-image"></div>
    </div>

    <div class="footer">
        École Nationale des Sciences Appliquées de Tétouan | B.P 2222, M'hannech II, Tétouan | <a href="http://www.ensa-tetouan.ac.ma">www.ensa-tetouan.ac.ma</a>
    </div>
</body>
</html>