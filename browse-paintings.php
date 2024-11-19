<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'includes/data.inc.php';
include 'includes/art-functions.inc.php';
$filter = "All Paintings [Top 20]";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
    
<main class="ui segment doubling stackable grid container">
    <section class="four wide column">
        <?php include 'includes/browse-filters.inc.php'; ?>
    </section>
    
    <section class="twelve wide column">
        <h1 class="ui header">Paintings</h1>
        <h3 class="ui sub header"><?php echo htmlspecialchars($filter, ENT_QUOTES, 'UTF-8'); ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
          <?php if (!empty($paintings)) : ?>
              <?php foreach ($paintings as $work) : ?>
                  <li class="item">
                      <a class="ui small image" href="single-painting.php?id=<?php echo htmlspecialchars($work['PaintingID'], ENT_QUOTES, 'UTF-8'); ?>">
                          <<img src="images/art/square-medium/<?php echo htmlspecialchars($work['ImageFileName'], ENT_QUOTES, 'UTF-8'); ?>.jpg"
                          alt="<?php echo htmlspecialchars($work['Title'], ENT_QUOTES, 'UTF-8'); ?>">

                      </a>
                      <div class="content">
                          <a class="header" href="single-painting.php?id=<?php echo htmlspecialchars($work['PaintingID'], ENT_QUOTES, 'UTF-8'); ?>">
                              <?php echo htmlspecialchars($work['Title'], ENT_QUOTES, 'UTF-8'); ?>
                          </a>
                          <div class="meta">
                              <span class="cinema"><?php echo htmlspecialchars(makeArtistName($work['FirstName'], $work['LastName']), ENT_QUOTES, 'UTF-8'); ?></span>
                          </div>        
                          <div class="description">
                              <p><?php echo htmlspecialchars($work['Excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                          </div>
                          <div class="meta">     
                              <strong><?php echo '$' . number_format($work['MSRP'], 0); ?></strong>        
                          </div>        
                          <div class="extra">
                              <a class="ui icon orange button" href="cart.php?id=<?php echo htmlspecialchars($work['PaintingID'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="Add to cart">
                                  <i class="add to cart icon"></i>
                              </a>
                              <a class="ui icon button" href="addToFavorites.php?PaintingID=<?php echo urlencode($work['PaintingID']); ?>&ImageFileName=<?php echo urlencode($work['ImageFileName']); ?>&Title=<?php echo urlencode($work['Title']); ?>" aria-label="Add to favorites">
                                  <i class="heart icon"></i> Add to Favorites
                              </a>  
                          </div>        
                      </div>      
                  </li>
              <?php endforeach; ?>
          <?php else : ?>
              <p>No paintings available.</p>
          <?php endif; ?>
            
        </ul>        
    </section>  
</main>    
    
<footer class="ui black inverted segment">
  <div class="ui container">footer for later</div>
</footer>

</body>
</html>
