<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vie_etudiante.css">
    <script src="<?php bloginfo('template_directory') ?>/script.css"></script>
</head>
<body>
<?php
get_header();
?>

<div class="association" id="associations">
    <div id="titre">
    <h2 id="titre-text"> Ici vous pouvez voir les differentes association <br> 
    de l'universite d'androy</h2>

     <!-- conteneur association -->
     <div id="projets">
        <ul>
            <li>
                <div class="gauche">
                    <img src="<?php bloginfo('template_directory') ?>/images/photo3.jpg" alt="" id="img_projets">
                    <p>
                        <strong>Nom de l'association </strong> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quibusdam voluptas pariatur. Iusto, quis libero saepe nulla placeat cupiditate numquam culpa aliquid alias.
                    </p>
                </div>
            </li>
            <li>
                <div class="gauche">
                    <img src="<?php bloginfo('template_directory') ?>/images/photo3.jpg" alt="" id="img_projets">
                    <p>
                        <strong>Nom de l'association  </strong> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quibusdam voluptas pariatur. Iusto, quis libero saepe nulla placeat cupiditate numquam culpa aliquid alias.
                    </p>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="gauche">
                    <img src="<?php bloginfo('template_directory') ?>/images/photo3.jpg" alt="" id="img_projets">
                    <p>
                        <strong>Nom de l'association  </strong> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quibusdam voluptas pariatur. Iusto, quis libero saepe nulla placeat cupiditate numquam culpa aliquid alias.
                    </p>
                </div>
            </li>
            <li>
                <div class="gauche">
                    <img src="<?php bloginfo('template_directory') ?>/images/photo3.jpg" alt="" id="img_projets">
                    <p>
                        <strong>Nom de l'assiaction  </strong> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quibusdam voluptas pariatur. Iusto, quis libero saepe nulla placeat cupiditate numquam culpa aliquid alias.
                    </p>
                </div>
            </li>
        </ul>
        
    </div>
    <footer id="associations">
  <div class="footer-reseau">
    <span class="social-media"> <a id="facebook" href="https://www.facebook.com/"><img src="<?php bloginfo('template_directory') ?>/images/fb (1).png" class="icon"></a><p class="social-media-name">facebook</p></span>
    <span class="social-media"><a id="e-mail" href="https://www.gmail.com/"><img src="<?php bloginfo('template_directory') ?>/images/téléchargement.png" class="icon"></a><p class="social-media-name">e-mail</p></span>
    <span class="social-media"><a id="twiter" href="https://www.twiter.com/"><img src="<?php bloginfo('template_directory') ?>/images/twitter(1).png" class="icon"></a><p class="social-media-name">twiter</p></span>
    </footer>
</div>
</div>
</body>
</html>