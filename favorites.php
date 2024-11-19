<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the required parameter 'id' exists
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die('Invalid request. Missing required parameters.');
}

$paintingID = intval($_GET['id']); // Sanitize the input

include 'includes/data.inc.php';

// Look for the painting in the data
$painting = null;
foreach ($paintings as $work) {
    if ($work['PaintingID'] == $paintingID) {
        $painting = $work;
        break;
    }
}

if ($painting) {
    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = [];
    }

    // Prevent duplicates
    $alreadyInFavorites = false;
    foreach ($_SESSION['favorites'] as $fav) {
        if ($fav['PaintingID'] == $paintingID) {
            $alreadyInFavorites = true;
            break;
        }
    }

    if (!$alreadyInFavorites) {
        $_SESSION['favorites'][] = [
            'PaintingID' => $painting['PaintingID'],
            'ImageFileName' => $painting['ImageFileName'],
            'Title' => $painting['Title']
        ];
    }

    // Redirect to view-favorites.php
    header('Location: view-favorites.php');
    exit();
} else {
    die('Invalid request. Painting not found.');
}
?>
