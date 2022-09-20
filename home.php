<?php get_header(); ?>
 	<h1>Le blog Capitaine WP</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
		<article class="post">
            <!-- affiche le titre article: -->
			<h2><?php the_title(); ?></h2>
            <!-- affiche l'image de mise en avant: -->
            <!-- Pour rappel on avait activé cette fonctionnalité grâce à la 
            fonction add_theme_support('post-thumbnails') 
            dans le fichier functions.php, -->
        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
                <!-- affiche date de publi et get_option récupère 
                le format de date choisi dans les réglages WP -->
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                <!-- affiche aueur + nb commentaires -->
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
            <!-- affiche un extrait: -->
            <!-- attention de ne pas l'entourer de balise paragraphe ! -->
      		<?php the_excerpt(); ?>
              
      		<p>
                <!-- affiche le lien vers l'article, le mettre dans une balise a 
            dans l'attribut href-->
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>