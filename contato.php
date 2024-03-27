<?php



require_once("header.php");

require_once("menu.php");

require_once("funcoes.php");



?>

<div class="container">

	<div class="row">

		<div class="col-lg-8 col-lg-offset-2">

		</br>

		<?php echo "<h3>Send your message</h3><br>"; ?>



			<form action="contatook.php" method="post">

				<div class="messages"></div>

				<div class="controls">

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_name">Name *</label>

								<input id="form_name" type="text" name="name" class="form-control" placeholder="Please inform your name *" required="required" data-error="Please inform your name">

								<div class="help-block with-errors"></div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_lastname">Last Name *</label>

								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please inform your last name *" required="required" data-error="Please inform your last name">

								<div class="help-block with-errors"></div>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_email">Email *</label>

								<input id="form_email" type="email" name="email" class="form-control" placeholder="Please inform your email *" required="required" data-error="Please inform your email">

								<div class="help-block with-errors"></div>

							</div>

						</div>

						<div class="col-md-6">

							<div class="form-group">

								<label for="form_phone">Phone</label>

								<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please inform your phone number">

								<div class="help-block with-errors"></div>

								<input type="text" id="website" name="website"/>

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-12">

							<div class="form-group">

								<label for="form_message">Message *</label>

								<textarea id="form_message" name="message" class="form-control" placeholder="Please inform your message *" rows="4" required="required" data-error="Please inform your message"></textarea>

								<div class="help-block with-errors"></div>

							</div>

						</div>



						<div class="col-md-12">

							<input type="submit" class="btn btn-success btn-send" value="Send">

							

						</div>

					</div> 

</br>

</br>

				</div>

			</form>

		</div>

	</div>		

</div>

<?php

require_once("footer.php");









