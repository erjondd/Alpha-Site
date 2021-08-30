<?php

get_header();

/*
Template Name: Presentations
*/

?>
<div class="page page-prestations">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
            <h1>Prestations
                <br />
                Genie Civil
            </h1>

            <img src="<?= get_template_directory_uri() ?>/images/logo_icon.svg" alt="Logo" />
        </div>
    </div>
    <div class="page-content">
        <div class="prestations-info">
            <div class="prestations-info-left">
                <div class="prestations-info-tittle">Prestations</div>
                <div class="prestations-info-text">
                    Nous développons notre activité dans les secteurs du gros œuvre
                    principalement, et du second œuvre accessoirement. L’exécution de
                    travaux de bâtiment et de génie civil est au cœur de notre action.
                    Notre expérience et nos compétences sont des atouts majeurs
                    permettant une saine diversification des activités d’Alpha
                    Edification SA.
                </div>
            </div>
            <div class="prestations-info-right">
                <div class="prestations-info-tittle">Différenciation</div>
                <div class="prestations-info-text">
                    Sur un marché difficile et hautement compétitif, nous nous
                    démarquons par notre approche humaine et professionnelle des
                    métiers du BTP. Nous recherchons des relations stables, basées sur
                    la confiance réciproque et la transparence. Nous renforçons
                    continuellement notre niveau de compétences au service d’une
                    clientèle exigeante en respectant trois axes prioritaires:
                </div>
                <div class="prestations-info-text-bold">
                    Qualité – Prix – Délais
                </div>
            </div>
        </div>
        <div class="prestations-all-boxes">
            <div class="prestations-boxes-left">
                <div class="prestations-box1-left">Entretien et réfection des voiries communales.</div>
                <div class="prestations-box2-left">Collecteurs et mise en séparatif des réseaux unitaires.</div>
                <div class="prestations-box3-left">Terrassements, fouilles et canalisations.</div>
            </div>
            <div class="prestations-boxes-right">
                <div class="prestations-box1-right">Soutènements et confortements</div>
                <div class="prestations-box2-right">Aménagements extérieurs.</div>
                <div class="prestations-box3-right"><img src="<?= get_template_directory_uri() ?>/images/batiment.svg" alt=""></div>
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