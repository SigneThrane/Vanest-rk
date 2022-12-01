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
         <img id="hero2" src="<?php the_field('hero_om_vanestaerk'); ?>" alt="" />
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
<div class="col-md-4">
<img id="illustrationom" src="<?php the_field('illustration_2'); ?>" alt="" />
        </div>
</div>
</div>

            <div class="colcoral">
                <h1 id="quote">"Hvis du mestrer vanen, så kommer målet til dig. <br>
                    Men når du målet, uden at mestre vanen, så vil du <br>
                    miste målet igen på sigt." - Sandra Lykke</h1>
            </div>


 <div class="biografi">
 <div class="row">
        <div class="col-6"id="venstreboks">
            <p>I takt med min faglige og personlige 
        udvikling, og især som følge af et <br>
            større indblik i psykologien bag  
            spiseadfærd og vaneændring, <br> har jeg 
            følt et behov for at bryde ud af de 
            kommercielle rammer. <br><br>

            For det er ikke altid at et stort 
            fitnesscenter, skaber de bedste  
            rammer for den mentale rejse, som en 
            livsstilsændring jo også er. <br>
            Tværtimod kan det være en barriere  
            for overhovedet at komme i gang. <br><br>
            
            Derfor opstod motivationen for at 
            skabe Vane|Stærk studiet også i mig. <br>
            Et træningsstudie hvor der er plads til  
            at du kan være dig selv, helt uden at 
            skulle forholde dig til andre. <br> <br>
            Det mener 
            jeg giver de bedste rammer, for  
            arbejdet med vaneændring. Det er min 
            klare erfaring og overbevisning, at: <br> <br>

            Hvis du mestrer vanen, så kommer  
            målet til dig. Men når du målet, uden 
            at mestre vanen, så vil du miste målet 
            igen på sigt. <br><br>

            Og i et forløb i Vane|Stærk studiet, vil 
            du derfor arbejde med  
            vaneændring — og vil med stor 
            sandsynlighed Ikke kun arbejde med <br>  
            dine trænings- og spisevaner, <br>
             men  
            også dykke ned i dine værdier og din 
            indre dialog.
        </p>
        </div>

            <div class="col-md-6" id="Corallinjeboks">
        
            <p>
            <b>RELEVANT UDDANNELSE</b> <br>
                <b>2021-2022</b> - Madmentor <br>
                <b>201​1-2015</b> - Bachelor i Fy​sioterapi <br>
                <b>2014</b> - Kostvejleder <br>
                <b>2012</b>  ​- Personlig træner <br>
                <b>2​010 </b>  - Fitness instruktør <br> <br>
             
                <b>MINI KURSER</b>
           
                <b>2021 </b> - Graviditet og efte​rfødsel v. Kristian Bradsted <br>
                <b>2021 </b>   - Smerter v. Jacob B​eerman  <br>
                <b>2017</b>    - Squat, bænkpres og​ dødløft v. Jacob Beerman <br> <br>
            
                  <b>ERFARING</b>
          
                <b> 2022</b>  - Åbning af Vane|Stæ​rk <br>
                <b>2022</b> - Personlig træner i​ Fitness World Gl. Vardevej (fuldtid) <br>
                <b>2018</b>  - Mentor for personl​ige trænere i Fitness World i region Syddanmark <br>
               <b>2016</b>   - Personlig træner (​fuld tid) <br>
                 <b> 2015</b>  - Ass. centerleder o​g personlig træner i FW Ådalsparken <br>
                 <b>2012</b>  - Personlig træner i​ FW Ådalsparken (bijob) <br>
                <b>2010</b>  - Fitness instruktør​ i FW Dannebrogsgade i Aalborg
            </p>
            <img id="illustration3" src="<?php the_field('illustration_3'); ?>" alt="" />
            </div>
</div>

 </div>           


        <div class="personale">
            <hr class="rounded"><h1>OM OS <br>PERSONERNE HOS VANESTÆRK</h1><hr class="rounded">
        </div>


       <div class="row" id="personale1">
        <div class="col-4">
        <img id="personaleb" src="<?php the_field('personale_1'); ?>" alt="" />
        </div>
        
                <div class="col-8">
                    <h1 id="personaletekst">Sandra Lykke</h1>
                    <p>
                    Gruppetræning udgør en stor del af min praksis, da jeg har oplevet <br>
                    hvordan træningsglæden og motivationen for at ​fastholde  <br>
                    træningsrytmen stiger når vi samles om træningen i grupper. <br> <br>
                    På gruppetræning indgår du på 1-2 hold ugentligt sammen med op <br>
                    til 7 andre på hvert hold. Det er den samme gruppe du træner med <br>
                    på hvert hold, så vi får oparbejdet en god dynamik og holdånd. <br> <br>
                    Træningen består af helkropstræning med frie vægte og egen <br>
                    kropsvægt. <br>
                    Og vi arbejder med at fremme all round sundhed, med elementer af <br>
                    styrke, smidighed og udholdenhed.
                    </p>
                </div>
       </div> 
       <br>
        <br>
       <div class="row" id="personale2">
        <div class="col-4">
        <img id="personaleb" src="<?php the_field('personale_2'); ?>" alt="" />
        </div>
        
                       <div class="col-8">
                       <h1 id="personaletekst">Sara Busch</h1>
                            <p>
                            Gruppetræning udgør en stor del af min praksis, da jeg har oplevet  <br>
                            hvordan træningsglæden og motivationen for at ​fastholde <br>
                            træningsrytmen stiger når vi samles om træningen i grupper. <br><br>
                            På gruppetræning indgår du på 1-2 hold ugentligt sammen med op <br>
                            til 7 andre på hvert hold. Det er den samme gruppe du træner med  <br>
                            på hvert hold, så vi får oparbejdet en god dynamik og holdånd. <br> <br>
                            Træningen består af helkropstræning med frie vægte og egen <br>
                            kropsvægt.  <br>
                            Og vi arbejder med at fremme all round sundhed, med elementer af <br>
                            styrke, smidighed og udholdenhed. <br>
                            </p>
                     </div>
       </div>
       <br>
       <br>
       <div class="row" id="personale3">
        <div class="col-4">
        <img id="personaleb" src="<?php the_field('personale_3'); ?>" alt="" />
        </div>
        
                     <div class="col-8">
                     <h1 id="personaletekst">Kristiane Jensen</h1>
                     <p>
                            Gruppetræning udgør en stor del af min praksis, da jeg har oplevet  <br>
                            hvordan træningsglæden og motivationen for at ​fastholde <br>
                            træningsrytmen stiger når vi samles om træningen i grupper. <br><br>
                            På gruppetræning indgår du på 1-2 hold ugentligt sammen med op <br>
                            til 7 andre på hvert hold. Det er den samme gruppe du træner med  <br>
                            på hvert hold, så vi får oparbejdet en god dynamik og holdånd. <br> <br>
                            Træningen består af helkropstræning med frie vægte og egen <br>
                            kropsvægt.  <br>
                            Og vi arbejder med at fremme all round sundhed, med elementer af <br>
                            styrke, smidighed og udholdenhed. <br>
                            </p>
                    </div>
       </div>

</main>
<?php
get_footer();