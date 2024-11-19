<?php
session_start();

if (isset($_GET['PaintingID'], $_GET['ImageFileName'], $_GET['Title'])) {
    // Sanitize inputs
    $paintingID = filter_input(INPUT_GET, 'PaintingID', FILTER_SANITIZE_NUMBER_INT);
    $imageFileName = filter_input(INPUT_GET, 'ImageFileName', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_GET, 'Title', FILTER_SANITIZE_STRING);

    // Validate sanitized inputs
    if ($paintingID && $imageFileName && $title) {
        $painting = [
            'PaintingID' => $paintingID,
            'ImageFileName' => $imageFileName,
            'Title' => $title
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
        // Log invalid input if needed
        error_log("Invalid input data for adding to favorites.");
        echo "Invalid input. Please ensure all fields are correctly filled.";
    }
} else {
    echo "Invalid request. Missing required parameters.";
}
?>
