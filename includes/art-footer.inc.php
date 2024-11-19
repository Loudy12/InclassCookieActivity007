<footer role="contentinfo">

   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <h4><i class="fas fa-info-circle"></i> About Us</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
         </div>
         <div class="col-md-3">
            <h4><i class="fas fa-phone-alt"></i> Customer Service</h4>
            <ul class="nav nav-stacked">
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>           
         </div>
         <div class="col-md-3">
            <h4><i class="fas fa-shopping-cart"></i> Just Ordered</h4>
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="images/art/works/tiny/099110.jpg" alt="The Veiled Woman">
              </a>
              <div class="media-body">
                <p class="media-heading similarTitle"><a href="display-art-work.php?id=404">The Veiled Woman</a></p>
                <em>5 minutes ago</em>
              </div>
            </div>
            <!-- Additional Just Ordered blocks are fine as-is -->
         </div>     
         <div class="col-md-3">
            <h4><i class="fas fa-envelope"></i> Contact us</h4>
            <form role="form">
              <div class="form-group tight-form-group">
                <label for="contact-name" class="sr-only">Name</label>
                <input type="text" id="contact-name" class="form-control" name="name" placeholder="Enter name ...">
              </div> 
              <div class="form-group tight-form-group">
                <label for="contact-email" class="sr-only">Email</label>
                <input type="email" id="contact-email" class="form-control" name="email" placeholder="Enter email ...">
              </div> 
              <div class="form-group tight-form-group">
                <label for="contact-message" class="sr-only">Message</label>
                <textarea class="form-control" id="contact-message" name="message" rows="3" placeholder="Enter message ..."></textarea>
              </div>   
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>  
         </div>
         
      </div>
   </div>
   
   <div id="copyrightRow">
      <div class="container">
         <div class="row">
           <p class="text-muted">All images are copyright to their owners. This is just a hypothetical site
           <span class="pull-right">&copy; <?php echo date("Y"); ?> Copyright Art Store</span></p>
         </div>
      </div>
   </div>
</footer>
