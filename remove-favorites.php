<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user wants to clear all favorites
if (isset($_GET['action']) && $_GET['action'] === 'clear') {
    unset($_SESSION['favorites']);
} elseif (isset($_GET['id'])) {
    // Sanitize and validate the PaintingID
    $paintingID = intval($_GET['id']);

    if (isset($_SESSION['favorites'])) {
        // Filter out the painting with the specified PaintingID
        $_SESSION['favorites'] = array_filter($_SESSION['favorites'], function ($painting) use ($paintingID) {
            return $painting['PaintingID'] !== $paintingID;
        });

        // Reindex the array to maintain proper indexing
        $_SESSION['favorites'] = array_values($_SESSION['favorites']);
    }
}

// Redirect to view-favorites.php
header('Location: view-favorites.php');
exit();
