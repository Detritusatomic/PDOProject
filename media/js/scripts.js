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
	});
});