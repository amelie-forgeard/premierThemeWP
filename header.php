<!DOCTYPE html>
<!-- définir automatiquement la langue sur le réglage WP -->
<html <?php language_attributes(); ?>>
<head>
    <!-- fonction bloginfo = utf8 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- fonction essentielle au bon fonctionnement de mon thème wp_head() -->
    <?php wp_head(); ?>
</head>
    <!-- fct pour obtenir des noms de classes css en fct de la page visitée body_class() -->
<body <?php body_class(); ?>>
<!-- a fonction wp_body_open() a été ajoutée dans WordPress 5.2 afin de permettre à des extensions d’écrire du code au début du body. C’est utile notamment pour Yoast qui vient y placer le Google Tag Manager et autres codes de scripts.    
<?php wp_body_open(); ?> -->