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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="container">
        <div class="row">
        <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLI6o9s6sy_qZ7gi0zyVMyp4j1aqr3ikBqdLE6HOv2KQ&s" alt="">
        </div>
        <div class="col-md-8">
          <h1>Velkommen til Vane|Stærk, vi er glade for at se dig</h1>
        <p>Klik her for at læse mere om hvad vi kan tilbyde lige netop dig, og få mulighed for at blive del af et fællesskab, du ikke har lyst til at gå glip af</p>
        </div>
        </div>

        <div class="aktuelt">
        <div class="row">
        <div class="col-md-8">
        <h2>Aktuelt i Vane Stærk</h2>
        <h3><b>Vane Stærk forløb - Curvy:</b></h3>
        <p>Til dig der har et anstrengt forhold til din krop, men som er træt af slankekursmentaliteten, og i stedet ønsker mere glæde og sundhed i den krop du har.</br></br>

Vi arbejder med emnerne madro, bevægelsesglæde og kropsrespekt, i et 10 ugers forløb, der kombinerer gruppecoaching og træning.</br></br>

Vi mødes hver tirsdag kl 19.15 og torsdag kl 18, opstart uge 47 til og med uge 5. (Vi holder ferie i uge 52))</br></br>

<b>Pris: 5.500kr (eller 1850kr pr måned i 3 måneder)</b></p>

        </div>
        <div class="col-md-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLI6o9s6sy_qZ7gi0zyVMyp4j1aqr3ikBqdLE6HOv2KQ&s" alt="">
        </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();