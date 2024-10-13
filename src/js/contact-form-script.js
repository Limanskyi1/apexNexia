jQuery(document).ready(function($) {
    $('#contacts-form').unbind('submit').submit(function(e) {
        e.preventDefault();

        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: formData,
            success: function(response) {
                document.getElementById('successMessage').style.display = 'inline';
            }            
        });
    });
});




