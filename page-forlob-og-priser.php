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
        <hr class="rounded"><h1>FORLØB OG PRISER</h1><hr class="rounded">
        <p>I Vane|Stærk studiet tilbydes der både 1:1 personlig <br>træning, coaching og gruppetræning. <br>
        Når du er i et forløb hos Vane|Stærk får du tilbud på <br> adgang til events, foredrag, temaaftener og workshops. <br><br>
        Klik herunder for at læse om: <br>
      </p>
      <p>Individuelt forløb</p>
      <p>Gruppetræning</p>

     </div>
        </div>
 <!-- #grøn boks -->       
        <div class="grønboks">
        <div class="row">
        <div class="col-md-8">
        <h2>INDIVIDUELT FORLØB</h2>
       <p>I et individuelt forløb modtager du privat træning og/eller coaching i <br>
       Vane|Stærk studiet. <br>
       Forløbet tager udgangspunkt i dine ønsker, og kan involvere både træning,  <br>
       coaching og madmentoring afhængigt at ​dine behov. Sammen tilpasser vi <br>
       løbende indsatsen alt efter hvor du er i din udvikling. <br>
       Et individuelt forløb er især for dig, som ønsker fuld opmærksomhed på dig og <br>
       din målsætning. Eller dig som har nogle individuelle behov relateret til din <br>
       adfærd eller krop. Det kunne fx være: <br> <br>
       - Uhensigtsmæssige spisemønstre. <br> <br>
       - En stærk indre kritiker der forhindrer en positiv udvikling. <br> <br>
       - Fysiske smerter eller gener. <br> <br>
       - Andet der kræver individuelt tilrettelagt forløb. <br> <br>
      Når du er i et personlig træningsforløb, er det kun dig og mig, som er i studiet <br>
      under sessionerne.</p>
</div>
</main>
<?php
get_footer();