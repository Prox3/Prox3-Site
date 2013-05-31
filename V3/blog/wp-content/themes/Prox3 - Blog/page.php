<?php get_header(); ?>
	<div id="conteudo">
		<div id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
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