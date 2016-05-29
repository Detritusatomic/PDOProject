<div class="wrap white shadow1">
    <div class="row">
		<div class="card white z-depth-0 no-margin-tb">
			<div class="filler brown padding-md">
				<h3 class="center-align white-text hide-on-med-and-down">La page de <?= $variables['user']->prenom; ?></h3>
				<a class="btn white brown-text waves-dark waves-effect profilink hide-on-small-only">Modifier</a>
				<a class="btn white brown-text waves-dark waves-effect profilink hide-on-med-and-up"><i class="material-icons ">edit</i></a>
			</div>
			<div class="card-profile-image col l2 s6 offset-s3 center">
				<img src="../../media/img/avatar.png" alt="profile image" class="circle z-depth-2 responsive-img activator">
			</div>
			<div class="filler transparent hide-on-large-only">
			</div>
			<div class="card-content">
				<div class="row">                    
					<div class="col l5 offset-l2 m6">                  
						<h4 class="grey-text text-darken-3 no-margin-b"><?= $variables['user']->prenom.' '.strtoupper($variables['user']->nom); ?></h4>
						<p class="grey-text text-darken-2">Utilisateur</p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->mail; ?></p>   
						<p class="grey-text text-darken-2"><?= $variables['user']->adresse; ?></p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->cp; ?></p>                        
						<p class="grey-text text-darken-2"><?= $variables['user']->ville; ?></p>                        
					</div> 
					<div class="col l5 m6" >
						<h4 class="grey-text text-darken-3 no-margin-b">Mes badges</h4>
						
						<i class="material-icons brown-text tooltipped" data-position="bottom" data-tooltip="Le gamer">games</i>
						<i class="material-icons brown-text tooltipped" data-position="bottom" data-tooltip="Le riche">credit_card</i>
						<i class="material-icons brown-text tooltipped" data-position="bottom" data-tooltip="L'ancien">album</i>
						<i class="material-icons brown-text tooltipped" data-position="bottom" data-tooltip="Le commentateur">comment</i>							
						<i class="material-icons brown-text tooltipped" data-position="bottom" data-tooltip="Le juge">star</i>
						<br/>
						<i class="material-icons grey-text text-lighten-2 tooltipped" data-position="bottom" data-tooltip="Le troll">forum</i>
						<i class="material-icons grey-text text-lighten-2 tooltipped" data-position="bottom" data-tooltip="Le cinéaste">movie</i>
						<i class="material-icons grey-text text-lighten-2 tooltipped" data-position="bottom" data-tooltip="Le tout puissant">visibility</i>
						<div class="progress brown lighten-4">
							<div class="determinate brown" style="width:50%"></div>
						</div>
						<p>Progression : 50%</p>
						
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
					<div class="col s12">
						<h4 class="grey-text text-darken-3 no-margin-b">Mes commentaires</h4>
						<ul>
							<li>Comm1</li>
							<li>Comm2</li>
							<li>Comm3</li>
							<li>Comm4</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>