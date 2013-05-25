<?php get_header(); ?>
	<?php get_sidebar(); ?>
  <div class="bg_title"></div>
	<div id="conteudo">
		<div id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<span class="title_post left"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
					<span class="author left"><?php the_time('d/M/Y') ?>  |  <?php the_author() ?></span>
          <div class="categories_post left">
          	<?php
            	$categories = get_the_category();
							$separator = ' ';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'<font class="arrow"></font></a>'.$separator;
								}
								echo trim($output, $separator);
							}
						?>
          </div>
          
					<div class="content_post left"><?php the_content(); ?></div>
				</div>			
			<?php endwhile?>
				<div class="navegacao">
					<div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
					<div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
				</div>
			<?php else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Lamentamos mas não foram encontrados artigos.</p>
				</div>			
			<?php endif; ?>
			
		</div>
	</div>
<?php get_footer(); ?>