<?php

get_header();

/*
Template Name: Edification L'equipe
*/

?>

<div class="page page-lequipe">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>L'equipe <br>
                Alexandre Adami</h1>


        </div>
    </div>
    <div class="page-content">
        <div class="lequipe-informations">
            <div class="main-info">
                <img src="<?= get_template_directory_uri() ?>/images/qui-sommes-nous.svg" alt="qui sommes nous">
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
            <div class="lequipe-all-slider-top">
                <div class="all-slider-top-pic"><img src="<?= get_template_directory_uri() ?>/images/person-1.jpg" alt="Alexandri"></div>
                <div class="all-slider-top-info">
                    <div class="all-slider-top-info-tittle">Responsable</div>
                    <div class="Submain1 Picture">Secteur Génie Civil</div>
                    <img src="<?= get_template_directory_uri() ?>/images/conducter.svg" alt="Conducter">
                    <div class="all-slider-top-info-description">
                        <b>Né en</b><br/><span class="Submain1 ne en"></span>
                        <b>Nationalité:</b><br/><span class="Submain1 nationalite"></span>
                        <b>Domicile:</b><br/><span class="Submain1 domicile"></span> 
                        <b>Langue:</b><br/><span class="Submain1 langue"></span> 
                        <b>Formation:</b><br/><span class="Submain1 formation"></span>
                    </div>
                </div>
            </div>
            <div class="lequipe-all-silder-bottom">
                <div class="lequope-all-slider-full-bottom">
            <div class="lequipe-slider-bottom-experience"><b>Expérience:</b></div>

            <div class="lequipe-left-center-right-infos">
                <div class="lequipe-slider-bottom-left">
                  

                    <b>Depuis 2017: Conducteur de travaux</b><br/>
                    Alpha Edification SA<br/>

                    <b>2015 à 2017: Conducteur de travaux</b><br/>
                    Rampini Construction SA<br/>
                </div>
                <div class="lequipe-slider-bottom-center">
                    <b>011 à 2015: Conducteur de travaux</b><br/>
                    F. Bernasconi SA<br/>

                    <b>2007 à 2011: Conducteur de travaux</b><br/>
                    Implenia Construction SA<br/>
                </div>
                <div class="lequipe-slider-bottom-right">
                <b>011 à 2015: Conducteur de travaux</b><br/>
                    F. Bernasconi SA<br/><br/>

                    <b>2007 à 2011: Conducteur de travaux</b><br/>
                    Implenia Construction SA
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