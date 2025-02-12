$(document).ready(function() {
    // Initialize slider
    $('.hero-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        fade: true
    });

    // Smooth scrolling
    $('.nav-link').on('click', function(e) {
        if (this.hash !== '') {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 70
            }, 800);
        }
    });

    // Form validation patterns
    const patterns = {
        fullName: /^[a-zA-Z\s]{3,}$/,
        regNumber: /^BCS-\d{2}-\d{4}-\d{4}$/,
        email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        password: /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/
    };

    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            $.ajax({
                url: 'register.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showNotification(response.message, 'success');
                        $('#registrationForm')[0].reset();
                    } else {
                        showNotification(response.message, 'error');
                    }
                },
                error: function() {
                    showNotification('Server error occurred', 'error');
                }
            });
        }
    });

    // Load regions dynamically
    $.get('get_regions.php', function(regions) {
        const regionSelect = $('#region');
        regions.forEach(region => {
            regionSelect.append(`<option value="${region.id}">${region.name}</option>`);
        });
    });

    // Load districts when region changes
    $('#region').change(function() {
        const regionId = $(this).val();
        $.get('get_districts.php', { region_id: regionId }, function(districts) {
            const districtSelect = $('#district');
            districtSelect.empty().append('<option value="">Select District</option>');
            districts.forEach(district => {
                districtSelect.append(`<option value="${district.id}">${district.name}</option>`);
            });
        });
    });

});
    // Real-time validation
    function validateField(field, pattern) {
        const value = field.val();
        const feedback = field.siblings('.feedback');
        
        if (!pattern.test(value)) {
            field.addClass('invalid').removeClass('valid');
            feedback.text(getErrorMessage(field.attr('id')));
            return false;
        }
        
        field.addClass('valid').removeClass('invalid');
        feedback.text('');
        return true;
    }

    function getErrorMessage(fieldId) {
        const messages = {
            fullName: 'Please enter a valid full name (letters only)',
            regNumber: 'Format should be BCS-00-0000-0000',
            email: 'Please enter a valid email address',
            password: 'Password must be 8+ characters with letters, numbers & special characters'
        };
        return messages[fieldId] || 'Invalid input';
    }

    // Password strength indicator
    $('#password').on('input', function() {
        const password = $(this).val();
        const strength = calculatePasswordStrength(password);
        updatePasswordStrengthIndicator(strength);
    });

    function calculatePasswordStrength(password) {
        let strength = 0;
        if (password.length >= 8) strength += 25;
        if (password.match(/[A-Z]/)) strength += 25;
        if (password.match(/[0-9]/)) strength += 25;
        if (password.match(/[@$!%*#?&]/)) strength += 25;
        return strength;
    }

    function updatePasswordStrengthIndicator(strength) {
        const indicator = $('.password-strength');
        let color = '#e74c3c';
        if (strength > 75) color = '#2ecc71';
        else if (strength > 50) color = '#f1c40f';
        else if (strength > 25) color = '#e67e22';
        
        indicator.css({
            'width': `${strength}%`,
            'background-color': color,
            'transition': 'all 0.3s ease'
        });
    }

    // Form submission
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault();
        
        const isValid = [
            validateField($('#fullName'), patterns.fullName),
            validateField($('#regNumber'), patterns.regNumber),
            validateField($('#email'), patterns.email),
            validateField($('#password'), patterns.password)
        ].every(Boolean);

        if (isValid) {
            // Show success message and submit form
            showNotification('Registration successful!', 'success');
            this.reset();
        } else {
            showNotification('Please check the form for errors', 'error');
        }
    });

    function showNotification(message, type) {
        const notification = $('<div>')
            .addClass(`notification ${type}`)
            .text(message)
            .appendTo('body');

        setTimeout(() => notification.remove(), 3000);
    }
});
