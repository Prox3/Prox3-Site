<!doctype html>
<html>
<head>
<?php include 'meta.php'; ?>
<script type="text/javascript">
function removeGrayscale(classe){
	//$("img").removeAttr("style");
	$("img").animate({ opacity: 0.3 });
	if(classe == ".todos-todos"){
		$.map($("#tudo img"),function(menu, array){
			$(menu).animate({ opacity: 1 });
			/*$(menu)
				.css('filter','opacity(1)')
				.css('-webkit-filter','opacity(1)')
				.css('-moz-filter','opacity(1)')
				.css('-ms-filter','opacity(1)')
				.css('-o-filter','opacity(1)').fadeTo(300, 1);*/
		});
	}
	else {
		$.map($(classe),function(menu, array){
			$(menu).animate({ opacity: 1 });
			/*$(menu)
				.css('filter','grayscale(0%)')
				.css('-webkit-filter','grayscale(0%)')
				.css('-moz-filter','grayscale(0%)')
				.css('-ms-filter','grayscale(0%)')
				.css('-o-filter','grayscale(0%)');*/
		});
	}
}
$(document).ready(function(){
	$("img").animate({ opacity: 0.3 });
	$("#sub_navigator li").click(function(){
		var classe =$(this).attr("class");
		removeGrayscale('.'+ classe);
	})
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
          <!--<li><a target="_self" href="portfolio.php">Portfolio</a></li>
          <li><a target="_self" href="blog.php">Blog</a></li>-->
          <li style="margin-right:0"><a target="_self" href="https://www.facebook.com/prox3.digital">Facebook</a></li>
        </ul>
      </header>
    </div>
	</div>
  <!-- Fim header -->
  <div id="tudo">
  	<div class="text_portfolio left"><h1>PORTFOLIO</h1></div>
    <ul id="sub_navigator" class="left">
      <li id="item-1" class="todos-todos">TODOS</li>
      <li id="item-2" class="todos-sites">SITES</li>
      <li id="item-3" class="todos-wordpress">WORDPRESS</li>
      <li id="item-4" class="todos-app_facebook">APP FACEBOOK</li>
      <li id="item-5" class="todos-mobile">MOBILE</li>
      <li id="item-6" class="todos-sistemas">SISTEMAS</li>
    </ul>
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-sites">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-wordpress">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-mobile">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sistemas">
    
    <div class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Nome da empresa <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress, .NET, iOS, Android, SDK PHP (Facebook), SEO</span>
        <a target="_blank" href="" class="link_company left">nomedaempresa.com.br</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	“Ddashhhhdsa jjjdashhjd dasndasjdj sadasljf ljfcsj dasjdjsaj dasjkjdsa, dashhf djfhdhahsadjjh dans dnas dn fasndjf djhhfjds fajsjdsa afsdjadsj, dnasjf sndajhdaj danndjas ndsnkdan dsnjd nbfdkfshjf dnfsdjfjdn asndnh, sdahjsaj dsahdsad. Daskdsadh dsabdsakhd sa dsah, dsandasj, dashhdajh hsd ha dsahji dhhoawe fophjgdas idai fsdhif sdnoifadjdjkf fdshfhjdsh nvndfkhgf fjd”.
        </div>
        <span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>
      </div>
    </div>
    
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sites">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-wordpress">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-mobile">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-sistemas">
    
    <div class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Nome da empresa <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress, .NET, iOS, Android, SDK PHP (Facebook), SEO</span>
        <a target="_blank" href="" class="link_company left">nomedaempresa.com.br</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	"Ddashhhhdsa jjjdashhjd dasndasjdj sadasljf ljfcsj dasjdjsaj dasjkjdsa, dashhf djfhdhahsadjjh dans dnas dn fasndjf djhhfjds fajsjdsa afsdjadsj, dnasjf sndajhdaj danndjas ndsnkdan dsnjd nbfdkfshjf dnfsdjfjdn asndnh, sdahjsaj dsahdsad. Daskdsadh dsabdsakhd sa dsah, dsandasj, dashhdajh hsd ha dsahji dhhoawe fophjgdas idai fsdhif sdnoifadjdjkf fdshfhjdsh nvndfkhgf fjd".
        </div>
        <span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>
      </div>
    </div>
    
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-sites">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-wordpress">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-mobile">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sistemas">
    
    <div class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Nome da empresa <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress, .NET, iOS, Android, SDK PHP (Facebook), SEO</span>
        <a target="_blank" href="" class="link_company left">nomedaempresa.com.br</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	"Ddashhhhdsa jjjdashhjd dasndasjdj sadasljf ljfcsj dasjdjsaj dasjkjdsa, dashhf djfhdhahsadjjh dans dnas dn fasndjf djhhfjds fajsjdsa afsdjadsj, dnasjf sndajhdaj danndjas ndsnkdan dsnjd nbfdkfshjf dnfsdjfjdn asndnh, sdahjsaj dsahdsad. Daskdsadh dsabdsakhd sa dsah, dsandasj, dashhdajh hsd ha dsahji dhhoawe fophjgdas idai fsdhif sdnoifadjdjkf fdshfhjdsh nvndfkhgf fjd".
        </div>
        <span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>
      </div>
    </div>
    
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sites">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-wordpress">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-mobile">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-sistemas">
    
    <div class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Nome da empresa <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress, .NET, iOS, Android, SDK PHP (Facebook), SEO</span>
        <a target="_blank" href="" class="link_company left">nomedaempresa.com.br</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	"Ddashhhhdsa jjjdashhjd dasndasjdj sadasljf ljfcsj dasjdjsaj dasjkjdsa, dashhf djfhdhahsadjjh dans dnas dn fasndjf djhhfjds fajsjdsa afsdjadsj, dnasjf sndajhdaj danndjas ndsnkdan dsnjd nbfdkfshjf dnfsdjfjdn asndnh, sdahjsaj dsahdsad. Daskdsadh dsabdsakhd sa dsah, dsandasj, dashhdajh hsd ha dsahji dhhoawe fophjgdas idai fsdhif sdnoifadjdjkf fdshfhjdsh nvndfkhgf fjd".
        </div>
        <span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>
      </div>
    </div>
    
  </div>
  <div id="footer">
    &copy; COPYRIGHT Prox3 Produtora Digital
  </div>
</body>
</html>