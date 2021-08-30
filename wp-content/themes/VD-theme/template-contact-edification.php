<?php

get_header();

/*
Template Name: Contact Edification
*/

?>

<?php 
    $map = get_field("map");
    $main_contact_title = get_field("main_contact_title");
    $left_subtittle = get_field("left_subtittle");
    $right_subtittle = get_field("right_subtittle");
    $left_name = get_field("left_name");
    $right_name = get_field("right_name");
    $left_phone_number = get_field("left_phone_number");
    $right_phone_number = get_field("right_phone_number");
    $left_email = get_field("left_email");
    $right_email = get_field("right_email");
?>


<div class="page page-contact-edification">
    <div class="page-header">
        <div class="page-header-background"></div>
        <div class="page-header-content">
           
           <img src="<?= get_template_directory_uri(  )?>/images/edifications-contact-logo-text.svg">
           
        </div>
    </div>
    <div class="page-content">
        <div class="contact-map-picture">
            <iframe class="module" src="<?= $map ?>" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="contact-infos">
            <div class="contact-edification-top">
            <?= $main_contact_title ?>
            </div>
            <div class="contact-edification-bottom">
                <div class="contact-edification-bottom-left">
                    <div class="main-tittle-contact-edification"><?= $left_subtittle ?></div>
                    <div class="submain-tittle-contact-edification"><b><?= $left_name ?></b></br>
<?= $left_phone_number ?><br/>
<?= $left_email ?></div>
                </div>
                <div class="contact-edification-bottom-right">
                <div class="main-tittle-contact-edification"><?= $right_subtittle ?></div>
                    <div class="submain-tittle-contact-edification"><b><?= $right_name ?></b></br>
<?= $right_phone_number ?><br/>
<?= $right_email ?></div>
                </div>
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