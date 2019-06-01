$( document ).ready(function() {

    function showNotifications(el){
        $(".notify-item").animate({
            top: '0',
            opacity: 0.85,
        }, 200)
    }

    $( ".notify-close" ).click(function() {
        dismissNotification($(this).parent())
    });


    function dismissNotification(el){
        el.animate({
            marginLeft:"-100%",
            opacity: 0,
        }, 200, 'swing', function (){
            el.remove();
        });

        if($(".notify-item").length==0){
            clearInterval(dismissInterval)
        }
    }

    showNotifications();

    var dismissInterval = setInterval(function(){ dismissNotification($(".notify-item").last()) }, 4000);
})