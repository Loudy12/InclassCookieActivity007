<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Store</title>
    <link href="css/semantic.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/art-header.inc.php'; ?>

    <main class="ui container">
        <h1>Welcome to the Art Store</h1>
        <p>Explore our collection of paintings, add your favorites, and manage your cart.</p>
        <a href="browse-paintings.php" class="ui primary button">Browse Paintings</a>
        <a href="view-favorites.php" class="ui button">View Favorites</a>
    </main>

    <footer class="ui black inverted segment">
        <div class="ui container">footer for later</div>
    </footer>
</body>
</html>
