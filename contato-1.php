<?php 

//include("header.php"); 



require_once("headercontato.php");

require_once("menu.php");

require_once("funcoes.php");



?>

<div class="container">

	<div class="row">

		<div class="col-lg-8 col-lg-offset-2">



		<?php echo "<h3>Envie a sua mensagem</h3><br>"; ?>



			<form id="contact_form" method="post" action="process_contact.php">

				<div class="messages"></div>

				<div class="controls">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_name">Nome *</label>

								<input id="form_name" type="text" name="name" class="form-control" placeholder="Por favor digite o seu nome *" required="required" data-error="Nome é obrigatório.">

								<div class="help-block with-errors"></div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_lastname">Sobrenome *</label>

								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Por favor digite o sobrenome *" required="required" data-error="Sobrenome é obrigatório.">

								<div class="help-block with-errors"></div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_email">Email *</label>

								<input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor digite o e-mail *" required="required" data-error="E-mail válido é obrigatório.">

								<div class="help-block with-errors"></div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_phone">Telefone</label>

								<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Por favor digite o telefone">

								<div class="help-block with-errors"></div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-12">

							<div class="form-group">

								<label for="form_message">Mensagem *</label>

								<textarea id="form_message" name="message" class="form-control" placeholder="Por favor digite a mensagem *" rows="4" required="required" data-error="Por favor deixe a sua mensagem."></textarea>

								<div class="help-block with-errors"></div>

							</div>

						</div>

						<div class="col-md-12">

							<div class="form-group">                                       

								<div class="g-recaptcha" data-sitekey="6Ld02XwfAAAAAKeeIkb52dF4ThMaNuNN9RQ26QZo"></div>

							</div>

						</div>

						<div class="col-md-12">

							<input type="submit" class="btn btn-success btn-send" value="Enviar mensagem">

							

						</div>

					</div> 

				

				</div>

			</form>

		</div>

	</div>		

</div>

<?php

require_once("footer.php");









