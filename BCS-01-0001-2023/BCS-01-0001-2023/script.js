$(document).ready(function() {
  console.log("Script loaded successfully!");

    // Load regions dynamically
    $.getJSON("regions.json", function (data) {
      console.log("Regions JSON loaded:", data);

      $.each(data.regions, function (key, region) {
        $("#region").append(`<option value="${region.name}">${region.name}</option>`);
      });
    });
      
    
      // Load districts based on selected region
      $("region").on("change", function() {
        let selectedRegion=$(this).val();
        $("#district").empty().append('<option value="">Selected District</option>');
        $.getJSON("regions.json", function (data) {
          let regionData = data.regions.find(region => region.name === selectedRegion);
          if (regionData) {
            $.each(regionData.districts, function (index, district) {
              $("#district").append(`<option value="${district}">${district}</option>`);
            });
          }
        });
      });
      // Validate registration number format
      function isValidRegNumber(regNum) {
        return /BCS-\d{2}-\d{4}-\d{4}$/.test(regNum);
      }
    
    $(document).ready(function () {
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let slides = $(".slide");
        let dots = $(".dot");

        slides.hide();
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }

        slides.eq(slideIndex - 1).fadeIn(800);
        dots.removeClass("active");
        dots.eq(slideIndex - 1).addClass("active");

        setTimeout(showSlides, 3000);
      }
      $(".dot").click(function () {
        let dotIndex = $(".dot").index(this);
        slideIndex = dotIndex;
        showSlides();
      });
    });
    // Form Submisiion
    $("#registrationform").on("submit", function (e) {
      e.preventDefault();
  
      let regNumber = $("#reg_number").val();
      if (isValidRegNumber(regNumber)) {
        alert ("Invalid registration Number! Use format: BCS-00-0000-0000");
        return;
      }
      let userData = {
        full_name: $("#full_name").val(),
        reg_number: regNumber,
        sex: $("#sex").val(),
        email: $("#email").val(),
        region: $("#region").val(),
        district: $("#district").val(),
        password: $("#password").val()
      };
      $.ajax({
        url: "http://127.0.0.1:5000/register",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify(userData),
        success: function (response) {
          alert(response.message);
          window.location.href="http://127.0.0.1:5000/users";
        },
        error: function (xhr) {
          alert("Error: " + xhr.responseJSON.error);
        }
      });
    });
    
      // Validate password criteria
      $('#registrationForm').on('submit', function(event) {
        event.preventDefault();
        const password = $('#password').val();
        const confirmPassword = $('#confirmPassword').val();
        if (password.length < 8 || !/[!@#$%^&*]/.test(password)) {
          alert('Password must be at least 8 characters long and contain special characters');
          return;
        }
        if (password !== confirmPassword) {
          alert('Passwords do not match');
          return;
        }
        alert('User registered successfully!');
      });
    });
    