<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$favorites = isset($_SESSION['favorites']) ? $_SESSION['favorites'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
    <link href="css/semantic.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    
<?php include 'includes/art-header.inc.php'; ?>

<main class="ui container">
    <h1 class="ui header">Your Favorites</h1>
    
    <?php if (!empty($favorites)): ?>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($favorites as $favorite): ?>
                    <tr>
                        <td>
                            <img src="images/art/works/small-square/<?php echo htmlspecialchars($favorite['ImageFileName'], ENT_QUOTES, 'UTF-8'); ?>.jpg" 
                                 alt="<?php echo htmlspecialchars($favorite['Title'], ENT_QUOTES, 'UTF-8'); ?>" 
                                 class="ui small image">
                        </td>
                        <td>
                            <a href="single-painting.php?id=<?php echo htmlspecialchars($favorite['PaintingID'], ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars($favorite['Title'], ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </td>
                        <td>
                            <a class="ui red button" href="remove-favorites.php?id=<?php echo htmlspecialchars($favorite['PaintingID'], ENT_QUOTES, 'UTF-8'); ?>">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <a class="ui red button" href="remove-favorites.php?action=clear">Clear All Favorites</a>
    <?php else: ?>
        <p>You have no favorites yet.</p>
    <?php endif; ?>
</main>

<footer class="ui black inverted segment">
    <div class="ui container">Footer content here</div>
</footer>

</body>
</html>
