<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réponse à votre demande</title>
</head>
<body>

    <div style="font-family: Arial, sans-serif; color: #333;">
        <!-- Header Section -->
        <div style="background-color: #4e73df; padding: 20px; text-align: center; color: white; border-radius: 10px 10px 0 0;">
            <h2>Réponse à votre demande</h2>
            <p style="font-size: 16px;">Nous avons bien pris en compte votre demande et vous répondons ci-dessous.</p>
        </div>

        <!-- Content Section -->
        <div style="padding: 20px; background-color: #f8f9fc; border-radius: 0 0 10px 10px;">
            <p style="font-size: 16px; line-height: 1.6;">Cher(e) {{ $nom }},</p>

            <p style="font-size: 16px; line-height: 1.6;">
                Nous avons examiné votre demande concernant <strong>{{ $type }}</strong> et nous regrettons de vous informer que <strong>votre demande a été refusée</strong>.
            </p>

            <div style="background-color: #ffffff; padding: 15px; border: 1px solid #d1d3e2; border-radius: 5px;">
                <h5 style="font-size: 18px; color: #4e73df;">Détails de la demande :</h5>
                <p><strong>Nom de l'étudiant :</strong> {{ $nom }}</p>
                <p><strong>Sujet de la demande :</strong> {{ $type }}</p>
                <p><strong>Réponse :</strong> Demande refusée</p>
            </div>

            <div style="margin-top: 30px;">
                <p style="font-size: 16px; line-height: 1.6;">Si vous avez d'autres questions ou souhaitez plus d'informations, n'hésitez pas à nous contacter.</p>
                <p style="font-size: 16px; line-height: 1.6;">Nous vous remercions de votre compréhension.</p>
            </div>

        </div>

        <!-- Footer Section -->
        <div style="text-align: center; margin-top: 30px; font-size: 14px; color: #6c757d;">
            <p>Ce message a été envoyé par <strong>{{ config('app.name') }}</strong>.</p>
            <p>Si vous n'avez pas effectué cette demande, veuillez ignorer cet e-mail.</p>
        </div>
    </div>
</body>
</html>
