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
		function nbProduitsPlus(){
			$('#nbproduits').html(parseInt($('#nbproduits').html())+1);	
		}
		var x=this.getBoundingClientRect().left;
		var y=this.getBoundingClientRect().top+document.body.scrollTop;
		
		var particle=document.createElement('div');
		particle.className='particle';
		particle.style.left=x+'px';
		particle.style.top=y+'px';
		particle.className+=' '+this.getAttribute('data-color');
		document.body.appendChild(particle);
		
		var panier=document.getElementById('panier');
		var px=panier.getBoundingClientRect().left+panier.offsetWidth/2;
		var py=panier.getBoundingClientRect().top+document.body.scrollTop+panier.offsetHeight/2;
		console.log(px+" "+py);

		$('.particle').animate({
			top:[py,'easeInSine'],
			left:px
		},{
			duration:1000,
			complete:function(){
				document.body.removeChild(particle);
				nbProduitsPlus();
			}
		});		
	});
});