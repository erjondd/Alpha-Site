<?php

get_header();

/*
Template Name: L'equipe
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
                    <div class="all-slider-top-info-tittle">Conducteur de travaux</div>
                    <img src="<?= get_template_directory_uri() ?>/images/conducter.svg" alt="Conducter">
                    <div class="all-slider-top-info-description">
                        <b>Né en 1986 à Cluses, France</b>
                        <b>Nationalité:</b> Française
                        <b>Domicile:</b> Eteaux (FR)
                        <b>Langue:</b> Français
                        <b>Formation:</b> DUT Génie Civil
                    </div>
                </div>
            </div>
            <div class="lequipe-all-silder-bottom">
                <div class="lequipe-slider-bottom-left">
                    <b>Expérience:</b>

                    <b>Depuis 2017: Conducteur de travaux</b>
                    Alpha Edification SA

                    <b>2015 à 2017: Conducteur de travaux</b>
                    Rampini Construction SA
                </div>
                <div class="lequipe-slider-bottom-right">
                    <b>011 à 2015: Conducteur de travaux</b>
                    F. Bernasconi SA

                    <b>2007 à 2011: Conducteur de travaux</b>
                    Implenia Construction SA
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