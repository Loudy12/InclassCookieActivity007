<section class="ui doubling stackable grid container">
    <div class="sixteen wide column">
    
        <div class="ui top attached tabular menu">
          <a class="active item" data-tab="first" aria-selected="true">Description</a>
          <a class="item" data-tab="second" aria-selected="false">On the Web</a>
          <a class="item" data-tab="third" aria-selected="false">Reviews</a>
        </div>

        <div class="ui bottom attached active tab segment" data-tab="first">
            <?php echo htmlspecialchars($row['Description'], ENT_QUOTES, 'UTF-8'); ?>
        </div>

        <div class="ui bottom attached tab segment" data-tab="second">
            <table class="ui definition very basic collapsing celled table">
                <tbody>
                    <tr>
                        <th>Wikipedia Link</th>
                        <td>
                            <?php 
                                if (!empty($row['WikiLink'])) {
                                    echo generateLink($row['WikiLink'], "View painting on Wikipedia"); 
                                }
                            ?>
                        </td>                       
                    </tr>                       
                    
                    <tr>
                        <th>Google Link</th>
                        <td>
                            <?php 
                                if (!empty($row['GoogleLink'])) {
                                    echo generateLink($row['GoogleLink'], "View painting on Google Art Project"); 
                                }
                            ?>
                        </td>                       
                    </tr>
                  
                    <tr>
                        <th>Google Description</th>
                        <td><?php echo htmlspecialchars($row['GoogleDescription'], ENT_QUOTES, 'UTF-8'); ?></td>                       
                    </tr>                      
                </tbody>
            </table>
        </div>

        <div class="ui bottom attached tab segment" data-tab="third">
            <div class="ui feed">
                <p>Reviews not included in this sample data set.</p>             
            </div>                
        </div>            
    </div>        
</section>
