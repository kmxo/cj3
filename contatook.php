<?php

function logMe($msg){

    // Abre ou cria o arquivo bloco1.txt

    // "a" representa que o arquivo é aberto para ser escrito

    $fp = fopen("log_contato.txt", "a");

    

    // Escreve a mensagem passada através da variável $msg

    $escreve = fwrite($fp, $msg);

    

    // Fecha o arquivo

    fclose($fp); 

}



$from_email = 'contato@camachojunior.com';

$send_to_email = 'contato@camachojunior.com';

$subject = 'CJ Blog contato';

$form_fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); 

$mail_send_suceess = 'Thank you for submitting your message.<br>We will get back to you soon!';

$mail_send_failed = 'We had a problem. Please try again later.';

/*
Ignore any submissions that inlcude this field since it is hidden within the form.
*/
if(!empty($_POST['website'])) die();

try {

    if (!empty($_POST)) {            

    

        $message_body = "You have new message from contact form\n=============================\n";

        foreach ($_POST as $key => $value) {

            if (isset($form_fields[$key])) {

                $message_body .= "$form_fields[$key]: $value\n";

            }

        }

        $headers = array('Content-Type: text/plain; charset="UTF-8";'.'\n',

            'From: ' . $from_email.'\n',

            'Reply-To: ' . $from_email.'\n',

            'Return-Path: ' . $from_email,

        );

        //Grava Log

        logMe($message_body);

        //Envia email

        mail($send_to_email, $subject, $message_body, implode("\n", $headers),"-r".$from_email);

        $responseArray = array('type' => 'success', 'message' => $mail_send_suceess);

    }

} catch (\Exception $e) {

    $responseArray = array('type' => 'danger', 'message' => $mail_send_failed);

}



require_once("header.php");

require_once("menu.php");

require_once("funcoes.php");



?>

<div class="container">

	<div class="row">

		<div class="col-lg-8 col-lg-offset-2">



		<?php echo "<br><br><br><h3>Thank you!</h3><br>"; ?>



			

				<div class="messages"></div>

				<div class="controls">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_name"><?php echo $responseArray['message']; ?></label>

								

							</div>

						</div>

						

					</div>

				

				

				</div>

			

		</div>

	</div>		

</div>

<?php

require_once("footer.php");
