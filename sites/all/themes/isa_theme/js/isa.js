(function ($) {
    $(document).ready(function() {
        $('#check-participants').live("click",function(){
            var url = window.location.origin + window.location.pathname + '/check';
            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json',
                success: function (data) {
                    console.log('ajax success');
                    $('.error-list').html(data);
                },
                complete: function (data) {
                    console.log('ajax done');
                },
                error: function () {
                    console.log("error");
                }
            });
        });
    });
})(jQuery);

function goBack(){
    history.back(1);
}