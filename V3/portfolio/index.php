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
          <li><a id="menuServicos" target="_self" href="#">Serviços</a></li>
          <li><a id="menuClientes" target="_self" href="#">Clientes</a></li>
          <li><a id="menuContato" target="_self" href="#">Contato</a></li>
          <li>|</li>
          <li><a target="_self" href="portfolio/index.php">Portfolio</a></li>
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
      <li id="item-3" class="todos-wordpress">WORDPRESS</li>
      <li id="item-4" class="todos-app_facebook">APP FACEBOOK</li>
      <li id="item-5" class="todos-mobile">MOBILE</li>
      <li id="item-6" class="todos-sistemas">SISTEMAS</li>
    </ul>
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-sites" data-job="job1">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-wordpress" data-job="job2">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook" data-job="job3">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-mobile" data-job="job4">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sistemas" data-job="job5">
    
    <div id="job1" class="body_info left">
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
    
     <div id="job2" class="body_info left">
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
    </div>
    
     <div id="job3" class="body_info left">
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
    
     <div id="job4" class="body_info left">
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
    
     <div id="job5" class="body_info left">
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
    
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sites" data-job="job6">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-wordpress" data-job="job7">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook" data-job="job8">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-mobile" data-job="job9">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-sistemas" data-job="job10">
    
    <div id="job6" class="body_info left">
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
    
     <div id="job7" class="body_info left">
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
    
     <div id="job8" class="body_info left">
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
    
     <div id="job9" class="body_info left">
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
    
     <div id="job10" class="body_info left">
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
    
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-sites" data-job="job11">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-wordpress" data-job="job12">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook" data-job="job13">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-mobile" data-job="job14">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sistemas" data-job="job15">
    
    <div id="job11" class="body_info left">
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
    
     <div id="job12" class="body_info left">
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
    
     <div id="job13" class="body_info left">
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
    
     <div id="job14" class="body_info left">
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
    
     <div id="job15" class="body_info left">
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
    
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-sites" data-job="job16">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-wordpress" data-job="job17">
    <img src="imagens/img_port.jpg" width="200" height="200" alt="" title="" class="todos-app_facebook" data-job="job18">
    <img src="imagens/img_port2.jpg" width="200" height="200" alt="" title="" class="todos-mobile" data-job="job19">
    <img src="imagens/img_port3.jpg" width="200" height="200" alt="" title="" class="todos-sistemas" data-job="job20">
    
    <div id="job16" class="body_info left">
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
    
     <div id="job17" class="body_info left">
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
    
     <div id="job18" class="body_info left">
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
    
     <div id="job19" class="body_info left">
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
    
     <div id="job20" class="body_info left">
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