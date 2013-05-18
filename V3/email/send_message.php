<?php
  require_once('class.phpmailer.php');
	
	################################################ E-mail para ADM's ##########################################################################		
	$mail = new PHPMailer();
	
	//Variaveis para envio
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	//Fim Variaveis para envio
		
	$body = '<h1>Contato</h1>';
	$body .='<br/>';
	$body .='<p>Nome: '. $nome .'</p>';
	$body .='<p>E-mail: '. $email .'</p>';
	$body .='<p>Mensagem: '. $msg .'</p>';
	$body .='<br/>';
	$body .='<p><b>Att.</b></p>';
	$body .='<p>PROX3 - Produtora Digital</p>';
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "contato@prox3.com.br";  // GMAIL username
	$mail->Password   = "Cont3Prox";            // GMAIL password
	
	$mail->SetFrom('contato@prox3.com.br', 'PROX3');
	
	$mail->AddReplyTo("contato@prox3.com.br","PROX3");
	
	$assunto = '[Prox3] Contato';
	$assunto_codificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'B', base64_encode($assunto));
	
	$mail->Subject    = $assunto_codificado;
	
	//$mail->AltBody    = "Caso n&atilde;o esteja visualizando este e-mail, acesse esse link:"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress('contato@prox3.com.br','PROX3');

	if(!$mail->Send()) {
		echo "error";
	} else {
		echo "ok";
	}
?>
	


	
	