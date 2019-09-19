		$(document).ready(function(e) {
			$.MsgError = function() {
				var resultado=false;
				alert("No olvides de marcar el reCAPTCHA");
		    };	
		    $("#frmcaptcha").submit(function(e) {
		        $retorno=false;
		        $.ajax({
					url:"vrfcaptcha.php",
					type:"POST",
					dataType:"json",
					data:$("#frmcaptcha").serialize(),
					async:false,
					success: function(msg){
						$retorno=msg.success;
						if($retorno) {$("#g-recaptcha-response","#frmcaptcha").remove();}
						else {$.MsgError('Fallo de validación','reCAPTCHA 2.0');}
					},
					error: function (xhr, ajaxOptions, thrownError){$.MsgError('<p>No se a podido cargar la página '+this.url+'</p><p>'+thrownError+'</p>','Error AJAX');}  
				});		
				return $retorno;
		    });
		});
