$(document).ready(function(){
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu', this).fadeIn();
	},
	function(){
		$('.dropdown-menu', this).fadeOut();
	});
	$('#advacedSearch').hide();
	$('#advancedSearchButton').click(function(){
		$('#advacedSearch').toggle();
		
		if($('#advancedSearchButton').text() == "Tìm kiếm nâng cao ↓")
			// alert($('#advancedSearchButton').text());
			$('#advancedSearchButton').text("Tìm kiếm nâng cao ↑");
		else
			$('#advancedSearchButton').text("Tìm kiếm nâng cao ↓");
	});
});