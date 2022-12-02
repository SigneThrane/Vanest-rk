<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
  
<main id="main" class="site-main" role="main">
      <br>
<div class="container">
        <div class="row" id="velkommen">
        <div class="col-4">
        <img src="<?php the_field('kontakt'); ?>" alt="" />
        </div>
        <div class="col-8" id="col-text">
             <div>
                  <br> 
                  <hr class="rounded"><h1>KONTAKT</h1><hr>
                <p>Vil du høre mere om mulighederne for personlig træning, <br> coaching eller gruppeforløb, så er jeg altid klar på en <br> uforpligtende snak over telefon eller i studiet. <br>
                    Du kan kontakte mig på telefon, instagram eller via <br> kontaktformularen her på siden. <br>
                    Skriv til os, hvis du har nogle spørgsmål, vi svarer vi så snart vi kan.
                  </p>
             </div>
                      <div id="banner">
                            <p><i id="kontakticon" class="fas fa-phone me-3"></i> +45 28 45 64 43</p>
                            <p><i id="kontakticon" class="fab fa-instagram"></i> @vane.staerk</p>
                            </div>
                     </div>
                     </div>
                     <div class="row">
                    <div class="col-6" id="kontaktform1"> 
                    <img width="80%" src="<?php the_field('illustration'); ?>" alt="" /> </div>
                    <div class="col-6" id="kontaktform2">
                    <hr class="rounded"><h2>Skriv til os!</h2><hr><br>
                          <?php echo apply_shortcodes( '[contact-form-7 id="56" title="Contact form 1"]' ); ?>
                    </div>
                    </div>
                     </div>



</main>

<?php
get_footer();