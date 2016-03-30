<div class="wrap">
    <div class="row">
		<div class="card white no-margin-tb">
			<div class="filler blue padding-md">
				<a class="btn white blue-text waves-dark waves-effect profilink">Modifier profil</a>
			</div>
			<div class="card-profile-image col s2 center">
				<img src="../../media/img/avatar.png" alt="profile image" class="circle z-depth-2 responsive-img activator">
			</div>
			<div class="card-content">
				<div class="row">                    
					<div class="col s3 offset-s2">                  
						<h4 class="card-title grey-text text-darken-4 no-margin-b"><?php echo $variables['user']->prenom.' '.strtoupper($variables['user']->nom); ?></h4>
						<p class="grey-text">Utilisateur</p>                        
						<p class="grey-text"><?php echo $variables['user']->mail; ?></p>   
						<p class="grey-text"><?php echo $variables['user']->adresse; ?></p>                        
						<p class="grey-text"><?php echo $variables['user']->ville; ?></p>                        
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
		<h2 class="center">Mes commandes récentes</h2>
		<div class="row">
			<div class="col s12">
				<?php foreach ($variables['commandes'] as $commande) : ?>
					<div class="commande card-panel">
						<h3>Commande REF n° : <?php echo $commande->id; ?></h3>
						<div class="card-content">
							<p>Valeur : <?php echo $commande->valeur; ?>€</p>
							<p>Le : <?php echo $commande->date; ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>