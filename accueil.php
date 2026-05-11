<!DOCTYPE html>
<html lang='fr'>
<head>
    <title>Tables de multiplication</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Testez les tables de multiplication</h1>
    
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Liens valides ✓</h5>
            <p><a href="multiplication.php?num=1" class="btn btn-primary">Table de 1</a></p>
            <p><a href="multiplication.php?num=5" class="btn btn-primary">Table de 5</a></p>
            <p><a href="multiplication.php" class="btn btn-primary">Table de 10</a></p>
        </div>
    </div>
    
    <div class="card mb-3 border-warning">
        <div class="card-body">
            <h5 class="card-title">Liens à tester (problèmes potentiels) ⚠️</h5>
            <p><a href="multiplication.php" class="btn btn-warning">Sans paramètre</a></p>
            <p><a href="multiplication.php?num=" class="btn btn-warning">Paramètre vide</a></p>
            <p><a href="multiplication.php?num=abc" class="btn btn-warning">Lettre à la place d'un nombre</a></p>
        </div>
    </div>
    
    <div class="card border-danger">
        <div class="card-body">
            <h5 class="card-title text-danger">Test d'attaque XSS 🔴</h5>
            <p><a href="multiplication.php?num=<script>alert('XSS')</script>" class="btn btn-danger">Injection de script</a></p>
            <p class="text-muted small">Ce lien tente d'injecter du JavaScript. Votre code doit le bloquer !</p>
        </div>
    </div>
</body>
</html>