jQuery(document).ready(function($) {

	// home
	$('.destaque_principal > div:not(:first)').hide();
	$('.destaque_thumbs ul li:first').hide();
	$('.destaque_thumbs ul li:visible:eq(2)').addClass('no-border');

	$('.destaque_thumbs ul li a').click(function(e) {
		e = e || event;
		e.preventDefault();

		var idx = $(this).parent('li').index();
		$('.destaque_principal > div:visible').fadeOut();
		$('.destaque_principal > div:eq(' + idx + ')').fadeIn();

		$('.destaque_thumbs ul li').removeClass('no-border').show();
		$(this).parent('li').hide();
		$('.destaque_thumbs ul li:visible:eq(2)').addClass('no-border');
	});

	createGrid('.lista-produtos');
	createGrid('.lista-eventos');
	createGrid('.lista-imprensa');
});


function createGrid (container) {
	$('.grid-item', container).each(function (i,e) {
		switch(i){
			case 0:
				$(this).addClass('col1').addClass('row1');
				break;
			case 1:
				$(this).addClass('col2').addClass('row1');
				break;
			case 2:
				$(this).addClass('col1').addClass('row1').addClass('omega');
				break;
			case 3:
				$(this).addClass('col1').addClass('row2');
				break;
			case 4:
				$(this).addClass('col2').addClass('row1');
				break;
			case 5:
				$(this).addClass('col1').addClass('row2').addClass('omega');
				break;
			case 6:
				$(this).addClass('col1').addClass('row1');
				break;
			case 7:
				$(this).addClass('col1').addClass('row1');
				break;
		}
	});
}