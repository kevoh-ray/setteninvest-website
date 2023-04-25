$(function() {
    $('#settings-form').on('submit', function(e){
        e.preventDefault();

        var email = $('#email').val();
        var profilePicture = $('#profile-picture')[0].files[0];
        var currentPassword = $('#current-password').val();
        var newPassword = $('#new-password').val();

        var formData = new FormData();
        formData.append('email', email);
        formData.append('current-password', currentPassword);
        formData.append('new-password', newPassword);

        if(profilePicture){
            formData.append('profile-picture', profilePicture);
        }

        $.ajax({
            url: '/update-settings',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
                alert('Settings Updated Successfully!');
            },
            error: function(){
                alert('Error updating settings!');
            }
        });
    });
});
      