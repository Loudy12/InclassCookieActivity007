<?php

function generateReviewStars($rating) {
    $rating = (int) $rating;
    $output = "";
    for ($i = 0; $i < $rating; $i++) {
        $output .= '<i class="star icon"></i>';
    }
    return $output;
}

function generateRatingStars($rating) {
    $rating = (int) $rating;
    $output = "";
    for ($i = 0; $i < $rating; $i++) {
        $output .= '<i class="orange star icon"></i>';
    }
    for ($i = $rating; $i < 5; $i++) {
        $output .= '<i class="empty star icon"></i>';
    }
    return $output;
}

function generateLink($url, $label) {
    return "<a href='" . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . "</a>";
}

function outputFilterOptions($data, $valueField, $dataField) {
    while ($single = $data->fetch()) {
        echo '<option value="' . htmlspecialchars($single[$valueField], ENT_QUOTES, 'UTF-8') . '">';
        echo htmlspecialchars($single[$dataField], ENT_QUOTES, 'UTF-8');
        echo '</option>';
    }
}

function makeArtistName($first, $last) {
    return htmlspecialchars($first . ' ' . $last, ENT_QUOTES, 'UTF-8');
}

?>
