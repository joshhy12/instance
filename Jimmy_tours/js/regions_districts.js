$(document).ready(function() {
    // Load regions on page load
    $.ajax({
        url: 'handlers/get_locations.php',
        method: 'GET',
        data: { action: 'getRegions' },
        success: function(response) {
            const regions = JSON.parse(response);
            let options = '<option value="">Select a region</option>';
            regions.forEach(region => {
                options += `<option value="${region.id}">${region.region_name}</option>`;
            });
            $('#region').html(options);
        }
    });

    // Load districts when region is selected
    $('#region').on('change', function() {
        const regionId = $(this).val();
        if (regionId) {
            $.ajax({
                url: 'handlers/get_locations.php',
                method: 'GET',
                data: { 
                    action: 'getDistricts',
                    regionId: regionId
                },
                success: function(response) {
                    const districts = JSON.parse(response);
                    let options = '<option value="">Select a district</option>';
                    districts.forEach(district => {
                        options += `<option value="${district.id}">${district.district_name}</option>`;
                    });
                    $('#district').html(options).prop('disabled', false);
                }
            });
        } else {
            $('#district').html('<option value="">Select a district</option>').prop('disabled', true);
        }
    });
});