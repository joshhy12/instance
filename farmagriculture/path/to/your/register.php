// Replace the existing AJAX success handler with this:
$.ajax({
    url: 'register.php',
    type: 'POST',
    data: formData,
    success: function(response){
        console.log('Received response:', response);
        const res = JSON.parse(response);
        if(res.status === 'success') {
            // Show success alert
            window.alert('Registration successful! Welcome to Agriculture Products Sales System.');
            // Redirect to home.html after user clicks OK on alert
            window.location.href = 'home.html';
        } else {
            // Show error alert if something went wrong
            window.alert('Registration failed: ' + res.message);
        }
    },
    error: function(xhr, status, error) {
        console.error('AJAX request failed:', status, error);
        window.alert('An error occurred during registration. Please try again.');
    }
});
