<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>Prox3 - <?php wp_title('Blog'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
<script type="text/javascript" src="//prox3.com.br/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $("#searchform div input:eq(0)").attr("placeholder", "Buscar");
		//$(".cat-item-1 a").removeAttr("href");
		$(".cat-item-1 a").attr("href", "http://prox3.com.br/blog/");
		
		var links = $('.fixed li a');
		var obj = $.grep(links, function(item, array){ return $(item).attr('href') == location.href })[0];
		if(obj != null){
			$(obj).parent().addClass('active');
		}else{
			if(location.href == 'http://prox3.com.br/blog/category/todos/'){
				$('.fixed li a:eq(0)').parent().addClass('active');
			}
		}
		
		$("#back_404").click(function(){
			window.history.back();
		});
		
		<?php
			if(isset($_GET['s'])){
		?>
			
			$("#footer").hide();
			
		<?php } ?>
		
		//$('#shadow_sidebar').height($('.artigo').height()+300);		
  });
</script>
</head>
<body>
	<!-- Header -->
  <div id="struct-header">
  	<div id="header">
    	<header>
 				<a id="logo_header" title="Home" href="//prox3.com.br">Prox3</a>
        <ul id="navigator">
         <li><a id="menuServicos" target="_self" href="#">Serviços</a></li>
          <li><a id="menuClientes" target="_self" href="#">Clientes</a></li>
          <li><a id="menuContato" target="_self" href="#">Contato</a></li>
          <li>|</li>
          <li><a target="_self" href="//prox3.com.br/portfolio/index.php">Portfolio</a></li>
          <!--<li><a target="_self" href="blog.php">Blog</a></li>-->
          <li style="margin-right:0"><a target="_self" href="https://www.facebook.com/prox3.digital">Facebook</a></li>
        </ul>
      </header>
    </div>
	</div>
  <!-- Fim header -->
  <div id="tudo">