<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (isset($_GET['PaintingID'], $_GET['ImageFileName'], $_GET['Title'])) {
    $paintingID = intval($_GET['PaintingID']);
    $imageFileName = $_GET['ImageFileName'];
    $title = $_GET['Title'];

    
    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = [];
    }

    //no duplicates
    $alreadyInFavorites = false;
    foreach ($_SESSION['favorites'] as $favorite) {
        if ($favorite['PaintingID'] === $paintingID) {
            $alreadyInFavorites = true;
            break;
        }
    }

    //if not already in favorites
    if (!$alreadyInFavorites) {
        $_SESSION['favorites'][] = [
            'PaintingID' => $paintingID,
            'ImageFileName' => $imageFileName,
            'Title' => $title
        ];
    }

    header('Location: view-favorites.php');
    exit();
} else {
    die('Invalid request. Missing required parameters.');
}
?>
