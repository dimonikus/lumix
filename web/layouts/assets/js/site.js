/**
 * Created by shark on 13.02.2018.
 */
$(document).ready(function () {
    $(document).on('click', '.tog_btn', function() {
        var $li = $(this).parents('.listnone').find('li.not-visible-price');
        $li.slideToggle();
    });
});