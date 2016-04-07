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
		var px=panier.getBoundingClientRect().left+panier.offsetWidth/2-particle.offsetWidth/5;
		var py=panier.getBoundingClientRect().top+document.body.scrollTop+panier.offsetHeight/2-particle.offsetHeight/5;
		
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
			width:$(img).width()/5+"px",
			height:$(img).height()/5+"px"
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
});