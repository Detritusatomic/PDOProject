$(document).on('ready',function(){
	$('.carousel').carousel();
	$(document).on('mouseover','.navlink',function(){
		var rect=this.getBoundingClientRect();
		var hover=document.getElementById('hover');
		hover.style.height='5px';
		hover.style.width=this.offsetWidth+'px';
		hover.style.left=rect.left+'px';
	});
	$(document).on('mouseout','.navlink',function(){
		var hover=document.getElementById('hover');
		hover.style.height='0px';
	});
	$(document).on('click','#login',function(){
		$('#loginform').toggleClass('show');
		$('#contenupanier').removeClass('show');
	});

	$(document).on('click','#panier',function(){
		$('#loginform').removeClass('show');
		$('#contenupanier').toggleClass('show');
	});
	//////////////////////////FILTRES ARTICLES/////////////////////////////
	$(document).on('click','.filtre',function(){
		
		var temp=$('.chip.tags span');

		if (typeof(temp) != 'undefined'){
			for(var i=0;i<temp.length;i++){
				if(temp[i].innerHTML==this.text){
					return;
				}
			}
		}
		
		var newText=document.createTextNode(this.text);
		
		var newTag=document.createElement('span');
		
		newTag.appendChild(newText);
		
		var couleur=this.getAttribute('class').replace('filtre ','');
		
		newTag.setAttribute('class',couleur);
		
		var newChip=document.createElement('div');
		
		newChip.setAttribute('class','chip tags');
		
		newChip.appendChild(newTag);
		
		var newIcon=document.createElement('i');
		
		newIcon.setAttribute('class','material-icons closetag');
		
		var newText=document.createTextNode('close');
		
		newIcon.appendChild(newText);
		
		newChip.appendChild(newIcon);		
		
		var filtres=document.getElementById('filtres');
		
		filtres.appendChild(newChip);
		
		filtrerTableau();
		
	});
	
	$(document).on('click','.closetag',function(){filtrerTableau();});
	
	
	
	function filtrerTableau(){
		var filtres=document.getElementById('filtres');
	
		var tab=document.getElementsByClassName('triable');
		
		if(filtres.childNodes.length==1){
			for(var i=0;i<tab.length;i++){
				tab[i].parentNode.className="";
			}
		}
		
		
		for(var i=0;i<tab.length;i++){
			for(var j=1;j<filtres.childNodes.length;j++){
				if(tab[i].innerHTML!=filtres.childNodes[j].childNodes[0].innerHTML){
					tab[i].parentNode.className="hidden";
				}
			}
		}
		for(var i=0;i<tab.length;i++){
			for(var j=1;j<filtres.childNodes.length;j++){
				if(tab[i].innerHTML==filtres.childNodes[j].childNodes[0].innerHTML){
					tab[i].parentNode.className="";
				}
			}
		}
	}
	
	
	//////////////////////////AJOUT PANIER/////////////////////////////////
	$(document).on('click','.addpanier',function(){
		// incrémenter les produits => en ajax plus tard 
		function nbProduitsPlus(){
			$('#nbproduits').html(parseInt($('#nbproduits').html())+1);	
		}
		
		//choper la positon du produit sur lequel on clique
		var elem=document.getElementById('particle'+this.getAttribute('data-id'));
		var x=elem.getBoundingClientRect().left;
		var y=elem.getBoundingClientRect().top+document.body.scrollTop;
		
		//creer notre "particule"
		var particle=document.createElement('div');
		particle.className='particle';
		//on la met au même niveau que notre boutton
		particle.style.left=x+'px';
		particle.style.top=y+'px';
		
		//on créée l'image
		var img=document.createElement('img');
		img.setAttribute('src',elem.getAttribute('src'));
		img.className="img-responsive";
		img.style.width=elem.offsetWidth+"px";
		img.style.height=elem.offsetHeight+"px";
		//on met l'image dans la div
		particle.appendChild(img)
		
		//on balance la div dans le body
		document.body.appendChild(particle);
		
		//on récup notre position de panier
		var panier=document.getElementById('panier');
		var px=panier.getBoundingClientRect().left+panier.offsetWidth-particle.offsetWidth/5;
		var py=panier.getBoundingClientRect().top+document.body.scrollTop+panier.offsetHeight-particle.offsetHeight/5;
		
		//grossissement/retrecssement de l'image
		$(img).animate({
			width:"+=100px",
			height:"+=100px"
		},100)
		.animate({
			width:"-=100px",
			height:"-=100px",
			opacity:".7"
		},100)
		.animate({
			width:$(img).width()/10+"px",
			height:$(img).height()/10+"px"
		},100);
		
		//et on anime notre div vers notre panier
		$('.particle').animate({
			top:"-=50px",
			left:"-=50px"
		},100).animate({
			top:"+=50px",
			left:"+=50px"
		},100).animate({
			top:[py,'easeInSine'],
			left:[px,'easeOutSine']
		},{
			duration:400,
			complete:function(){
				document.body.removeChild(particle);
				nbProduitsPlus();
			}
		});		
	});
	
	//////////////////////////////////////CHOIX VERSION PRODUIT/////////////////////////////////
	$(document).on('click','#checkbox_version',function(){
	
		if($('#checkbox_version').prop("checked")){
			$('#prix').html('Prix : 10€');
			$('#prix').attr('class',$(this).attr('data-textcolor'));
		}else{
			$('#prix').html('Prix : 25€');
			$('#prix').attr('class',$(this).attr('data-textcolor'));
		}
		
		
		
	
	});
	
	
	
});