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
         <br>
         <br>
         <br>
        <img src="https://dummyimage.com/700x400/#FFE8D/0ffe8e.jpg&text=VaneSt%C3%A6rk" alt="">
        </div>
        <div class="col-md-8" id="col-text">
         <br>
         <br>
         <br>
        <hr class="rounded"><h1>OM VANESTÆRK <br> Velkommen til VaneStærk</h1><hr class="rounded">
            <p>Mit navn er Sandra Lykke, og det er mig der er stifter af <br> Vane|Stærk. <br>
            Jeg har siden 2010 været træningsvejleder i Fitness World <br> og jeg har gennem årene hjulpet mange skønne <br> mennesker.
</p>
   
     </div>
        </div>
 <!-- #grøn boks -->       
        <div class="grønboks">
        <div class="row">
        <div class="col-md-8">
        <h2>PERSONLIG TRÆNING, COACHING, MADMENTORING, GRUPPETRÆNING</h2>
       
       <p>
       Vane|Stærk er et træningsstudie hvor der er plads til at du kan være dig selv, <br> helt uden at skulle forholde dig til andre. 
       <br> <br> I studiet kan du modtage personlig træning, coaching, madmentoring og 
       <br>gruppetræning. 
       <br>
       <br>Vane|Stærk’s kerneværdier er: <br>
       - Nærvær
       <br>
      - Trygge rammer
      <br>
      - Fællesskab
      <br>
      - Troværdighed
      <br>
      - Evidens
      <br>
      <br>
      Vane|Stærk er “et fællesskab man ikke har lyst til at gå glip af” 
       </p>   
</div>

            <div class="colcoral">
                <h3>"Hvis du mestrer vanen, så kommer målet til dig.
                    Men når du målet, uden at mestre vanen, så vil du miste målet igen på sigt." - Sandra Lykke</h3>
            </div>

</main>
<?php
get_footer();