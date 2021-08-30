<?php

get_header();

/*
Template Name: Valuers Edification
*/

?>

<div class="page page-enterprise enterprise-vision" current="vision">
      <div class="page-header">
          <div class="page-header-background"></div>
        <div class="page-header-content">
          <h1>
            Valuers <br />
            <span class="vision">Vision</span>
            <span class="moyens">Moyens</span>
            <span class="mission">Mission</span>
          </h1>
         
        </div>
      </div>
      <div class="page-content">
        <div class="page-content-info">
          <div class="page-content-info-main">
            <img src="<?= get_template_directory_uri(  )?>/images/no_vals.svg">
            <p class="info-main-bold">
              Notre savoir faire et notre savoir être<br />
              sont au service de nos clients.
            </p>
            <p class="info-main-normal">
              Nous souhaitons tisser des liens<br />
              durables avec nos partenaires et<br />
              assurer notre succès sur la base de<br />
              valeurs essentielles:
            </p>
          </div>
          <div class="page-content-info-boxes">
            <div class="info-box box1">
              <div class="text-box">
                Respecter les individus<br />
                et l’environnement.
              </div>
            </div>

            <div class="info-box box2">
              <div class="text-box">
                Ecouter attentivement<br />
                les besoins de nos clients.
              </div>
            </div>

            <div class="info-box box3">
              <div class="text-box">Trouver des solutions adaptées.</div>
            </div>

            <div class="info-box box4">
              <div class="text-box">Tenir nos engagements.</div>
            </div>
          </div>
        </div>
        <div class="page-content-slider">
          <div class="svg-up valuers-arrow-up">
            <img src="<?= get_template_directory_uri(  )?>/images/arrow-up.svg" alt="arrow up" />
          </div>
          <div class="content-slider-info">
            <span class="vision">Nous voulons participer activement au développement et au
            rayonnement de Genève auxquels nous croyons pleinement. Notre
            démarche s’inscrit dans la durée.</span>
            <span class="moyens">Notre but est d’assurer la pérennité
d’Alpha Edification SA grâce à la rentabilité de notre travail, la satisfaction et la fidélisation de nos clients et de nos collaborateurs.</span>
            <span class="mission">Nous sommes convaincus qu’une approche rigoureuse et méthodique du volet opérationnel est le meilleur moyen d’atteindre nos objectifs.</span>
            </div>
          <div class="svg-down valuers-arrow-down">
            <img src="<?= get_template_directory_uri(  )?>/images/arrow-down.svg" alt="arrow up" />
          </div>
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