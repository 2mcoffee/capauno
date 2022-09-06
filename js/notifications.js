$(document).ready(function(){

    

    function load_unseen_notification(view = '')
    {
        $.ajax({
        url: "notification.php",
        method:"POST",
        data:{view:view},
        dataType:"json",
        success:function(data)
        {
        $('.dropdown-menu2').html(data.notification);
        if(data.unseen_notification > 0)
        {
            $('.count').html(data.unseen_notification);
        }
        }
        });
    }
    
    load_unseen_notification();
    
    $(document).on('click', '.dropdown-toggle', function(){
     $('.count').html('');
     load_unseen_notification('yes');
    });
    
    setInterval(function(){ 
     load_unseen_notification();; 
    }, 5000);
    
});