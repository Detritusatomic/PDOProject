
<div class="wrap white shadow1">
    <div class="row">
		<div class="col s12 m12">
			<h4>Le paiement</h4>
		</div>
		<div class="col m12">
			<form action="#">
				<div class="row">
					<div class="col m6 s12">
						<h5>Méthode de paiement</h5>
						<p>
							<input name="payment" type="radio" id="paypal" disabled="disabled"/>
							<label for="paypal">Paypal</label>
						</p>
						<p>
							<input name="payment" type="radio" id="nature" disabled="disabled"/>
							<label for="nature">Nature</label>
						</p>
						<p>
							<input name="payment" type="radio" id="phone" disabled="disabled"/>
							<label for="phone">Téléphone</label>
						</p>
						<p>
							<input name="payment" type="radio" id="cb" checked="checked"/>
							<label for="cb">Carte bancaire</label>
						</p>
					</div>
					<div class="col m6 s12">
						<div class="row">
						<h5>Informations de paiement</h5>	
							<div class="input-field col s12">
								  <input id="numcb" type="text" class="validate">
								  <label for="numcb">Numéro carte bancaire</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								  <input id="code" type="number" class="validate">
								  <label for="code">Code a trois chiffres</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								  <input id="datecb" type="text" class="datepicker">
								  <label for="datecb">Date d'expiration</label>
							</div>
						</div>
					</div>
					<br/>
					<div class="col s12">
						<button class="btn brown waves-effect waves-light right" type="submit">Je valide</button>					
					</div>
				</div>
			</form>
		</div>
	</div>
</div>