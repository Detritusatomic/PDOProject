<html>
    <head>
        <title>Admin H1RM1</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Import Google Icon Font-->
        <link href="//127.0.0.1/PDOproject/media/css/materialize.min.css" rel="stylesheet"/>
        <link href="//127.0.0.1/PDOproject/media/css/stylesadmin.css" rel="stylesheet"/>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/materialize.min.js"></script>
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/scripts.js"></script>

        <!-- ckeditor -->
        <script type="text/javascript" src="//127.0.0.1/PDOproject/media/js/ckeditor/ckeditor.js"></script>
        <link href="//127.0.0.1/PDOproject/media/js/ckeditor/skins/office2013/editor.css" rel="stylesheet"/>
        <link href="//127.0.0.1/PDOproject/media/js/ckeditor/skins/office2013/dialog.css" rel="stylesheet"/>
    </head>

    <header>
        <nav>
            <div class="blue nav-wrapper">
                <ul class="right hide-on-med-and-down blue">
                    <li><a href='#' class="dropdown-button" data-activates='dropdown-plus'><i class="material-icons">more_vert</i></a></li>
                    <ul id='dropdown-plus' class='dropdown-content'>
                        <li><a href="#!">Paramètres</a></li>
                        <li><a href="#!">Déconnexion</a></li>
                        <li><a href="#">Quitter</a></li>
                    </ul>
                </ul>
                <ul id="slide-out" class="side-nav fixed">
                    <li class="no-padding"><a href='<?php echo __BASE__URI__; ?>admin/index'><i class="material-icons left">home</i>Tableau de bord</a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header no-margin">Produits<i class="material-icons left">shopping_cart</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class="padding-md-l"><a class="no-margin" href='<?php echo __BASE__URI__; ?>adminProduct/index'><i class="material-icons left">keyboard_arrow_right</i>Tous les produits</a></li>
                                        <li class="padding-md-l"><a class="no-margin" href='<?php echo __BASE__URI__; ?>adminProduct/create'><i class="material-icons left">keyboard_arrow_right</i>Créer un produit</a></li>
                                        <li class="padding-md-l"><a class="no-margin" href='<?php echo __BASE__URI__; ?>adminProduct/settings'><i class="material-icons left">keyboard_arrow_right</i>Paramètres</a></li>                                    
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="no-padding"><a href='#'><i class="material-icons left">create</i>Articles</a></li>
                    <li class="no-padding"><a href='#'><i class="material-icons left">grid_on</i>Catégories</a></li>

                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse show-on-large"></a>
            </div>

            <script>
                $(".button-collapse").sideNav({
                    menuWidth: 300,
                }
                );
                $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrain_width: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0, // Spacing from edge
                    belowOrigin: true, // Displays dropdown below the button
                    alignment: 'right' // Displays dropdown with edge aligned to the left of button
                });
            </script>
        </nav>
        <body style="padding-left: 300px;">
