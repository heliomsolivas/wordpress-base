		
		<?php get_header(); ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="conteudo-esquerda">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
		<?php the_content(); ?>
		
		<h4>Autor: <?php the_author(); ?> | <?php the_tags(); ?></h4>
		<h5>Publicado em: <?php the_date(); ?></h5>
		
		<?php comments_template(); ?>
		

		<?php endwhile; else: ?>
		<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
		<?php endif; ?>
		
		</div>
		</div>
	
		<div class="col-md-3">
			
		<?php get_sidebar(); ?>
		
		</div>
		
		</div>
 		<!-- Fim Container Principal -->
 
		<?php get_footer(); ?>
		
		