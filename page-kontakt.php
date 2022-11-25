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
     <div class="row-kontakt">
             <div class="col4">
                  <br>
                <h1>KONTAKT</h1>
                <p>Vil du høre mere om mulighederne for personlig træning, <br> coaching eller gruppeforløb, så er jeg altid klar på en <br> uforpligtende snak over telefon eller i studiet. <br>
                    Du kan kontakte mig på telefon, instagram eller via <br> kontaktformularen her på siden.</p>
             </div>
                      <div class="col5">
                            <p>+45 28 45 64 43</p>
                            <p>@Sandras_Lykke</p>
                     </div>
                    <div class="col6">
                          <h1>KONTAKTFORMULAR</h1>
                          <?php echo apply_shortcodes( '[contact-form-7 id="56" title="Contact form 1"]' ); ?>

                    </div>
                       <div class="overlay">
                       <img class="kontakt" src="<?php the_field('kontakt'); ?>" alt="" />
                       <h1>Jeg ser frem til at <br> høre fra dig</h1>
                       </div>

    </div>

</main>

<?php
get_footer();