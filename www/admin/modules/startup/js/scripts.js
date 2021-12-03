$('body').on('click', '.jsFileUploadDropZone', function() {
    
    var h = $(document).outerHeight(true);
    $('#opaco').height(h).fadeIn(200).removeClass('hidden');
    
    var startup_id = $(this).attr('data-id');
    var formData = new FormData();
    
    $.each($('#testUpload')[0].dropzone.getAcceptedFiles(), function(i, file) {
       formData.append('file-' + i, file);
    });
    
     formData.append('module', 'startup');
     formData.append('component', '');
     formData.append('action', 'ajax');
     formData.append('form_id', 'form_loadDocuments');
     formData.append('startup_id', startup_id);
                
     $.ajax({
       url: "/admin/index.php",
       type: "POST",
       data: formData,
       cache: false,
       contentType: false,
       processData: false,
       success: function(html) {
                        
          var popupWindow = 'jsPopupWindow';
                       
          if (isJSON(html) == true) {
                        
              var myArr = $.parseJSON(html);
                        
              if (myArr[0] == 'popup') {
                            
                var cl = $('#'+popupWindow).clone();
                            
                cl.find('#'+popupWindow+'SubDiv').css({'height':myArr[3]});
                cl.find('td').html(myArr[1]);
                            
                cl.css({'width':myArr[2],'height':myArr[3],'z-index':myArr[4]}).appendTo('body').fadeIn(200).removeClass('hidden').addClass('jsPopupClose');
                return false;
              }
         
          }
          
          $('#jsAjaxLoadFilesTable').html(html);
          
          var heightTop = $('#jsAjaxLoadFilesTable').offset().top - 50;
                            
          $('html, body').animate({
             scrollTop: heightTop
          }, 500);
          
          Dropzone.forElement('#testUpload').removeAllFiles(true);
          
          $('#opaco').fadeOut(550).addClass('hidden');              
       }
     });
     return false;
       
});

$('body').on('click', '.jsFileClearDropZone', function() {
   Dropzone.forElement('#testUpload').removeAllFiles(true);   
});

$('body').on('click', '.jsClickBtn', function() {
   var btn = $(this).attr('data-btn');
   $('#'+btn).click();
   return false;
});

$('body').on('click', '.jsDelTagBtn', function() {
   var btn = $(this).attr('data-btn');
   var tag = $(this).attr('data-tag');
   var del = $(this).attr('data-remove');
   
   $('#jsTagName').val(tag);
   $('#jsTagRemoveBtn').val(del);
   
   $('#'+btn).click();
   return false;
});