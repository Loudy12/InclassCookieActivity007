<?php
session_start();

// Simulated database query results (replace these with actual DB queries)
$artists = [
    ['id' => 1, 'name' => 'Leonardo da Vinci'],
    ['id' => 2, 'name' => 'Vincent van Gogh']
];
$museums = [
    ['id' => 1, 'name' => 'Louvre'],
    ['id' => 2, 'name' => 'Van Gogh Museum']
];
$shapes = [
    ['id' => 1, 'name' => 'Rectangle'],
    ['id' => 2, 'name' => 'Circle']
];

// Get selected values from query string
$selectedArtist = $_GET['artist'] ?? '0';
$selectedMuseum = $_GET['museum'] ?? '0';
$selectedShape = $_GET['shape'] ?? '0';
?>

<form class="ui form" method="get" action="browse-paintings.php">
  <h3 class="ui dividing header">Filters</h3>

  <div class="field">
    <label>Artist</label>
    <select class="ui fluid dropdown" name="artist">
        <option value="0">Select Artist</option>
        <?php foreach ($artists as $artist): ?>
            <option value="<?= htmlspecialchars($artist['id']) ?>" <?= $artist['id'] == $selectedArtist ? 'selected' : '' ?>>
                <?= htmlspecialchars($artist['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>
  </div>  

  <div class="field">
    <label>Museum</label>
    <select class="ui fluid dropdown" name="museum">
        <option value="0">Select Museum</option>
        <?php foreach ($museums as $museum): ?>
            <option value="<?= htmlspecialchars($museum['id']) ?>" <?= $museum['id'] == $selectedMuseum ? 'selected' : '' ?>>
                <?= htmlspecialchars($museum['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>
  </div>   

  <div class="field">
    <label>Shape</label>
    <select class="ui fluid dropdown" name="shape">
        <option value="0">Select Shape</option>
        <?php foreach ($shapes as $shape): ?>
            <option value="<?= htmlspecialchars($shape['id']) ?>" <?= $shape['id'] == $selectedShape ? 'selected' : '' ?>>
                <?= htmlspecialchars($shape['name']) ?>
            </option>
        <?php endforeach; ?>
    </select>
  </div>   

  <button class="small ui orange button" type="submit">
    <i class="filter icon"></i> Filter 
  </button>    

</form>
