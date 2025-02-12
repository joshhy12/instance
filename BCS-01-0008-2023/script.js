$(document).ready(function() {
    // Data for regions and districts in Tanzania
    const regionsAndDistricts = {
      'Arusha': ['Arusha', 'Arumeru', 'Karatu', 'Longido', 'Monduli', 'Ngorongoro'],
      'Dar es Salaam': ['Ilala', 'Kinondoni', 'Temeke', 'Kigamboni', 'Ubungo'],
      'Dodoma': ['Bahi', 'Chamwino', 'Chemba', 'Dodoma', 'Kondoa', 'Kongwa', 'Mpwapwa'],
      'Kilimanjaro': ['Hai', 'Moshi Rural', 'Moshi Urban', 'Mwanga', 'Rombo', 'Same', 'Siha'],
      'Mwanza': ['Ilemela', 'Kwimba', 'Magu', 'Misungwi', 'Nyamagana', 'Sengerema', 'Ukerewe'],
      'Mbeya': ['Chunya', 'Mbeya Rural', 'Mbeya Urban', 'Kyela', 'Mbarali', 'Rungwe', 'Busokelo'],
      'Morogoro': ['Gairo', 'Kilosa', 'Kilombero', 'Morogoro Rural', 'Morogoro Urban', 'Mvomero', 'Ulanga'],
      'Tanga': ['Handeni', 'Kilindi', 'Korogwe', 'Lushoto', 'Muheza', 'Mkinga', 'Pangani', 'Tanga City'],
      'Zanzibar': ['Chake Chake', 'Kaskazini A', 'Kaskazini B', 'Mjini', 'Magharibi', 'Mkoani', 'Wete'],
      // Add more regions and districts as needed
    };
  
    // Populate the regions dropdown
    for (const region in regionsAndDistricts) {
      $('#region').append(`<option value="${region}">${region}</option>`);
    }
  
    // Event listener for region change
    $('#region').on('change', function() {
      const selectedRegion = $(this).val();
      $('#district').empty().append('<option value="">Select District</option>'); // Clear previous options
  
      if (regionsAndDistricts[selectedRegion]) {
        regionsAndDistricts[selectedRegion].forEach(district => {
          $('#district').append(`<option value="${district}">${district}</option>`);
        });
      }
    });
  
    // Validate registration number format
    $('#regnumber').on('input', function() {
      const regnumberPattern = /^BCS-\d{2}-\d{4}-\d{4}$/;
      if (!regnumberPattern.test($(this).val())) {
        alert('Registration number must be in the format BCS-00-0000-0000');
      }
    });
  
    // Validate email format
    $('#email').on('input', function() {
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test($(this).val())) {
        alert('Please enter a valid email address');
      }
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
  