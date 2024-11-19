<?php
session_start();

if (isset($_GET['clear']) && $_GET['clear'] === 'all') {
    unset($_SESSION['favorites']);
} elseif (isset($_GET['PaintingID'])) {
    $paintingID = $_GET['PaintingID'];

    if (isset($_SESSION['favorites'])) {
        $_SESSION['favorites'] = array_filter($_SESSION['favorites'], function ($painting) use ($paintingID) {
            return $painting['PaintingID'] !== $paintingID;
        });
    }
}

header('Location: view-favorites.php');
exit();
?>
