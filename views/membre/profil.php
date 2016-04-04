<div class="wrap">
    <div class="row">
		<div class="card white no-margin-tb">
			<div class="filler blue padding-md">
				<h3 class="center-align white-text">Profil de <?= $variables['user']->prenom; ?></h3>
				<a class="btn white blue-text waves-dark waves-effect profilink">Modifier</a>
			</div>
			<div class="card-profile-image col s2 center">
				<img src="../../media/img/avatar.png" alt="profile image" class="circle z-depth-2 responsive-img activator">
			</div>
			<div class="card-content">
				<div class="row">                    
					<div class="col s5 offset-s2">                  
						<h4 class="grey-text text-darken-3 no-margin-b"><?= $variables['user']->prenom.' '.strtoupper($variables['user']->nom); ?></h4>
						<p class="grey-text text-darken-2">Utilisateur</p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->mail; ?></p>   
						<p class="grey-text text-darken-2"><?= $variables['user']->adresse; ?></p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->cp; ?></p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->ville; ?></p>                        
					</div> 
					<div class="col s5">
						<h4 class="grey-text text-darken-3 no-margin-b">Mes badges</h4>
						<div class="row">
							<p class="col s6">Le joueur</p>
							<p class="col s6"><i class="material-icons blue-text tooltipped" data-position="right" data-tooltip="Acheter un jeu">games</i></p><br/>
							<p class="col s6">Le riche</p>
							<p class="col s6"><i class="material-icons blue-text">credit_card</i></p><br/>
							<p class="col s6">Le vieux</p>
							<p class="col s6"><i class="material-icons blue-text">album</i></p><br/>
							<p class="col s6">Le chiant</p>
							<p class="col s6"><i class="material-icons blue-text">comment</i></p><br/>							
							<p class="col s6">Le mécontent</p>
							<p class="col s6"><i class="material-icons blue-text">star</i></p><br/>
							<p class="col s6">Le chiant 2</p>
							<p class="col s6"><i class="material-icons blue-text">forum</i></p><br/>
						</div>
					</div>
					<div class="col s12">                  
						<h4 class="grey-text text-darken-3 no-margin-b">Historique de mes commandes</h4>
						<table class="highlight bordered">
							<thead>
								<tr>
									<th>Date</th>
									<th>Total</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="4">19/05/2014</td>
									<td rowspan="4">125,00€</td>
								</tr>
								<tr>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
								<tr>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
								<tr>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
								<tr>
									<td>19/05/2014</td>
									<td>15,00€</td>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
								<tr>
								<tr>
									<td rowspan="3">19/05/2014</td>
									<td rowspan="3">15,00€</td>
								</tr>
								<tr>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
								<tr>
									<td>Nom produit x Qte <span class="right">Prix €</span></td>
								</tr>
							</tbody>
						</table>				
						
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>