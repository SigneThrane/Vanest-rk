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
<!-- #hero -->
		<main id="main" class="site-main" role="main">
        <div class="container">
        <div class="row" id="velkommen">
        <div class="col-md-4">
        <img width="100%"src=" <?php the_field('hero_forside'); ?>" alt="Vanestærk personale krammer og smiler" />
        </div>
        <div class="col-md-8" id="col-text">
        <hr class="rounded"><h1>Velkommen til Vane|Stærk, vi er glade for at se dig</h1><hr class="rounded">
        <p>Vi hjælper dig på din vej mod madro, bevægelsesglæde og selvkærlighed. Læs mere, for at se hvad vi kan tilbyde lige netop dig.  </p>
      <a href="https://signethrane.one/vanestaerkCMS/omkring-os/"><button id="laes"> Læs mere</button></a>  
     </div>
        </div>
 <!-- #aktuelt -->       
        <div class="grønboks">
        <div class="row">
        <div class="col-md-8">
        <h2>Aktuelt i Vane Stærk</h2>
        <h3><b>Vane Stærk forløb - Curvy:</b></h3>
        <p>Til dig der har et anstrengt forhold til din krop, men som er træt af slankekursmentaliteten, og i stedet ønsker mere glæde og sundhed i den krop du har.</br></br>

Vi arbejder med emnerne madro, bevægelsesglæde og kropsrespekt, i et 10 ugers forløb, der kombinerer gruppecoaching og træning.</br></br>

Vi mødes hver tirsdag kl 19.15 og torsdag kl 18, opstart uge 47 til og med uge 5. (Vi holder ferie i uge 52))</br></br>

<b>Pris: 5.500kr (eller 1850kr pr måned i 3 måneder)</b></p>
  <a href="https://signethrane.one/vanestaerkCMS/booking/"><button id="laes">Book her</button></a>
</div>
        <div class="col-md-4">
        <img width="100%"  src="<?php the_field('illustration_1'); ?>" alt="Kvindelig illustration" />
        </div>
        </div>
        </div>
		</main>
 <!-- #Galleri -->     
 <div><h2>Galleri</h2>
 <?php echo do_shortcode('[sliders_pack id="170"]'); ?></div>
 
  <!-- #Testimony -->   
<br>
  <div class="testimonialsboks">
    <br>
<h2>Det siger vores kunder om vanestærk:</h2>
<?php echo do_shortcode('[sp_testimonial id="160"]');?>
  </div>

<!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();