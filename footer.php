 <!--  footer -->

 <footer class="footer">


     <!-- sitmap -->
     <div class="sitmap">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <h4> About Starbug</h4>

                     <?php wp_nav_menu(array(
                            'theme_location' => 'about',
                            'menu_class' => 'sitemap-link',
                            'container' => 'false'
                        )) ?>
                 </div>
                 <div class="col-md-3">
                     <h4> Drink at Home</h4>
                     <?php wp_nav_menu(array(
                            'theme_location' => 'story',
                            'menu_class' => 'sitemap-link',
                            'container' => 'false'
                        )) ?>
                 </div>
                 <div class="col-md-3">
                     <?php wp_nav_menu(array(
                            'theme_location' => 'sitemap',
                            'menu_class' => 'sitemap-link',
                            'container' => 'false'
                        )) ?>
                 </div>
                 <div class="col-md-3">
                     <ul class="footer-social-link">
                         <li>
                             <a href="">
                                 <img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="">
                             </a>
                         </li>
                         <li>
                             <a href="">
                                 <img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png" alt="">
                             </a>
                         </li>
                         <li>
                             <a href="">
                                 <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt="">
                             </a>
                         </li>
                     </ul>
                     <p>This is a demo website that built for WordPress theme development, Zero to Pro course.
                     </p>
                 </div>

             </div>
         </div>
     </div>
     <!-- copyright -->
     <div class="copyright">
         <div class="container">

             <div class="row">
                 <div class="col-md-6">
                    
                     <?php wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class' => 'copyright-link',
                            'container' => 'false'
                        )) ?>
                 </div>
                 <div class="col-md-6">
                     <p class="copyright-text">Starbugs.com | WordPress Theme for Zero to Pro Course.</p>
                 </div>

             </div>
         </div>
     </div>

 </footer>
 </div>

 <?php wp_footer(); ?>
 </body>

 </html>