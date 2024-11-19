<div class="ui segment">
    <div class="ui form">
        <div class="ui tiny statistic">
            <div class="value">
                <?php echo '$' . htmlspecialchars(number_format($row['MSRP'], 0), ENT_QUOTES, 'UTF-8'); ?>
            </div>
        </div>
        <form method="post" action="add-to-cart.php"> <!-- Add a form action -->
            <div class="four fields">
                <div class="three wide field">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="<?= isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : 1; ?>" min="1">
                </div>                               
                <div class="four wide field">
                    <label for="frame">Frame</label>
                    <select id="frame" name="frame" class="ui search dropdown">
                        <option value="0">Select Frame</option>
                        <?php foreach ($frames as $frame): ?>
                            <option value="<?= htmlspecialchars($frame['id'], ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($frame['name'], ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>  
                <div class="four wide field">
                    <label for="glass">Glass</label>
                    <select id="glass" name="glass" class="ui search dropdown">
                        <option value="0">Select Glass</option>
                        <?php foreach ($glasses as $glass): ?>
                            <option value="<?= htmlspecialchars($glass['id'], ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($glass['name'], ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>  
                <div class="four wide field">
                    <label for="matt">Matt</label>
                    <select id="matt" name="matt" class="ui search dropdown">
                        <option value="0">Select Matt</option>
                        <?php foreach ($matts as $matt): ?>
                            <option value="<?= htmlspecialchars($matt['id'], ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($matt['name'], ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>           
            </div>                     

            <div class="ui divider"></div>

            <button class="ui labeled icon orange button" type="submit">
                <i class="add to cart icon"></i>
                Add to Cart
            </button>
            <a class="ui right labeled icon button" href="add-to-favorites.php">
                <i class="heart icon"></i>
                Add to Favorites
            </a>  
        </form>      
    </div>
</div>  
