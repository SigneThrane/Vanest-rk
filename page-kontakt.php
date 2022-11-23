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
                <h1>KONTAKT</h1>
                <p>Vil du høre mere om mulighederne for personlig træning, coaching eller gruppeforløb, så er jeg altid klar på en uforpligtende snak over telefon eller i studiet. <br>
                    Du kan kontakte mig på telefon, instagram eller via kontaktformularen her på siden.</p>
             </div>
                      <div class="col5">
                            <p>+45 28 45 64 43</p>
                            <p>@Sandras_Lykke</p>
                     </div>
                    <div class="col6">
                          <h1>KONTAKTFORMULAR</h1>
                          <?php echo apply_shortcodes( '[[contact-form-7 id="56" title="Contact form 1"]]' ); ?>

                    </div>
                       <div class="overlay">
                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLI6o9s6sy_qZ7gi0zyVMyp4j1aqr3ikBqdLE6HOv2KQ&s" alt="">
                       <h1>Jeg ser frem til at høre fra dig</h1>
                       </div>

    </div>

</main>

<?php
get_footer();