<!doctype html>
<html>
<head>
<?php include 'meta.php'; ?>
<script type="text/javascript">
function removeGrayscale(element){
	var classe = element.split(" ")[0];
	var id = $("#sub_navigator li"+ classe).attr("id");
	$("#sub_navigator > li").removeClass("sub-active");
	$("#"+id).addClass("sub-active");
	$(".body_info").hide();
	$("img").animate({ opacity: 0.3 });
	$("img").unbind('mouseenter').unbind('mouseleave')
	if(classe == ".todos-todos"){
		$.map($("#tudo img"),function(menu, array){
			$(menu).animate({ opacity: 1 });
		});
	}
	else {
		$.map($(classe),function(menu, array){
			$(menu).animate({ opacity: 1 });
		});
	}
}
$(document).ready(function(){
	$("img").animate({ opacity: 0.3 });
	$("img").hover(
		function(){
			$(this).animate({ opacity: 1 });
		},
		function(){ 
			$(this).animate({ opacity: 0.3 });
		}
	);
	$("#sub_navigator li").click(function(){
		var classe =$(this).attr("class");
		$("#catSelecionada").val(classe);
		removeGrayscale('.'+ classe);
	})
	$("img").click(function(){
		var cat = $("#catSelecionada").val();
		var catImg = $(this).attr('class');
			if(catImg == cat){
				$.grep($("img"), function(img, array){ if($(img).attr('class') != cat){ $(img).animate({ opacity: 0.3 }) } });
				$(this).unbind('mouseenter').unbind('mouseleave');
				$(this).animate({ opacity: 1 });
				$(".body_info").fadeOut(700);
				//$(".body_info").slideUp("fast");
				var job = $(this).attr('data-job');
				$("#"+ job).fadeIn(1000);
				//$("#"+ job).slideToggle("fast");
			}
			else{
				var classe =$(this).attr("class");
				$("#catSelecionada").val(classe);
				removeGrayscale('.'+ classe);
				$(this).click();
			}
	});
	$("a[rel^='prettyPhoto[Equipamentos]']").prettyPhoto({ social_tools:'' });
});
</script>
</head>

<body>
<input type="hidden" id="catSelecionada" name="catSelecionada" value="" />
	<!-- Header -->
  <div id="struct-header">
  	<div id="header">
    	<header>
 				<a id="logo_header" title="Home" href="//prox3.com.br">Prox3</a>
        <ul id="navigator">
       	 <li><a target="_self" href="//prox3.com.br">Home</a></li>
          <li><a id="menuServicos" target="_self" href="../#servico">Serviços</a></li>
          <li><a id="menuClientes" target="_self" href="../#cliente">Clientes</a></li>
          <li><a id="menuContato" target="_self" href="../#contato">Contato</a></li>
          <li>|</li>
          <li><a target="_self" href="http://prox3.com.br/portfolio/">Portfolio</a></li>
          <!--<li><a target="_self" href="blog.php">Blog</a></li>-->
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
      <li id="item-3" class="todos-ecommerce">E-COMMERCE</li>
      <!--<li id="item-4" class="todos-app_facebook">APP FACEBOOK</li>-->
      <li id="item-5" class="todos-mobile">MOBILE</li>
      <!--<li id="item-6" class="todos-sistemas">SISTEMAS</li>-->
    </ul>
    <img src="imagens/client_mrt.jpg" width="200" height="200" alt="MRT Arquitetura & Interiores" title="MRT Arquitetura & Interiores" class="todos-sites" data-job="job1">
    <img src="imagens/client_decorakits.jpg" width="200" height="200" alt="DecoraKits" title="DecoraKits" class="todos-ecommerce" data-job="job2">
    <img src="imagens/client_dorama.jpg" width="200" height="200" alt="Esse Dorama Te Indico" title="Esse Dorama Te Indico" class="todos-sites" data-job="job3">
    <img src="imagens/prox3-mobile.jpg" width="200" height="200" alt="Prox3 Mobile" title="Prox3 Mobile" class="todos-mobile" data-job="job4">
    <img src="imagens/client_vila.jpg" width="200" height="200" alt="Vila Santista" title="Vila Santista" class="todos-sites" data-job="job5">
    
    <div id="job1" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">MRT Arquitetura & Interiores <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, CSS, Wordpress</span>
        <a target="_blank" href="http://mrtarquitetura.web931.uni5.net/novo/" class="link_company left">Ver site</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
        <strong>Descrição</strong><br><br>
      	A Actmob é uma agência de marketing digital e contou com a gente para realizar esse projeto, fomos responsáveis pela programação do site e a agência pelo design.<br>O site foi feito em Wordpress e segue o padrão responsivo, dessa forma pode ser visualizado em qualquer dispositivo.
        </div>
        <!--<span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>-->
      </div>
    </div>
    
     <div id="job2" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">E-COMERCE</span>
        <span class="name_company left">DecoraKits <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress</span>
        <!--<a target="_blank" href="decorakits.com.br" class="link_company left">Ver site</a>-->
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	<strong>Descrição</strong><br><br>
      	A Actmob é uma agência de marketing digital e contou com a gente para realizar esse projeto, fomos responsáveis pela programação do site e a agência pelo design.<br>O e-commerce foi feito em Wordpress, HTML5 e segue o padrão responsivo, dessa forma pode ser visualizado em qualquer dispositivo.
        </div>
      </div>
    </div>
    
     <div id="job3" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Esse Dorama Te Indico <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, CSS, Wordpress, SEO</span>
        <a target="_blank" href="http://essedoramateindico.com.br/" class="link_company left">Veja o site</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	<strong>Descrição</strong><br><br>
      	Esse Dorama te indico é um blog sobre o mundo dos doramas e filmes japoneses.<br><br>
        O blog foi desenvolvido em Wordpress e segue o padrão responsivo, dessa forma pode ser visualizado em qualquer dispositivo.
        </div>
      </div>
    </div>
    
     <div id="job4" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">MOBILE</span>
        <span class="name_company left">Prox3 <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, SEO</span>
        <a target="_blank" href="http://m.prox3.com.br" class="link_company left">Visite o site</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
        <strong>Descrição</strong><br><br>
      	Esse é nosso site na versão mobile. O site se adapta em qualquer resolução móvel e qualquer sistema operacional, fique a vontade para fazer uma visita, a url é: m.prox3.com.br
        </div>
      </div>
    </div>
    
     <div id="job5" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Vila Santista <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, CSS, Wordpress</span>
        <a target="_blank" href="http://vilasantista.com.br/" class="link_company left">Visitar site</a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	A Actmob é uma agência de marketing digital e contou com a gente para realizar esse projeto, fomos responsáveis pela programação do site e a agência pelo design.<br>O site foi feito em Wordpress e segue o padrão responsivo, dessa forma pode ser visualizado em qualquer dispositivo.
        </div>
      </div>
    </div>
    
    
    
     <!--<div id="job20" class="body_info left">
    	<div class="shadow_info"></div>
      <div class="left_info left">
      	<span class="tag_job left">SITES</span>
        <span class="name_company left">Nome da empresa <br>2013</span>
        <span class="tecnologic_use left"><strong>Tecnologia utilizada: </strong>PHP, Jquery, HTML5, CSS3, Wordpress, .NET, iOS, Android, SDK PHP (Facebook), SEO</span>
        <a target="_blank" href="imagens/client_megageo.jpg" rel="prettyPhoto[Equipamentos]" title="This is the description" class="link_company left">Veja Mais...</a>
        <a href="imagens/client_megageo.jpg" rel="prettyPhoto[Equipamentos]" title="This is the description"></a>
      </div>
      <div class="comment_client right">
      	<div class="text_comment left">
      	"Ddashhhhdsa jjjdashhjd dasndasjdj sadasljf ljfcsj dasjdjsaj dasjkjdsa, dashhf djfhdhahsadjjh dans dnas dn fasndjf djhhfjds fajsjdsa afsdjadsj, dnasjf sndajhdaj danndjas ndsnkdan dsnjd nbfdkfshjf dnfsdjfjdn asndnh, sdahjsaj dsahdsad. Daskdsadh dsabdsakhd sa dsah, dsandasj, dashhdajh hsd ha dsahji dhhoawe fophjgdas idai fsdhif sdnoifadjdjkf fdshfhjdsh nvndfkhgf fjd".
        </div>
        <span class="name_client left">Nome do cliente</span>
        <span class="name_company_comment left"><strong>Nome da empresa</strong></span>
      </div>
    </div>-->
    
  </div>
  <div id="footer">
    &copy; COPYRIGHT Prox3 Produtora Digital
  </div>
</body>
</html>