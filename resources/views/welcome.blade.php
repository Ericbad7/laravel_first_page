<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Bonjour</h1>
        <p>Bienvenue sur mon site</p>
        <p> Nous sommes aujourd'hui le {{ now()->format('d/m/Y') }} </P>
    </body>
</html>