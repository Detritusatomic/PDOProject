<div class="wrap white z-depth-1">
	<div class="row">
		<!------------------------ARTICLES FRAIS-------------------------->
		<div class="col l8 s12">
			<h4>Les articles frais</h4>
			<div class="row">
				<div class="col l6 m6 s12">
					<?=News::display($variables['news']['0'])?>
				</div>
				<div class="col l6 m6 s12">
					<?=News::display($variables['news']['1'])?>
				</div>
			</div>
			<?php for($i=2;$i<8;$i++):?>
			<div class="row">
				<div class="col s12">
					<?=News::displayMobile($variables['news'][$i])?>
				</div>
			</div>
			<?php endfor;?>
		</div>
		<!------------------------ARTICLES COOLS-------------------------->
		<div class="col l4 m12 s12">
			<h4>Les articles cools</h4>
			
			<div class="row">
			<?php for($i=0;$i<4;$i++):?>
				<div class="col l12 m6 s12">
					<?=News::display($variables['coolnews'][$i])?>
				</div>
			<?php endfor;?>
			</div>
		</div>	
	</div>

	
	<!------------------------TOUS LES ARTICLES-------------------------->
	<div class="row">
		<div class="col s12">
			<h4>Les articles</h4>
			<table class="responsive-table highlight">
				<thead>
					<tr>
						<p>
							<strong>Le filtre : </strong>
							<?php foreach ($variables['categories'] as $c) :?>
							<a class="filtre <?=$c->color?>"><?=$c->nom?></a> -
							<?php endforeach ;?>
						</p> 
						<p id="filtres">Les tags : </p>
						<th class="hide-on-large-only">Date</th>
						<th class="hide-on-large-only">Thème</th>
						<th class="hide-on-large-only">Titre</th>
						<th class="hide-on-large-only">Comms</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($variables['news'] as $n) :?>
					<tr>
						<td><?=date("d/m/Y",strtotime($n->date))?></td>
						<td class="<?=Categories::getCategorieById(Produits::getProductById($n->id_produit)->id_categorie)->color?> triable"><?=Categories::getCategorieById($n->id_categorie)->nom?></td>
						<td><strong><?=Produits::getProductById($n->id_produit)->nom?></strong> | <?=$n->titre?></td>
						<td><a class="grey-text right"><?=rand(0,25)?> <i class="material-icons">comment</i></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>