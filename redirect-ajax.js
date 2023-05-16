 $(document).on('click','a.nav-link', function(e){
    $('#preloder').css("display", "block");
    e.preventDefault();
    var pageURL=$(this).attr('href');
   
    history.pushState(null, '', pageURL);
     
    $.ajax({
       type: "GET",
       url: "page-content.php", 
       data:{page:pageURL},            
       dataType: "html",                  
       success: function(data){
        $('#preloder').css("display", "none");
        $('#pageContent').html(data);    
               
       }

   });
});