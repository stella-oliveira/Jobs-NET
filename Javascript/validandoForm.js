$( document ).ready( function () {

	$( "#formularioCadastro" ).validate( {
		rules: {
			nome: {
            	required: true,
            	minlength: 2
          	},
			cargo: "required",
			profissao: {
            	required: true,
            	minlength: 2
          	},
			dataNascimento: {
				required: true,
				date: true
			},
          	cep: "required",
			rua: "required",
			bairro: "required",
			cidade: "required",
			uf: "required",
			numero: "required",
			telefone1: {
            	minlength: 8,
				maxlength: 8
          	},
			telefone2: {
            	minlength: 8,
				maxlength: 8
          	},
			celular: {
            	required: true,
            	minlength: 11,
				maxlength: 11
          	},
			email: {
				required: true,
				email: true
			},			
			cpf: {
				required: true,
				cpf: true
			},
		},
		messages: {
			nome: {
            	required: "O campo é obrigatório.",
            	minlength: "O campo deve conter no mínimo 2 caracteres."
          	},
			cargo: "O campo é obrigatório.",
			profissao: {
            	required: "O campo é obrigatório.",
            	minlength: "O campo deve conter no mínimo 2 caracteres."
          	},	
			dataNascimento: {
            	required: "O campo é obrigatório.",
				date: "Data inválida"
			},
			cep: "O campo é obrigatório.",
			rua: "O campo é obrigatório.",
			bairro: "O campo é obrigatório.",
			cidade: "O campo é obrigatório.",
			estado: "O campo é obrigatório.",
			numero: "O campo é obrigatório.",
			telefone1: {
				minlength: "O telefone deve conter 8 caracteres.",
				maxlength: "O telefone deve conter 8 caracteres."
			},
			telefone2: {
				minlength: "O telefone deve conter 8 caracteres.",
				maxlength: "O telefone deve conter 8 caracteres."
			},
			celular: {
				required: "O campo é obrigatório.",
				minlength: "O celular deve conter no mínimo 10 caracteres com o DDD.",
				maxlength: "O celular deve conter no máximo 11 caracteres com o DDD."
			},
			email: {
				required: "O campo é obrigatório.",
				email: "E-mail inválido."
			},
			cpf: {
				required: "O campo é obrigatório.",
				cpf: "CPF inválido"
			}
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `help-block` class to the error element
			error.addClass( "help-block" );

			// Add `has-feedback` class to the parent div.form-group
			// in order to add icons to inputs
			element.parents( ".validar" ).addClass( "has-feedback" );

			if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
			} else {
				error.insertAfter( element );
			}

			// Add the span element, if doesn't exists, and apply the icon classes to it.
			if ( !element.next( "span" )[ 0 ] ) {
				$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
			}
		},
		success: function ( label, element ) {
			// Add the span element, if doesn't exists, and apply the icon classes to it.
			if ( !$( element ).next( "span" )[ 0 ] ) {
				$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".validar" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
		},
		unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".validar" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
		}
	} );
} );