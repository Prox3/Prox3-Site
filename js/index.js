function navegacaoMenu(){
	$("#menuComoPensamos, .voltarTopo").click(function () {
		$(".voltarTopo").hide();
		var posLeft = 0;
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$("#menuServicos").click(function () {
		$(".voltarTopo").hide();
		$("#struct-servicos .voltarTopo").show();
		var posLeft = ($("#struct-servicos").position().top - 50);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$("#menuClientes").click(function () {
		$(".voltarTopo").hide();
		$("#struct-clientes .voltarTopo").show();
		var posLeft = ($("#struct-clientes").position().top - 50);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$("#menuContato").click(function () {
		$(".voltarTopo").hide();
		$("#struct-contatos .voltarTopo").show();
		var posLeft = ($("#struct-contatos").position().top - 50);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
}

function efeitosMenu(){
	var $el, leftPos, newWidth, auxClick;
	auxClick = 0;
	
	/* Cache it */
	var $magicLine = $("#magic-line");
	var pLeft = ($(".current_page_item strong").position().left + (($(".current_page_item strong").width()/2)-12));
	$magicLine
		.css("left",pLeft )
		.data("origLeft", $magicLine.position().left);
	
	$("#menu-item li").find("strong").hover(function() 
	{
			auxClick = 0;
			$el = $(this);
			leftPos = $el.position().left + (($el.width()/2)-12) ;
			
			$magicLine.stop().animate({
				left: leftPos,
			});
			
		}, function() {
			if(auxClick == 0){
				$magicLine.stop().animate({
				left: $magicLine.data("origLeft")
			});   
		}
	});
	
	$("#menu-item li").find("strong").click(function() 
	{
		auxClick = 1;
		$el = $(this);
		leftPos = $el.position().left + (($el.width()/2)-12) ;
		
		$magicLine
			.css("left",leftPos )
			.data("origLeft", $magicLine.position().left);
		
		$magicLine.stop().animate({
			left: leftPos,
		});   
	});
}

function definicaoFormValidacao() {
    var form = $('#form1');
    var nome = form.find('#txtNome');
	var email = form.find('#txtEmail');
    var mensagem = form.find('#txtMensagem');

    form.validate();

    nome.rules('add', { required: true,
        messages: { required: 'Nome obrigatório.' }
    });
	
	email.rules('add', { required: true, email: true,
        messages: { required: 'Email obrigatório.', email: "E-mail inválido.<br/>Ex.: nome@servidor.com.br" }
    });
	
	mensagem.rules('add', { required: true,
        messages: { required: 'Mensagem obrigatório.' }
    });
}

function enviarContato(){
	$("#txtEnviar").click(function(){
		if (!$('#form1').valid()) {
            return;
        }
		
		var form = $('#form1');
		var nome = form.find('#txtNome')
		var email = form.find('#txtEmail');
		var mensagem = form.find('#txtMensagem');
				
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			data: { nome: nome.val(), 
					email: email.val(), 
					msg: mensagem.val()
					},
			beforeSend:function(){
				$(".backLightbox, .loading").show();
			},
			success:function(data){
				$(".backLightbox, .loading").hide();
				if($.trim(data) == 'ok'){
					$('#form1').reset();
					var box = new MessageBox();
					box.show('Sua mensagem foi enviado com sucesso!<br/> Logo entraremos em contato.', { type: 'success', layout: "center", modal: true });
				}
				else{
					var box = new MessageBox();
					box.show('Error de envio!<br/> Por favor, tente novamente mais tarde.', { type: 'error', layout: "center", modal: true });
				}
				
			},
			error:function(jqXHR, textStatus, errorThrown ){
				var box = new MessageBox();
				box.show(textStatus, { type: 'error', layout: "center", modal: true });
			}
		});
	});
}

function verificarEstiloMac(){
	if(navigator.userAgent.indexOf('Mac') > 0){
		$(".voltarTopo").css("margin-top","68px");
	}
}

function varificarMobile(){
	var deviceAgent = navigator.userAgent.toLowerCase();
    var agentID = deviceAgent.match(/(iphone|ipod|android)/);
    if (agentID)
		location.href = "http://m.prox3.com.br";
}

$(document).ready(function () {
	varificarMobile();
	efeitosMenu();	
	navegacaoMenu();
	definicaoFormValidacao();
	enviarContato();
	verificarEstiloMac();
	$(document).scroll(function () {
		/*var pensamos = ($("#struct-como-pensamos").height() + ($("#struct-servicos").height()/2));
		var servicos = ($("#struct-servicos").height() + ($("#struct-clientes").height()/2)+200);
		var clientes = ($("#struct-clientes").height() + ($("#struct-contatos").height()/2));
		var contato = $("#struct-contatos").height();
		
		var scroll = $(document).scrollTop();
		if(pensamos >= scroll){
			$(".voltarTopo").hide();
			$("#struct-servicos .voltarTopo").show();	
		}
		else if (servicos >= scroll){
			$(".voltarTopo").hide();
			$("#struct-clientes .voltarTopo").show();	
		}
		else if (clientes >= scroll || scroll == scroll){
			$(".voltarTopo").hide();
			$("#struct-contatos .voltarTopo").show();	
		}*/
		
		//console.log($(document).scrollTop());
        var useFixedSidebar = $(document).scrollTop();
		if(useFixedSidebar == 0){
			$('.voltarTopo').hide();
		}
		else if (useFixedSidebar > 10 && useFixedSidebar < 1000){
			$('.voltarTopo').show();
       		$('.voltarTopo').addClass('fixed-voltar-topo');
		}
		else if (useFixedSidebar >= 1000){
			$('.voltarTopo').show();
			$('.voltarTopo').removeClass('fixed-voltar-topo');
		}
    });
});