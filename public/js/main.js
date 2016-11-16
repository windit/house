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
			$('#advancedSearchButton').text("Tìm kiếm nâng cao ↑");
		else
			$('#advancedSearchButton').text("Tìm kiếm nâng cao ↓");
	});

	//js for detail search
	$('#scategory').change(function(){
        var category_id = $(this).val();
        $.get('ajax/kinds/'+category_id, function(data){
            $('#skind').html(data);
        });
    });

    $('#scity').change(function(){
        var city_id = $(this).val();
        $.get('ajax/'+city_id, function(data){
            $('#sdistrict').html(data);
        });
    });
    $('#sdistrict').change(function(){
        var district_id = $(this).val();
        $.get('ajax/ward/'+district_id, function(data){
            $('#sward').html(data);
        });
    });

    //js for create house
    $('#category').change(function(){
        var category_id = $(this).val();
        $.get('ajax/kinds/'+category_id, function(data){
            $('#kind').html(data);
        });
    });
    $('#city').change(function(){
        var city_id = $(this).val();
        $.get('ajax/'+city_id, function(data){
            $('#district').html(data);
        });
    });
    $('#district').change(function(){
        var district_id = $(this).val();
        $.get('ajax/ward/'+district_id, function(data){
            $('#ward').html(data);
        });
    });

});