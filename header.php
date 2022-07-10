<!doctype html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	

	<title>CURA</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/menu.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/enseignant.css">

	

	

	<?php wp_head(); ?>
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

