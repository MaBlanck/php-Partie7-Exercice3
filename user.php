<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 3 Partie 7</title>
</head>

<body>
    <h1>Welcome</h1>

    <?php
    if (isset($_GET['Nom']) && isset($_GET['Prenom'])): ?>
    <?= 'Bonjour' . ' ' . $_GET['Nom'] . ' ' . $_GET['Prenom'];?>
    <?php endif?>

</body>
</html>