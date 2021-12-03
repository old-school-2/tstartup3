jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function(arg) {
    return function( elem ) {
        return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

$(function(){
   
   $('body').on('click', '.filter-list li', function(){
        var id = $(this).attr('data-id');
        var count = counterCheckbox(id);
        if (count > 0){
            $('.filter-active-count[data-id="'+id+'"]').text(count).show();   
        } else {
            $('.filter-active-count[data-id="'+id+'"]').text('').hide(); 
        } 
  
   });
   
   $('.filter-search').on('keyup', function(){
        var text = $(this).val();
        var id = $(this).attr('data-id');
        $('.filter-list li[data-id="'+id+'"] label').css('font-weight', 'normal').parent().removeClass('active').removeClass('disactive');
        
        if (text != ''){
            $('.filter-list li[data-id="'+id+'"] label:Contains("'+text+'")').css('font-weight', 'bold').parent().removeClass('disactive').addClass('active');
            $('.filter-list li[data-id="'+id+'"] label:not(.active)').parent().addClass('disactive');
        }
   });
   
    
});

function counterCheckbox(id){
    var count = 0;
    $('.filter-list input[type="checkbox"][data-id="'+id+'"]').each(function(){
        if ($(this).prop('checked') == true){
            count++;   
        }    
    });
    return count;    
}