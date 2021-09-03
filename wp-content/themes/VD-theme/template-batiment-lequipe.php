<?php

get_header();

/*
Template Name: Batiment L'equipe
*/

?>

<div class="page page-lequipe lequipe-alexandre" current="alexandre">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>L'equipe <br>
            Stefan müller
    </h1>


        </div>
    </div>
    <div class="page-content">
        <div class="lequipe-informations">
            <div class="main-info">
               <div class="main-lequipe-tittleque">QUI SOMMES<br/>NOUS?</div>
            </div>
            <div class="seconday-main-info">
                <div class="seconday-main-info-left">Nous développons notre activité dans les secteurs
                    du gros œuvre principalement, et du second œuvre accessoirement.

                    L’exécution de travaux de bâtiment et de génie civil est au cœur de notre action.

                    Notre expérience et nos compétences sont des atouts.</div>
                <div class="seconday-main-info-right">L’exécution de travaux de bâtiment et de génie civil est au cœur de notre action.

                    Notre expérience et nos compétences sont des atouts majeurs permettant une saine diversification des activités d’Alpha Edification SA.</div>
            </div>
        </div>
        <div class="lequipe-all-slider">
            <img class="lequipe-slider-picture" src="<?= get_template_directory_uri() ?>/images/lequipe-slider-picture.jpg" alt="">
            <div class="lequipe-all-slider-top">
                <div class="all-slider-top-pic">
                <img src="<?= get_template_directory_uri() ?>/images/batiment-lequipe-person1.jpg" alt="">
           
                    
                </div>
                <div class="all-slider-top-info batiment-lequipe">
                
                    <div class="all-slider-top-info-tittle">Responsable</div>
                    <div class="Submain1 Picture"><b>Études & Projets</b></div>
                    <img src="<?= get_template_directory_uri() ?>/images/conducter.svg" alt="Conducter">
                    <div class="all-slider-top-info-description">
                        <b>Né en</b><span class="Submain1 ne en"><b> 1963 à Genève, Suisse</b></span>
                        <b>Nationalité:</b><span class="Submain1 nationalite">Française</span><br/>
                        <b>Domicile:</b><span class="Submain1 domicile">Lancy</span> <br/>
                        <b>Langue:</b><span class="Submain1 langue">Français</span> <br/>
                        <b>Formation:</b><span class="Submain1 formation">Dessinateur et</span>
                    </div>
                </div>
            </div>
            <div class="lequipe-all-silder-bottom">
                <div class="lequope-all-slider-full-bottom">
            <div class="lequipe-slider-bottom-experience"><b>Expérience:</b></div>

            <div class="lequipe-left-center-right-infos">
                <div class="lequipe-slider-bottom-left">
                  

                    
                        <b>5 ans d’activité dans un
                        bureau d’ingénieur</b><br/>


                    <b>20 ans dans une grand entreprise de la place
                        (dont 3 en Guyane française)</b>
                </div>
                <div class="lequipe-slider-bottom-center">
                    <b>15 ans dans une PME
                        genevoise de démolition & rénovation</b><br/>



                        <b>240 ans d’expérience
                    entrepreneuriale</b>
                </div>
                <div class="lequipe-slider-bottom-right">
                <b>15 ans dans une PME
                    genevoise de démolition & rénovation  </b><br/>
                  

                    <b>240 ans d’expérience
                        entrepreneuriale</b>
                </div>
                </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('body').attr('page-color', 'black');
    });
</script>

<?php
get_footer();
?>