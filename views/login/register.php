<div class="wrap white shadow1">
	<div class="row">
		<div class="col s12">
			<?php if (isset($variables['feedback'])) : ?>
			<div class="alert alert-danger"><?php echo $variables['feedback']; ?></div>
			<?php endif; ?>
			<h2 class="center">Inscription</h2>
			<form class="" method="POST" action="<?php echo __BASE__URI__; ?>login/submitRegister">
				<fieldset>
					<legend>1 - Création du compte</legend>
					<input type="hidden" name="register_form" value="12"/>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="mail" type="email" class="validate" name="mail">
							<label for="mail">Adresse mail</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="password" type="password" class="validate" name="password">
							<label for="password">Mot de passe</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="password_confirm" type="password" class="validate" name="password_confirm">
							<label for="password">Confirmer le mot de passe</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>2 - Vos informations</legend>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="nom" type="text" class="validate" name="nom">
							<label for="nom">Nom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="prenom" type="text" class="validate" name="prenom">
							<label for="prenom">Prénom</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="cp" type="text" class="validate" name="cp">
							<label for="cp">Code postal</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="ville" type="text" class="validate" name="ville">
							<label for="ville">Ville</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input autocomplete="off" id="adresse" type="text" class="validate" name="adresse">
							<label for="adresse">Adresse</label>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legned>3 - Validation</legned>
					<div class="row">
						<button class="btn waves-effect waves-light" type="submit" name="action">Connexion
						</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>