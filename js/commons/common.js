$(document).ready(function(){
    if ($.validator) {
        $.validator.addMethod('cnpj', function validaCnpj(value, element, params) {
            return validarCNPJ(value);
        }, 'CNPJ inválido.');

        $.validator.addMethod('checklist', function (value, element, params) {
            return $("input:checked").length >= 1;
        }, 'Selecione no mínimo um item.');

        $.validator.setDefaults({
            errorElement: 'span',
            errorPlacement: function validatorErrorReplacement(error, element) {
                var elem = $(element),
					corners = ['right center', 'left center'],
					flipIt = elem.parents('span.right').length > 0;

                if (!error.is(':empty')) {
                    elem.filter(':not(.valid)').qtip({
                        overwrite: false,
                        content: error,
                        position: {
                            my: corners[flipIt ? 0 : 1],
                            at: corners[flipIt ? 1 : 0],
                            viewport: $(window)
                        },
                        show: {
                            event: false,
                            ready: true
                        },
                        hide: false,
                        style: {
                            classes: 'ui-tooltip-red'
                        },
                        events: {
                            show: function (event, api) {
                                var topFirstQtip = $.map($('.ui-tooltip'), function (o, i) { return $(o).offset().top; }).min();
                                $('body,html').animate({
                                    scrollTop: topFirstQtip
                                }, 800);
                            }
                        }
                    })
				.qtip('option', 'content.text', error);
                } else { elem.qtip('destroy'); }
            },
            success: $.noop
        });
    };

    $.fn.reset = function formReset() {
        $(this).each(function eachFormReset() {
            this.reset();
        });
    };

});

function MessageBox() {
	var self = this;
	self.show = function messageBoxShow(message, options) {
		
		var n = noty({
			layout: options && options['layout'] || 'center',
			type: options && options['type'] || 'alert',
			text: message,
			timeout: options && options['timeout'] || 2000,
			modal: options && options['modal'] || false,
			dismissQueue: options && options['queue'] || true,
			closeWith: ['click'],
			callback: options && options['callback']
		});

		return n;
	};
}
//Chamada
//	var box = new MessageBox();
//	box.show('Dados do Contrato atulizado com sucesso.', { type: 'success', layout: "center" });

Array.prototype.max = function () {
    return Math.max.apply(null, this);
};
Array.prototype.min = function () {
    return Math.min.apply(null, this);
};