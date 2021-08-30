<?php

get_header();

/*
Template Name: References
*/

?>

<div class="page page-references">
    <div class="page-header">
        <!-- <div class="page-header-background"></div> -->
        <div class="page-header-content">
            <h1>
                References <br />
                Cern
            </h1>
            <img src="<?= get_template_directory_uri() ?>/images/logo_icon.svg" alt="Logo" />
        </div>
    </div>
    <div class="page-content">
        <div class="references-info">
            <div class="references-info-left">
                <div class="references-info-tittle">Objet</div>
                <div class="references-info-subtittle">
                    Exécution d’un socle BA et clôtures pour un mât télécom douane du
                    CERN.
                </div>
                <div class="references-info-tittle">Nature des travaux</div>
                <div class="references-info-subtittle">
                    Terrassement en pleine masse, ferraillage en barres façonnées,
                    extension du réseau télécom, coffrage traditionnel, bétonnage,
                    pose de clôtures.
                </div>
            </div>
            <div class="references-info-right">
                <div class="references-info-tittle">Maitre d’ouvrage</div>
                <div class="references-info-subtittle">Axians</div>
                <div class="references-info-tittle">Direction des travaux</div>
                <div class="references-info-subtittle">Axians</div>
                <div class="references-info-tittle">Date de réalisation</div>
                <div class="references-info-subtittle">Novembre 2018</div>
            </div>
        </div>
        <div class="references-picture">
            <img src="<?= get_template_directory_uri() ?>/images/references-picture1.jpg" alt="References Picture" />
        </div>
    </div>
</div>

<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('body').attr('page-color', 'white');
        });
    </script>

<?php
get_footer();
?>