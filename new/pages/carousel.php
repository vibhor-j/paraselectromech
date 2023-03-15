<div id="carousel">
   <div id="owl-demo" class="owl-carousel owl-theme">
      <div class="item">
         <img src="http://i.imgur.com/W5rvndU.jpg" alt="">
         <div class="line">
            <div class="text hide-s">
               <div class="line">
                  <div class="prev-arrow hide-s hide-m">
                     <i class="icon-chevron_left"></i>
                  </div>
                  <div class="next-arrow hide-s hide-m">
                     <i class="icon-chevron_right"></i>
                  </div>
               </div>
               <h2>Free Onepage Responsive Template</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
            </div>
         </div>
      </div>
      <div class="item">
         <img src="http://i.imgur.com/YPTJb4G.jpg" alt="">
         <div class="line">
            <div class="text hide-s">
               <div class="line">
                  <div class="prev-arrow hide-s hide-m">
                     <i class="icon-chevron_left"></i>
                  </div>
                  <div class="next-arrow hide-s hide-m">
                     <i class="icon-chevron_right"></i>
                  </div>
               </div>
               <h2>Fully Responsive Components</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
            </div>
         </div>
      </div>
      <div class="item">
         <img src="http://i.imgur.com/hbZOKWn.jpg" alt="">
         <div class="line">
            <div class="text hide-s">
               <div class="line">
                  <div class="prev-arrow hide-s hide-m">
                     <i class="icon-chevron_left"></i>
                  </div>
                  <div class="next-arrow hide-s hide-m">
                     <i class="icon-chevron_right"></i>
                  </div>
               </div>
               <h2>Build new Layout in 10 minutes!</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      var theme_slider = $("#owl-demo");
      $("#owl-demo").owlCarousel({
          navigation: false,
          slideSpeed: 300,
          paginationSpeed: 400,
          autoPlay: 6000,
          addClassActive: true,
       // transitionStyle: "fade",
          singleItem: true
      });
      $("#owl-demo2").owlCarousel({
          slideSpeed: 300,
          autoPlay: true,
          navigation: true,
          navigationText: ["&#xf007","&#xf006"],
          pagination: false,
          singleItem: true
      });
   
      // Custom Navigation Events
      $(".next-arrow").click(function() {
          theme_slider.trigger('owl.next');
      })
      $(".prev-arrow").click(function() {
          theme_slider.trigger('owl.prev');
      })     
   }); 
</script>
