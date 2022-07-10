<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURA</title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/bootstrap-4.0.0/dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/css/style.scss">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/style.css">
    <?php wp_head(  ) ?>
</head>
<body>

<header>
    <div class="logo_cura">
        <img src="" alt="logo_cura">
    </div>
    <div class="navigation">
        <nav>
            <?php wp_nav_menu( ['theme_location' => 'header'] ) ?>
        </nav>
        <div class="langue">
                <button id="btn_lang">FR</button>
                <ol>
                    <li>Français</li>
                    <li>Anglais</li>
                </ol>
        </div>
    </div>
</header>


