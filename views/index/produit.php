<div class="wrap white shadow1">
	<div class="row">
		<div class="col s12 m12">
			<h4>La page produit</h4>
		</div>
		<?= Produits::pageproduit($variables['bestProduits'][2])?>
	</div>
		
	<div class="row">
		<div class="col m12">
			<h4>Les infos détaillées</h4>
			<p><strong>Résumé : </strong><?= $variables['bestProduits'][2]->description?></p>
			
			<h4>Les détails chiants</h4>
			<ul class="col s6">
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
			</ul>
			<ul class="col s6">
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col m12">
			<h4>Les suggestions</h4>
		</div>
		<div class="col m3 s6">
			<div class="jaquette">
				<img class="materialboxed" data-caption="Deadpool" width="100%" src="../media/img/jaquette1.jpg">
			</div>
			<h5><strong>Deadpool</strong></h5>
			<p><strong>Description : </strong>Lorem ipsum dolor sit amet Lorem ipsum dolor ...</p>
			<p><strong>Note : </strong>10/10 <br/>
				<a class="grey-text">En savoir plus</a>
			</p>
		</div>
		<div class="col m3 s6">
			<div class="jaquette">
				<img class="materialboxed" data-caption="Borderlands 2" width="100%" src="../media/img/jaquette2.jpg">
			</div>
			<h5><strong>Borderlands 2</strong></h5>
			<p><strong>Description : </strong>Lorem ipsum dolor sit amet Lorem ipsum dolor ...</p>
			<p><strong>Note : </strong>10/10 <br/>
				<a class="grey-text">En savoir plus</a>
			</p>
		</div>
		<div class="col m3 s6">
			<div class="jaquette">
				<img class="materialboxed" data-caption="Deadpool" width="100%" src="../media/img/jaquette3.jpg">
			</div>
			<h5><strong>Les lapins crétins</strong></h5>
			<p><strong>Description : </strong>Lorem ipsum dolor sit amet Lorem ipsum dolor ...</p>
			<p><strong>Note : </strong>10/10 <br/>
				<a class="grey-text">En savoir plus</a>
			</p>
		</div>
		<div class="col m3 s6">
			<div class="jaquette">
				<img class="materialboxed" data-caption="Deadpool" width="100%" src="../media/img/jaquette4.jpg">
			</div>
			<h5><strong>ACDC - Black Ice</strong></h5>
			<p><strong>Description : </strong>Lorem ipsum dolor sit amet Lorem ipsum dolor ...</p>
			<p><strong>Note : </strong>10/10 <br/>
				<a class="grey-text">En savoir plus</a>
			</p>
		</div>
	</div>
</div>