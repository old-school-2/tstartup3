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
   
   $('.accordion-item').each(function(){
        var id = $(this).attr('data-id');
        var count = counterCheckbox(id);
        if (count > 0){
            $('.filter-active-count[data-id="'+id+'"]').text(count).show();   
        }
   });
   
  
  
   /*$("#draggable").draggable();*/
    $(".droppable").sortable({
        connectWith: ".droppable",
        placeholder: 'highlight', 
        opacity: 0.8,
        update: function(event, ui){
            var data_id = ui.item.attr('data-id');
            var data_stage_id = ui.item.closest('.droppable').attr('data-stage-id');
            
            $('.totalCount[data-stage-id="'+data_stage_id+'"]').text($('.droppable[data-stage-id="'+data_stage_id+'"] .card').length);

            $('#kanbanStageId').val(data_stage_id); 
            $('#kanbanId').val(data_id); 
            $('#updateStage').click();  
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

function counterAllFilters(){
    var count = 0;
    $('.filter-active-count').each(function(){
        count+=parseInt($(this).text());      
    });
    
    if (count > 0){
        $('.filter-active-count-all').text(count).show(); 
    } else {
        $('.filter-active-count-all').text('').hide();    
    }
    
    console.log(count);
        
}