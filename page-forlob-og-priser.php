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
         <img id="herof" src="<?php the_field('heropriser'); ?>" alt="" />
        </div>
        <div class="col-md-8" id="col-text">
        <br>
         <br>
         <br>
        <hr class="rounded"><h1>FORLØB OG PRISER</h1><hr class="rounded">
        <p>I Vane|Stærk studiet tilbydes der både 1:1 personlig <br>træning, coaching og gruppetræning. <br>
        Når du er i et forløb hos Vane|Stærk får du tilbud på <br> adgang til events, foredrag, temaaftener og workshops. <br><br>

     </div>
        </div>
 <!-- #grøn boks -->       
        <div class="grønboks">
        <div class="row">
        <div class="col-md-8">
      <a id="individueltforlob"><h2>INDIVIDUELT FORLØB</h2></a> 
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
<div class="col-md-4">
<img id="illustrationom" src="<?php the_field('illustration_5'); ?>" alt="" />
        </div>
</div>
</div>


                     <div class="colforløb">
                            <br>
                            <h2>FORLØBSTYPER</h2>
                            <p> Vane|Stærk studiet tilbydes du forløb mellem 8 og 52 sessioner eller som abonnementsløsning.
                                   <br> <br>
                                   Herunder ser du en oversigt over aktuelle forløbspa​kker.
                                   <br> <br>
                                   Alle forløb kan købes via ratebetaling uden meromkost​n​ing.
                            </p>
                     </div>

<table>
        <tr>
              <thead>
              <th scope="col">Mål</th>
               <th scope="col">Antal sessioner</th>
              <th scope="col">Kontant pris</th>
               <th scope="col">Pr. Session</th>
              </thead>
       </tr>
       <tbody>
       <tr>
                      <td scope="row">Kickstart</td>
                      <td>8 sessioner</td>
                      <td>5.200</td>
                      <td>650</td>
                     </tr>
                            <tr>
                             <td scope="row">Vaneændring</td>
                             <td>16 sessioner</td>
                             <td>10,000</td>
                             <td>625</td>
                            </tr>
                                    <tr>
                                     <td scope="row">Vaneændring og fastholdelse</td>
                                     <td>32 sessioner</td>
                                     <td>19.200</td>
                                      <td>600</td>
                                    </tr>
                                                  <tr>
                                                   <td scope="row">Vaneændring og fastholdelse</td>
                                                  <td>52 sessioner</td>
                                                   <td>29.900</td>
                                                  <td>575</td>
                                                   </tr>
       </tbody>
                    
</table>

<div class="colforløb">
                            <h2>Abonnementsaftale</h2>
                            <p> Skal personlig træning og coaching være en fast del af din livsstil, 
                                   så du altid har en fast sparringspartner ved din side, til at hjælpe 
                                   dig med at prioritere din sundhed og mentale trivsel, så kan du tegne 
                                   et abonnement hos Vane|Stærk, hvor prisen for dine sessioner er reduceret 
                                   til 595,- og ​du betaler en månedlig ydelse, svarende til antal bookede sessioner.
                            </p>
                     </div>

<table>
   <thead>
   <tr>
              <th scope="col">Abonnementstype</th>
               <th scope="col">1 session/uge</th>
              <th scope="col">2 session/uge</th>
       </tr>
   </thead>
   <tbody>
   <tr>
                      <td scope="row">Månedlig ydelse</td>
                      <td>Forventeligt 2.400</td>
                      <td>Forventeligt 4.800</td>
                     </tr>
   </tbody>
      
                   
                           
</table>

<div class="colforløb">
          <p>
          Ved oprettelse af abonnement binder du dig til minimum 3 måneder. (hhv. 16 eller 24 sessioner)
          <br>
          Samt binder dig til en opsigelsesperiode på 1 måned fra opsigelse.. (hhv 4 eller 8 sessioner)
          </p>          
</div>

<div class="container">
        <div class="row" id="beigeboks">
        <div class="col-md-4">
        <br>
         <br>
         <br>
         <img id="herof2" src="<?php the_field('billedevane'); ?>" alt="" />
        </div>
        <div class="col-md-8" id="col-text">
        <br>
         <br>
         <br>
        <hr class="rounded">
        <h1>Jeg er altid til rådighed for en uforpligtende samtale inden køb af forløb.</h1>
              <p>
              Kontakt mig, så finder vi en tid hvor vi <br>
              kan mødes og få en snak om dine <br>
              ønsker og du kan blive klogere på, om <br>
              det er mig ​der skal hjælpe dig. Eller <br>
              find en ledig tid via "gå til booking" <br>
              knappen herunder.
              </p>
           <a href="/booking/"> <button id="laes">Gå til booking</button></a>  
     </div>
        </div>

        <div class="grønboks">
        <div class="row">
        <div class="col-md-8">
        <h2>GRUPPETRÆNING</h2>
              <p>
              Gruppetræning udgør en stor del af min praksis, da jeg har oplevet 
              hvordan træningsglæden og motivationen for at ​fastholde træningsrytmen 
              stiger når vi samles om træningen i grupper. <br><br>
              På gruppetræning indgår du på 1-2 hold ugentligt sammen med op til 7 
              andre på hvert hold. Det er den samme gruppe du træner med på hvert hold, 
              så vi får oparbejdet en god dynamik og holdånd. <br> <br>
              Træningen består af helkropstræning med frie vægte og egen kropsvægt. 
              Og vi arbejder med at fremme all round sundhed, med elementer af styrke, 
              smidighed og udholdenhed.
              </p>
</div>
<div class="col-md-4">
<img  id="illustrationf" src="<?php the_field('illustration_6'); ?>" alt="" />
        </div>
</div>
</div>

<div class="colforløb">
          <p>
          Gruppetræningen udbydes som et abonnement, hvor du kan vælge om du vil deltage på 1 
          eller 2 hold ugentligt. Tilkøb af abonnement sker ved henvendelse. <br> <br>
          Herunder listet abonnementstyper og priser for gruppetræning:
          </p>        
</div>

<table>
       <thead>
       <tr>
              <th scope="col">Abonnementstype</th>
               <th scope="col">1 session/uge</th>
              <th scope="col">2 session/uge</th>
       </tr>
       </thead>

       <tbody>
       <tr>
                      <td scope="row">Månedlig ydelse</td>
                      <td>275</td>
                      <td>500</td>
                     </tr> 
       </tbody>
      
                                         
</table>

<div class="colforløb">
          <p>
          Der er desuden mulighed for drop in, hvis der plads på holdene - pris 70 kr.
               <br> <br>
               Kontakt mig, hvis du vil have en besked, når der er ledige pladser.
          </p>        
</div>
<div class="colforløb">
              <h2>GRUPPETRÆNINGER</h2>
              <p> I Vane|Stærk studiet tilbydes du forløb mellem 8 og 52 sessioner 
                     eller som abonnementsløsning.
              <br> <br>
              Herunder ser du en oversigt over aktuelle forløbspa​kker.
              <br> <br>
              Alle forløb kan købes via ratebetaling uden meromkost​n​ing.
                            </p>
                     </div>


<table>
        <tr>
              <th><?php the_field('kolonne_1'); ?></th>
               <td><?php the_field('kolonne_2'); ?></td>
              <td><?php the_field('kolonne_3'); ?></td>
               <td><?php the_field('kolonne_4'); ?></td>
               <td><?php the_field('kolonne_5'); ?></td>
       </tr>
                     <tr>
                      <th><?php the_field('kolonne_6'); ?></th>
                      <td><?php the_field('kolonne_7'); ?></td>
                      <td><?php the_field('kolonne_8'); ?></td>
                      <td><?php the_field('kolonne_9'); ?></td>
                     <td><?php the_field('kolonne_10'); ?></td>
                     </tr>  
                     </tr>
                            <tr>
                             <th><?php the_field('kolonne_11'); ?></th>
                             <td><?php the_field('kolonne_12'); ?></td>
                             <td><?php the_field('kolonne_13'); ?></td>
                             <td><?php the_field('kolonne_14'); ?></td>
                             <td><?php the_field('kolonne_15'); ?></td>
                            </tr>
                                    <tr>
                                     <th><?php the_field('kolonne_16'); ?></th>
                                     <td><?php the_field('kolonne_17'); ?></td>
                                     <td><?php the_field('kolonne_18'); ?></td>
                                      <td><?php the_field('kolonne_19'); ?></td>
                                      <td><?php the_field('kolonne_20'); ?></td>
                                    </tr>
</table>

<div class="container">
        <div class="row" id="beigeboks">
        <div class="col-md-4">
        <br>
         <br>
         <br>
         <img src="<?php the_field('billede_3'); ?>" alt="" />
        </div>
        <div class="col-md-8" id="col-text">
        <br>
         <br>
         <br>
        <hr class="rounded">
       <p>Kontakt mig for at komme i gang som abonnent på gruppetræning i Vane|Stærk studiet.
              <br>
              
Du kan også kontakte mig med ønsker om specifikke hold, eller hvis i er en gruppe som ønsker at træne sammen.
       </p>
            <a href="/kontakt/"><button id="laes">Kontakt</button></a>  
     </div>
        </div>


</main>


<?php
get_footer();