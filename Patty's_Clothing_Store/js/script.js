document.addEventListener("DOMcontentLoaded", function(){
document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission if validation fails

    let fullName = document.getElementById("fullName").value;
    let regNumber = document.getElementById("regNumber").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    let nameRegex = /^[A-Za-z\s]+$/;
    let regRegex = /^BCS-\d{2}-\d{4}-\d{4}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (!nameRegex.test(fullName)) {
        alert("Invalid Full Name");
        return;
    }
    if (!regRegex.test(regNumber)) {
        alert("Invalid Registration Number. Format: BCS-00-0000-0000");
        return;
    }
    if (!emailRegex.test(email)) {
        alert("Invalid Email Format");
        return;
    }
    if (!passwordRegex.test(password)) {
        alert("Password must be at least 8 characters, include a number and a special character.");
        return;
    }
    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return;
    }

    alert("Registration Successful!");
});

console.log("script.js is loaded!");

$(document).ready(function() {
    // Define region and district data
    let regions = {
"Tanzania": {
"Dodoma": ["Bahi", "Chamwino", "Dodoma Urban"],
"Arusha": ["Arusha City", "Arumeru", "Karatu"]
        },
"Kenya": {
"Nairobi": ["Westlands", "Kasarani", "Embakasi"],
"Mombasa": ["Nyali", "Likoni", "Changamwe"]
        }
    };

    // Reference to dropdown elements
    let regionDropdown = $("#region");
    let districtDropdown = $("#district");

    // Populate region dropdown dynamically
    $.each(regions, function(country, regionData) {
        $.each(regionData, function(region) {
            regionDropdown.append(`<option value="${region}">${region}</option>`);
        });
    });

    // Event listener for region selection
    regionDropdown.change(function() {
        let selectedRegion = $(this).val(); // Get selected region
        districtDropdown.empty(); // Clear previous options
        districtDropdown.append('<option value="">Select District</option>');

        // Populate district dropdown based on selected region
        $.each(regions, function(country, regionData) {
            if (regionData[selectedRegion]) {
                regionData[selectedRegion].forEach(district => {
                    districtDropdown.append(`<option value="${district}">${district}</option>`);
                });
            }
        });

    });
   $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true
   });
});

$('a[href*="#"]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top
    }, 500);
});
});

