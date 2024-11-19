<?php
session_start();
$favorites = $_SESSION['favorites'] ?? [];

if (!empty($favorites)) {
    echo '<table>';
    foreach ($favorites as $painting) {
        echo '<tr>';
        echo '<td><img src="images/art/works/small-square/' . htmlspecialchars($painting['ImageFileName']) . '" alt="' . htmlspecialchars($painting['Title']) . '"></td>';
        echo '<td><a href="single-painting.php?PaintingID=' . urlencode($painting['PaintingID']) . '">' . htmlspecialchars($painting['Title']) . '</a></td>';
        echo '<td><a href="remove-favorites.php?PaintingID=' . urlencode($painting['PaintingID']) . '" class="btn">Remove</a></td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '<a href="remove-favorites.php?clear=all" class="btn">Clear All Favorites</a>';
} else {
    echo 'No favorites yet.';
}
?>

<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
  
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    
    
</head>
<body >
    
<?php include 'includes/art-header.inc.php'; ?>
    
<main class="ui container">
    
    <section class="ui basic segment ">
      <h2>Favorites</h2>
        <table class="ui basic collapsing table">
          <thead>
            <tr>
              <th>Image</th>
              <th>Title</th>
              <th>Action</th>
          </tr></thead>
          <tbody>
              <?php 
                /* // markup for sample favorite is as follows:
                     <tr>
                        <td><img src="images/art/square-medium/092040.jpg"></td>
                        <td><a href="single-painting.php?id=369">Adoration in the Forest</a></td>
                        <td><a class="ui small button" href="remove-favorites.php?id=369">Remove</a></td>
                     </tr>
                   // loop through all favorites and output a row for each one  
                */
              ?>
          </tbody>
          <tfoot class="full-width">
              <th colspan="3">
                <a class="ui left floated small primary labeled icon button" href="remove-favorites.php">
                  <i class="remove circle icon"></i> Remove All Favorites
                </a>                  
              </th>
          </tfoot>
         </table>
    </section>

</main>    
    
  <footer class="ui black inverted segment">
      <div class="ui container">footer</div>
  </footer>
</body>
</html>    