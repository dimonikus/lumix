$( document ).ready(function() {
    $(document).on('click', '.js-price', function () {
        var url = $(this).data('url');
        console.log(url);
        $.ajax({
            type     :'POST',
            cache    : false,
            url  : url,
            success  : function(response) {
                $('#forPriceModal').html(response);
                $('#priceModal').modal('show');
            }
        })
    });
});