$(document).ready(function(){
    $('#city').change(function(){
        var city_id = $(this).val();
        $.get('ajax/'+city_id, function(data){
            $('#district').html(data);
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