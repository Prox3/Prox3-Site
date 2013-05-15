function navegacaoMenu(){	
	$("#menuServicos, .voltarTopo").click(function () {
		$(".voltarTopo").hide();
		var posLeft = 0;
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$("#menuClientes").click(function () {
		var posLeft = ($("#struct-clientes").position().top - 150);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
	}); 
	
	$("#menuContato").click(function () {
		var posLeft = ($("#struct-contatos").position().top - 50);
	    $(document).scrollTo({ top: posLeft, left: 0 }, { duration: 500 }, { easing: "easeInQuad" }, { queue: true });
		return false;
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
	navegacaoMenu();
	definicaoFormValidacao();
	enviarContato();
	verificarEstiloMac();
	$(document).scroll(function () {		
		//console.log($(document).scrollTop());
        var useFixedSidebar = $(document).scrollTop();
		if(useFixedSidebar == 0){
			$('.voltarTopo').hide();
		}
		else if (useFixedSidebar > 10 && useFixedSidebar < 1000){
			$('.voltarTopo').show();
       		//$('.voltarTopo').addClass('fixed-voltar-topo');
		}
    });
});