		
		<?php get_header(); ?>
		
		<div class="container">
			<div class="row content-index">
				<div class="col-md-9">
					<div class="conteudo-esquerda">
						<div class="col-md-7 destaques">
							<h1 id="texto-destaques">Destaque</h1>
							
							<?php query_posts('showposts=1') ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
								<?php the_excerpt(); ?>
								
								<?php endwhile; else: ?>
								<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
								<?php endif; ?>
							
						</div>
						<!-- Fim dos Destaques -->
						
							<div class="col-md-5 ultimas">
								<h1 id="texto-ultimas">Últimas</h1>
								
								<?php query_posts('showposts=2&offset=1') ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
								<?php the_excerpt(); ?>
								
								<?php endwhile; else: ?>
								<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
								<?php endif; ?>
						</div>
						<!-- Fim dos Ultimas -->
						
							<div class="col-md-7 categoria1">
								<h1 id="texto-cat1">Categoria: Mobile</h1>
								
									<?php query_posts('category_name=mobile') ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
								<?php the_excerpt(); ?>
								
								<?php endwhile; else: ?>
								<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
								<?php endif; ?>
							
						</div>
						<!-- Fim dos Categoria1 -->
						
							<div class="col-md-7 categoria2">
								<h1 id="texto-cat2">Categoria: Programação</h1>
							
								<?php query_posts('category_name=programacao&showposts=1') ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
								<?php the_excerpt(); ?>
								
								<?php endwhile; else: ?>
								<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
								<?php endif; ?>
							
						</div>
						<!-- Fim dos Categoria2 -->
						
							<div class="col-md-5 categoria3">
								<h1 id="texto-cat3">Categoria: Metodologias</h1>
								
								<?php query_posts('category_name=metodologias&showposts=1') ?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
								<?php the_excerpt(); ?>
								
								<?php endwhile; else: ?>
								<p><?php _e('Desculpe, não encontramos nenhum post.'); ?></p>
								<?php endif; ?>
							
							
						</div>
						<!-- Fim dos Categoria3 -->
	
					</div>
				</div>
	
		<div class="col-md-3">
			
		<?php get_sidebar(); ?>
		
		</div>
		
		</div>
 		<!-- Fim Container Principal -->
 
		<?php get_footer(); ?>
		
		