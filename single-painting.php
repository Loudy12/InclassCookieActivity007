<?php
session_start(); // Start the session

include 'includes/data.inc.php';
include 'includes/art-functions.inc.php';

// Sanitize and validate the ID passed via GET, default to 406
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, ['options' => ['default' => 406]]);

// Find the appropriate painting/row
$row = null;
foreach ($paintings as $p) {
    if ($p["PaintingID"] == $id) {
        $row = $p;
        break;
    }
}

// Handle case where painting is not found
if (!$row) {
    die('Painting not found.');
}
?>

<!DOCTYPE html>
<html lang="en">   
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="css/semantic.js"></script>
  <script src="js/misc.js"></script>
    
  <link href="css/semantic.css" rel="stylesheet">
  <link href="css/icon.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
    
</head>
<body>
    
<?php include 'includes/art-header.inc.php'; ?>
    
<main>
    <!-- Main section about painting -->
    <section class="ui segment grey100">
        <div class="ui doubling stackable grid container">
            <div class="nine wide column">
                <img src="images/art/medium/<?php echo htmlspecialchars($row['ImageFileName'], ENT_QUOTES, 'UTF-8'); ?>.jpg" 
                     alt="<?php echo htmlspecialchars($row['Title'], ENT_QUOTES, 'UTF-8'); ?>" 
                     class="ui big image" id="artwork">
            </div>
            <div class="seven wide column">
                
                <!-- Main Info -->
                <div class="item">
                    <h2 class="header"><?php echo htmlspecialchars($row['Title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <h3><?php echo htmlspecialchars($row['FirstName'] . ' ' . $row['LastName'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <div class="meta">
                        <p><?php echo htmlspecialchars($row['Excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>  
                </div>                          
                
                <!-- Tabs For Details, Museum, Genre, Subjects -->
                <?php include 'includes/painting-small-tabs.inc.php'; ?>
                
                <!-- Cart and Price -->
                <?php include 'includes/cart-box.inc.php'; ?>                        
                          
            </div>
        </div>
    </section>
    
    <!-- Tabs for Description, On the Web, Reviews -->
    <?php include 'includes/painting-large-tabs.inc.php'; ?> 
        
</main>    
    
<footer class="ui black inverted segment">
    <div class="ui container">footer</div>
</footer>
</body>
</html>
