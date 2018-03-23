/**
 * Created by shark on 13.02.2018.
 */
$(document).ready(function () {
    $(document).on('click', '.tog_btn', function() {
        var $li = $(this).parents('.listnone').find('li.not-visible-price');
        $li.slideToggle();
    });

    $(document).on('click', '#send_btn', function() {
        var $form = $(this).parents('form'),
            $tooltips = $('.tooltip_message');

        $tooltips.attr("title",'');
        $.post( "/site/send-message", $form.serializeArray(), function( data ) {
            if(data.sucess) {
                alert('vse_ok');
                $tooltips.tooltip('hide');
            } else {
                var $text = 0, $key;
                for ($key in data.error) {
                    if (data.error.hasOwnProperty($key)) {
                        $text = data.error[$key];
                        $('#tt_'+$key).attr("title", $text[0]);
                        // console.log($text[0]);
                    }
                }
                // for ($i=0; $i <= data.error.length; $i++) {
                // }
                // $('#ololo').attr("title",'Some_text');
                $tooltips.tooltip('show');
            }
        }, 'json');
        return false;
    });
});
