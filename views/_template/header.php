<html>
    <head>
        <title>H1RM1</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Import Google Icon Font-->
        <link href="//127.0.0.1/PDOproject/media/css/materialize.min.css" rel="stylesheet"/>
        <link href="//127.0.0.1/PDOproject/media/css/styles.css" rel="stylesheet"/>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/materialize.min.js"></script>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/scripts.js"></script>
    </head>
    <header>
	
		<!-------Connexion/Mon compte-------->
        <?php if (!Session::isStarted()) : ?>
		<form id="loginform" class="card no-margin-t padding-sm white" method="POST" action="<?php echo __BASE__URI__; ?>login/submitLogin">
			<?php if (isset($variables['feedback'])) : ?>
				<div class="alert alert-danger">
					<?php echo $variables['feedback']; ?>
				</div>
			<?php endif; ?>
			<input type="hidden" name="form_login" value="1000"/> 
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
			<div class="row center">
				<button class="btn waves-effect waves-light" type="submit" name="action">Connexion
				</button>
			</div>
			<p>Pas encore inscrit ? <a href="<?php echo __BASE__URI__; ?>login/register">Inscrivez-vous !</a></p>
		</form>
        <?php else: ?>
		<div id="loginform" class="card white no-margin-t padding-sm">
			<div class="row center">
				<div class="col s12">
					<div class="chip">
						<img src="<?php echo __BASE__; ?>media/img/avatar.png" alt="Contact Person">
						<?php echo Session::get('user')->prenom.' '.strtoupper(Session::get('user')->nom); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="col s12">
					<li><a href="<?php echo __BASE__URI__; ?>membre/profil">Mon compte</a></li>
					<?php if (Session::get('user')->droit) : ?>
						<li><a href="<?php echo __BASE__URI__; ?>admin/index">Administration</a></li>
					<?php endif; ?>
					<li><a href="<?php echo __BASE__URI__; ?>login/logout">Déconnexion</a></li>
				</ul>
			</div>
		</div>
        <?php endif; ?>
		
		<!---------Contenu panier--------->
		<div id="contenupanier">
			<div class="white">
				Mon panier
			</div>
		</div>
		
        <nav class="navbar shadow1 grey darken-4">
            <div class="nav-wrapper">
                <div class="wrap">
					<div class="row">
						<div id="hover"></div>
						<ul class="left hide-on-med-and-down">
							<li><a class="navlink waves-effect waves-light" href="<?php echo __BASE__URI__; ?>index/index">Accueil</a></li>
							<?php foreach (Categories::getMenu() as $item) : ?>
								<li><a class="navlink waves-effect waves-light" href="<?php echo __BASE__URI__; ?>categories/index?categorie=<?php echo $item['nom']; ?>"><?php echo $item['nom']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						
						<ul class="right hide-on-med-and-down" style="position:absolute;right:0;">
							<?php if (!Session::isStarted()) : ?>
								<li id="login"><a class="waves-effect waves-light"><i class="material-icons right">arrow_drop_down</i>Connexion</a></li>
							<?php else: ?>
								<li id="panier">
									<!----------Bouton panier--------->
									<a class="waves-effect waves-light">( <span id="nbproduits" class="badge no-margin no-padding grey-text text-lighten-1">0</span> )<i class="material-icons right">shopping_cart</i></a>
								</li>
								<li id="login"><a class="waves-effect waves-light"><i class="material-icons right">arrow_drop_down</i>Mon Compte</a></li>
							<?php endif; ?>
						</ul>
					
					</div>
				</div>
            </div>
        </nav>
    </header>

    <body>