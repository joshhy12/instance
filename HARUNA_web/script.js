$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = {
            fullName: $('#fullName').val(),
            registrationNumber: $('#registrationNumber').val(),
            email: $('#email').val(),
            region: $('#region').val(),
            district: $('#district').val(),
            password: $('#password').val(),
            confirmPassword: $('#confirmPassword').val()
        };

        // Validate form data before sending (if needed)
        if ($('#fullName').val() === '' || $('#registrationNumber').val() === '' || $('#email').val() === '' ||
            $('#region').val() === '' || $('#district').val() === '' || $('#password').val() === '' ||
            $('#confirmPassword').val() === '') {
            alert('Please fill all the fields correctly!');
            return;
        }

        // Perform AJAX request to submit data to the server
        $.ajax({
            type: 'POST',
            url: 'server-side-script.php', // Replace with the path to your server-side script
            data: formData,
            success: function(response) {
                // Handle the server response
                if (response === 'success') {
                    alert('Form submitted successfully!');
                    $('#registrationForm')[0].reset(); // Reset form fields after submission
                } else {
                    alert('Error: ' + response); // Show error message
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX error: ' + status + ': ' + error);
                alert('An error occurred while submitting the form.');
            }
        });
    });

    // Other validation and region-district logic remains the same...
});
