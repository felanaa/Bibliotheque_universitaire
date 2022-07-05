<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/contacts.css">
    <link rel="stylesheet" href="https://localhost/wordpress/wp-content/themes/Bibliotheque_universitaire/contacts.css">
    <title>Contacts</title>
</head>
<body>
<?php include("navigation.php") ?>
    <div class="partenaires">
        <div id="back">
            <h2>Souhaitez-vous devenir notre partenaire?</h2>
        </div>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, ea culpa possimus molestiae, sit eum dolores nobis quia incidunt neque ad nesciunt dolore libero perferendis amet doloremque consectetur. Ad, Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat fugit dignissimos accusamus porro totam doloribus unde maxime? Quam pariatur veniam perspiciatis provident natus, illum est mollitia aspernatur suscipit minima dignissimos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nesciunt iste similique sunt sapiente dolores.</p>
    </div>  <br>

    <div class="formulaires">
        <div id="form">
            <h4>Nous contacter</h4>
            <div class="inputBox">
                <span>Nom complet</span>
                <input type="text" name="" required="required">
            </div>
            <div class="inputBox">
                <span>Email</span>
                <input type="text" name="" required="required">   
            </div>
            <div class="inputBox">
                <span>Saisissez votre message</span>
                <textarea required="required"></textarea>    
            </div>
            <div class="inputBox">
                <input type="submit" name="" value="Envoyer">
            </div>
            <div>
                <a href="" id="liens"><img src="<?php bloginfo('template_directory') ?>/images/fb (1).png" id="icon"></a>
                <a href="" id="liens"><img src="<?php bloginfo('template_directory') ?>/images/téléchargement.png" id="icon"></a>
                <a href="" id="liens"><img src="<?php bloginfo('template_directory') ?>/images/images.png" id="icon"></a>
            </div>
        </div>
    </div>
</body>
</html>