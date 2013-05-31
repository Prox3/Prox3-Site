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
          
          <div class="left" style="margin-top:5px">
            <span class='st_fblike_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='fblike'></span>
            <span class='st_plusone_buttons' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span>
          </div>
          
					<div class="content_post left"><?php the_content(); ?></div>
					<?php comments_template(); ?>
        </div>
					
			<?php endwhile; else: ?>
				<div class="artigo">
					<span class="ops left">OPS...</span>
					<span class="text_404">Nenhum artigo foi encontrado. <font id="back_404">Voltar</font></span>
          <img src="http://prox3.com.br/blog/wp-content/themes/Prox3%20-%20Blog/images/404.png" style="position:absolute" width="483" height="269" alt="Artigo não encontrado" title="Artigo não encontrado" />
				</div>			
			<?php endif; ?>
			
		</div>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>