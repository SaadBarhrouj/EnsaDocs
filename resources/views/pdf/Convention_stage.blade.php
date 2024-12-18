<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convention de Stage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.6;
            margin: 20px;
        }

        h1, h2, h3 {
            text-align: center;
            margin: 0;
        }

        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header img {
            width: 80px; /* Adjust width of the logo */
            margin-bottom: 10px;
        }

        .content {
            margin-top: 20px;
            font-size: 12px;
        }

        .section {
            margin-bottom: 15px;
        }

        .section p {
            margin: 5px 0;
        }

        .section strong {
            width: 200px;
            display: inline-block;
        }

        .article {
            margin-top: 20px;
        }

        .article strong {
            font-size: 14px;
        }

        .article p {
            margin-top: 10px;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .signature {
            text-align: center;
            width: 30%;
        }

        .signature span {
            display: block;
            margin-top: 60px;
            border-top: 1px solid black;
            width: 150px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
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

    <!-- Header with Logo -->
    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Logo"> <!-- Path to your logo image -->
        <h1>Université Abdelmalek Essaâdi</h1>
        <h2>Ecole Nationale des Sciences Appliquées</h2>
        <h3>Tétouan</h3>
    </div>

    <h2 style="text-align: center;">CONVENTION DE STAGE</h2>
    <p style="text-align: center; font-weight: bold;">(2 exemplaires imprimés en recto-verso)</p>

    <div class="content">
        <div class="section">
            <p><strong>ENTRE :</strong></p>
            <p>L’Ecole Nationale des Sciences Appliquées, Université Abdelmalek Essaâdi - Tétouan</p>
            <p>Adresse : B.P. 2222, Mhannech II, Tétouan, Maroc</p>
            <p>Représentée par : Professeur Kamal REKLAOUI, Directeur</p>
            <p><strong>Ci-après dénommé l'Etablissement</strong></p>
            
        </div>

        <div class="section">
            <p><strong>ET :</strong></p>
            <p><strong>La Société :</strong>{{ $demande->entreprise }}</p>
            <p><strong>Ci-après dénommée l’Entreprise</strong></p>
        </div>

        <div class="article">
            <p><strong>Article 1 : Engagement</strong></p>
            <p>L’ENTREPRISE accepte de recevoir à titre de stagiaire <strong>{{ $etudiant->nom }} </strong>, étudiant(e) de la filière <strong>{{ $etudiant->filiere }}</strong>, pour une période de <strong>{{ $demande->periode}}</strong> mois.</p>
            <p><strong>En aucun cas, cette convention ne pourra autoriser les étudiants à s’absenter durant la période des contrôles ou des enseignements.</strong></p>
        </div>

        <div class="article">
            <p><strong>Article 2 : Objet</strong></p>
            <p>Le stage aura pour objet essentiel d'assurer l'application pratique de l'enseignement donné par l'Etablissement, avec des visites sur les installations et des études proposées par l’Entreprise.</p>
        </div>

        <div class="article">
            <p><strong>Article 3 : Encadrement et suivi</strong></p>
            <p>L’ENTREPRISE désigne un(e) encadrant(e) et le Tuteur pédagogique désigné par l’Établissement est le chef de filière <strong>{{ $etudiant->filiere }}</strong> pour superviser le travail du stagiaire.</p>
        </div>

        <div class="article">
            <p><strong>Article 4 : Indemnité de stage</strong></p>
            <p>Le stagiaire ne pourra prétendre à aucune indemnité salariale de la part de l’Entreprise, sauf accord spécifique entre l’Entreprise et l’Étudiant.</p>
        </div>

        <div class="article">
            <p><strong>Article 5 : Règlement </strong></p>
            <p>Pendant la durée du stage, le Stagiaire reste placé sous la responsabilité de <strong>Cependant, l’étudiant est tenu d’informer l’école dans un délai de 24h sur toute modification portant sur la convention déjà signée, sinon il en assumera toute sa responsabilité sur son non-respect de la convention signée par l’école.</strong></p>
            <h>
            <p>Toutefois, le Stagiaire est soumis à la discipline et au règlement intérieur de <strong>L’ENTREPRISE. </strong>
                En cas de manquement, <strong>L’ENTREPRISE </strong>se réserve le droit de mettre fin au stage après en avoir convenu avec le Directeur de l'Etablissement.
                </p>
        </div>

        <div class="article">
            <p><strong>Article 6 : Confidentialité </strong></p>
            <p>Le Stagiaire et l'ensemble des acteurs liés à son travail (l'administration de l'Etablissement, le parrain pédagogique ...) sont tenus au secret professionnel. Ils s'engagent à ne pas diffuser les informations recueillies à des fins de publications, conférences, communications, sans raccord préalable de <strong>L’ENTREPRISE.<strong> Cette obligation demeure valable après l'expiration du stage.</p>
        </div>

        <div class="article">
            <p><strong>Article 7 : Assurance accident de travail   </strong></p>
            <p><strong>Le stagiaire</strong> devra obligatoirement souscrire une assurance couvrant la Responsabilité Civile et Accident de Travail, durant les stages et trajets effectués. 
                En cas d'accident de travail survenant durant la période du stage.<strong>L’ENTREPRISE</strong> s'engage à faire parvenir immédiatement à l'Etablissement toutes les informations indispensables à la déclaration dudit accident.
            </p>
        </div>

        <div class="article">
            <p><strong>Article 8 : Evaluation de L’ENTREPRISE  </strong></p>
            <p>Le stage accompli, le parrain établira un rapport d'appréciations générales sur le travail effectué et le comportement du Stagiaire durant son séjour chez <strong>L’ENTREPRISE</strong>. 
               <strong>L’ENTREPRISE</strong> remettra au Stagiaire une attestation indiquant la nature et la durée des travaux effectués.
                
            </p>
        </div>

        <div class="article">
            <p><strong>Article 9 : Rapport de stage   </strong></p>
            <p>A l'issue de chaque stage, le Stagiaire rédigera un rapport de stage faisant état de ses travaux et de son vécu au sein de <strong>L’ENTREPRISE</strong>. Ce rapport sera communiqué à <strong>L’ENTREPRISE</strong> et restera strictement confidentiel.
            </p>
        </div>
    </div>

    <div class="footer">
        <p><strong>Fait à Tétouan en deux exemplaires,  le {{ date('d-m-Y') }}</strong></p>
    </div>

    <div class="signature-section">
        <div class="signature">
            <p>Nom et signature du Stagiaire</p>
            <span></span>
        </div>
        <div class="signature">
            <p>Signature et cachet de l’Établissement</p>
            <span></span>
        </div>
        <div class="signature">
            <p>Signature et cachet de l’Entreprise</p>
            <span></span>
        </div>
    </div>

   
    <div class="stamp">
        <p>CONFIDENTIEL</p> 
    </div>
</body>
</html>
