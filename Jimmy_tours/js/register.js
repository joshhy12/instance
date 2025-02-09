document.getElementById('region').addEventListener('change', function() {
    const regionId = this.value;
    const districtSelect = document.getElementById('district');
    
    if (regionId) {
        fetch(`handlers/fetch_districts.php?region_id=${regionId}`)
            .then(response => response.json())
            .then(districts => {
                districtSelect.innerHTML = '<option value="">Select District</option>';
                districts.forEach(district => {
                    districtSelect.innerHTML += `
                        <option value="${district.id}">${district.district_name}</option>
                    `;
                });
            });
    } else {
        districtSelect.innerHTML = '<option value="">Select District</option>';
    }
});
