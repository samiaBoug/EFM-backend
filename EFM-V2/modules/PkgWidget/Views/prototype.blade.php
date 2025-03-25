<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluation de règle</title>
</head>
<body>
    <h1>Résultat de l'évaluation</h1>
    <p><strong>Produit :</strong> {{ json_encode($product, JSON_PRETTY_PRINT) }}</p>
    <p><strong>Règle :</strong> {{ $rule }}</p>
    <p><strong>Résultat :</strong> {!! $result ? '<span style="color:green;">Valide</span>' : '<span style="color:red;">Non valide</span>' !!}</p>
</body>
</html>
