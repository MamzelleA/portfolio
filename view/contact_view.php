<?php
$title = 'Contact';
ob_start();
?>
    <div class="anchor" id="contact">
		<h2 class="id-page">CONTACT</h2>
		<h3>Encore un peu de patience, la page est en cours de construction !</h3>
		<p><img src="pictures/icones/construct.png"></p>
	</div>
<!--
		<h3 id="contact-subtitle">Gardons le contact !</h3>
		<p>Une question, une remarque, une précision ? N'hésitez pas à me contacter via le formulaire ci-dessous.<br>
		<span id="text-info">Les informations personnelles que vous pouvez y laisser, en particulier votre mail, ne vous sont demandées que pour me permettre de vous répondre.<br> Ces informations ne sont ni stockées ni conservées.</span></p>
		<?php
		if ($_POST) {
			$message = htmlspecialchars($_POST['message']);
			$subject = htmlspecialchars($_POST['subject']);
			$email = htmlspecialchars($_POST['email']);
			$firstname = htmlspecialchars($_POST['firstname']);
			$lastname = htmlspecialchars(($_POST['lastname']));
		?>
		<script type="text/javascript">
			var formLast = document.getElementById("lastname");
			formLast.value = "<?= $lastname ?>";
			var formFirst = document.getElementById("firstname");
			formFirst.value = "<?= $firstname ?>";
			var formEmail = document.getElementById("email");
			formEmail.value = "<?= $email ?>";
			var formSubject = document.getElementById("subject");
			formSubject.value = "<?= $subject ?>";
			var formMessage = document.getElementById("message");
			formMessage.value = "<?= $message ?>";
		</script>

		<?php
			if (!empty($email)) {
				if (!empty($subject)) {
					if (!empty($message)) {
						if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) {
							echo '<p>Votre message a bien été envoyé.</p>';
							mail('agnes.masetty@mamzellea.fr', $subject, $message);
		?>
		<script type="text/javascript">
			var formField = document.getElementsByClassName("text-type");
			for (i=0; i<formField.length; i++)
			{
				formField[i].value = "";
			}
		</script>
		<?php
						} else {
							echo '<p>Le format de votre mail n\'est pas correct, merci de le vérifier.</p>';
						}
					} else {
						echo '<p>Vous n\'avez pas renseigné le champs <span id="date">message</span>.</p>';
					} 
				} else {
					echo '<p>Vous n\'avez pas renseigné le champs <span id="date">sujet</span>.</p>';
				}
			} else {
				echo '<p>Vous n\'avez pas renseigné le champs <span id="date">mail</span>.</p>';
			}
		} else {
		?>
		<script type="text/javascript">
			var formlast = document.getElementById("lastname");
			formlast.value = "";
			var formFirst = document.getElementById("firstname");
			formFirst.value = "";
			var formEmail = document.getElementById("email");
			formEmail.value = "";
			var formSubject = document.getElementById("subject");
			formSubject.value = "";
			var formMessage = document.getElementById("message");
			formMessage.value = "";
		</script>
		<?php
		}
		?>
		<form method="post" action="">
        	<div id="form-col">
	        	<div class="form-col-1">
		        	<label for="firstname" cols="10">Prénom : </label>
		        	<p><input class="text-type" id="firstname" type="textarea" name="firstname"></p>
		        	<label for="lastname" cols="10">Nom : </label>
		        	<p><input class="text-type" id="lastname" type="textarea" name="lastname"></p>
		        	<label for="email">Mail * : </label>
		        	<p><input class="text-type" id="email" type="textarea" name="email" placeholder="mail@host.fr"></p>
	        	</div>
	        	<div class="form-col-2">
		        	<label for="subject">Sujet * : </label>
		        	<p><input class="text-type" type="textarea" id="subject" name="subject" cols="80" maxlength="50" placeholder="50 caractères max."></p>
		        	<label for="message">Message * : </label>
		        	<p><textarea class="text-type" id="message" name="message" rows="8" cols="80"></textarea></p>
		        	<div id="form-submit">
			        	<p>Les champs marqués d'une <span class="date">*</span> sont <span class="date">obligatoires</span>.</p>
			        	<p><input type="submit" name="send" value="Envoyer"></p>
		        	</div>
	        	</div>
        	</div>
        </form>
	</div>-->
<?php
$content = ob_get_clean();
require('template/template.php');
?>
<!--SCRIPT-->
