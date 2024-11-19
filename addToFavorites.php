<?php
session_start();

if (isset($_GET['PaintingID'], $_GET['ImageFileName'], $_GET['Title'])) {
    $painting = [
        'PaintingID' => $_GET['PaintingID'],
        'ImageFileName' => $_GET['ImageFileName'],
        'Title' => $_GET['Title']
    ];

    if (!isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = [];
    }

    // Check for duplicates
    $exists = false;
    foreach ($_SESSION['favorites'] as $fav) {
        if ($fav['PaintingID'] == $painting['PaintingID']) {
            $exists = true;
            break;
        }
    }

    if (!$exists) {
        $_SESSION['favorites'][] = $painting;
    }

    header('Location: view-favorites.php');
    exit();
} else {
    echo "Invalid request.";
}
?>
