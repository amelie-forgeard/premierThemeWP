<!DOCTYPE html>
<!-- définir automatiquement la langue sur le réglage WP -->
<html <?php language_attributes(); ?>>
<head>
    <!-- fonction bloginfo = utf8 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- fonction essentielle au bon fonctionnement de mon thème wp_head() -->
    <!-- wp_head() fct qui récupère les scripts et les styles : -->
    <?php wp_head(); ?>
</head>
    <!-- fct pour obtenir des noms de classes css en fct de la 
    page visitée body_class() grace au template hierarchy -->
<body <?php body_class(); ?>>
<header class="header">
    <!-- qd je clique sur le logo ça me renvoie à l'accueil home_url() -->
    <a href="<?php echo home_url( '/' ); ?>">
    <!-- fct get_template_directory_uri() afin d’obtenir l’adresse absolue  -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Logo">
    </a>  
  </header>
<!-- a fonction wp_body_open() a été ajoutée dans WordPress 5.2 afin de permettre à des extensions d’écrire du code au début du body. C’est utile notamment pour Yoast qui vient y placer le Google Tag Manager et autres codes de scripts.    
<?php wp_body_open(); ?> -->