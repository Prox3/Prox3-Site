		<div id="sidebar">
    	<div id="shadow_sidebar_top"></div>
    	<div id="shadow_sidebar"></div>
      <div class="fixed">
        <div id="text-blog"></div>
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?><?php endif; ?>
        <?php
          $args_categories = array('orderby' => 'ID', 'order' => 'ASC', 'title_li' => '');
          wp_list_categories( $args_categories );
        ?>
      </div>
		</div>