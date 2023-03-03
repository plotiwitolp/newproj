<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header header-new">
        <div class="logo">
            <?php
            $logo_img = '';
            $custom_logo_id = get_theme_mod('custom_logo');
            if ($custom_logo_id) {
                $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
                    'class'    => 'custom__logo',
                    'itemprop' => 'logo',
                ));
            }
            echo $logo_img;
            ?>
        </div>
    </header>