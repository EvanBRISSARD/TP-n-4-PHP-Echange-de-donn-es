<!DOCTYPE html>
<html lang='fr'>
<head>
    <title>Multiplication</title>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
<?php 
    // ❌ CODE NON SÉCURISÉ - À CORRIGER
    $num = $_GET['num'];
    echo '<h1>Table de multiplication de ' . $num . '</h1>';
        echo '<table class="table table-striped table-bordered mt-4" style="max-width: 400px;">';
        echo '<thead class="table-dark"><tr><th>Opération</th><th>Résultat</th></tr></thead>';
        echo '<tbody>';
        
        for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            echo '<td>' . $num . ' x ' . $i . '</td>';
            echo '<td><strong>' . ($num * $i) . '</strong></td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
    ?>
	    <div class="mt-4">
        <a href="accueil.php" class="btn btn-primary">← Retour à l'accueil</a>
    </div>
</body>
</html>