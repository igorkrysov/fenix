$( document ).ready(function() {
    $(document).click(function() {
        $.ajax({
            type: "POST",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $('meta[name=route-clicker]').attr("content"),
            data: {
              'index': $('meta[name=point]').attr("content"),              
            },
            success: function (data) {
                if (data.status) {
                }
            }
        });              
    });
});