<?php
	function enviaEmail($nome, $email, $mensagem){
		$nom = $nome;
		$emai= $email;
		$mensage = $mensagem;
		
		// Compo E-mail
		$arquivo = "
		<style type='text/css'>
		body {
			margin:0px;
			font-family:Verdane;
			font-size:12px;
			color: #666666;
		}
		a{
			color: #666666;
			text-decoration: none;
		}
		a:hover {
			color: #FF0000;
			text-decoration: none;
		}
		</style>
		<html>
			<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
				<tr>
					<td>
						<tr>
							<td width='500'>Nome:$nom</td>
						</tr>
						<tr>
							<td width='320'>E-mail:<b>$emai</b></td>
						</tr>
						<tr>
						  <td width='320'>Mensagem:$mensage</td>
						</tr>
					</td>
				</tr> 
				<tr>
					<td>Este e-mail foi enviado em <b>HOJE</b> às <b>16:00</b></td>
				</tr>
			</table>
		</html>
		";
		//enviar
     
		 // emails para quem será enviado o formulário
		$emailenviar = "tccbauc@gmail.com";
		$destino = $emailenviar;
		$assunto = "Contato pelo Site";
 
		// É necessário indicar que o formato do e-mail é html
		$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: $nom <$emai>';
		//$headers .= "Bcc: $EmailPadrao\r\n";
     
		//se der errado (trocar a variavel arquivo pela mensage);
		$enviaremail = mail($destino, $assunto, $arquivo, $headers);
		if($enviaremail){
			echo "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
			
		} else {
			echo "ERRO AO ENVIAR E-MAIL!";
		}
		//	credits by: http://www.linhadecodigo.com.br/artigo/3619/enviando-email-com-php.aspx#ixzz4JPMkj9Bw 
	}

?>