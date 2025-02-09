// Define regions and their districts
const regionDistricts = {
    'Arusha': ['Arusha City', 'Arusha DC', 'Karatu', 'Longido', 'Monduli', 'Ngorongoro'],
    'Dar es Salaam': ['Ilala', 'Kinondoni', 'Temeke', 'Kigamboni', 'Ubungo'],
    'Dodoma': ['Dodoma City', 'Bahi', 'Chamwino', 'Kondoa', 'Mpwapwa'],
    'Geita': ['Geita', 'Bukombe', 'Chato', 'Mbogwe', 'Nyang\'hwale'],
    'Iringa': ['Iringa Urban', 'Iringa Rural', 'Kilolo', 'Mufindi'],
    'Kagera': ['Bukoba Urban', 'Bukoba Rural', 'Karagwe', 'Kyerwa', 'Missenyi', 'Muleba', 'Ngara'],
    'Katavi': ['Mpanda', 'Mlele', 'Tanganyika'],
    'Kigoma': ['Kigoma-Ujiji', 'Buhigwe', 'Kakonko', 'Kasulu', 'Kibondo', 'Uvinza'],
    'Kilimanjaro': ['Moshi Municipal', 'Hai', 'Mwanga', 'Rombo', 'Same', 'Siha'],
    'Lindi': ['Lindi Municipal', 'Kilwa', 'Lindi Rural', 'Liwale', 'Nachingwea', 'Ruangwa'],
    'Manyara': ['Babati', 'Hanang', 'Kiteto', 'Mbulu', 'Simanjiro'],
    'Mara': ['Musoma Municipal', 'Bunda', 'Butiama', 'Rorya', 'Serengeti', 'Tarime'],
    'Mbeya': ['Mbeya City', 'Busokelo', 'Chunya', 'Kyela', 'Mbarali', 'Rungwe'],
    'Morogoro': ['Morogoro Municipal', 'Gairo', 'Kilombero', 'Kilosa', 'Mvomero', 'Ulanga'],
    'Mtwara': ['Mtwara Municipal', 'Masasi', 'Nanyumbu', 'Newala', 'Tandahimba'],
    'Mwanza': ['Ilemela', 'Nyamagana', 'Kwimba', 'Magu', 'Misungwi', 'Sengerema', 'Ukerewe'],
    'Njombe': ['Njombe Town', 'Ludewa', 'Makete', 'Wanging\'ombe'],
    'Pwani': ['Kibaha', 'Bagamoyo', 'Kisarawe', 'Mafia', 'Mkuranga', 'Rufiji'],
    'Rukwa': ['Sumbawanga Municipal', 'Kalambo', 'Nkasi', 'Sumbawanga Rural'],
    'Ruvuma': ['Songea Municipal', 'Mbinga', 'Namtumbo', 'Nyasa', 'Tunduru'],
    'Shinyanga': ['Shinyanga Municipal', 'Kahama', 'Kishapu', 'Shinyanga Rural'],
    'Simiyu': ['Bariadi', 'Busega', 'Itilima', 'Maswa', 'Meatu'],
    'Singida': ['Singida Municipal', 'Ikungi', 'Iramba', 'Manyoni', 'Mkalama'],
    'Songwe': ['Ileje', 'Mbozi', 'Momba', 'Songwe'],
    'Tabora': ['Tabora Municipal', 'Igunga', 'Kaliua', 'Nzega', 'Sikonge', 'Urambo', 'Uyui'],
    'Tanga': ['Tanga City', 'Handeni', 'Kilindi', 'Korogwe', 'Lushoto', 'Muheza', 'Pangani'],
    'Zanzibar North': ['Kaskazini A', 'Kaskazini B'],
    'Zanzibar South': ['Kusini', 'Kati'],
    'Zanzibar West': ['Mjini', 'Magharibi'],
    'Pemba North': ['Wete', 'Micheweni'],
    'Pemba South': ['Chake Chake', 'Mkoani']
};

document.addEventListener('DOMContentLoaded', function() {
    const regionSelect = document.getElementById('region');
    const districtSelect = document.getElementById('district');

    // Populate regions dropdown
    for (let region in regionDistricts) {
        const option = document.createElement('option');
        option.value = region;
        option.textContent = region;
        regionSelect.appendChild(option);
    }

    // Handle region selection change
    regionSelect.addEventListener('change', function() {
        const selectedRegion = this.value;
        districtSelect.innerHTML = '<option value="">Select District</option>';
        
        if (selectedRegion) {
            regionDistricts[selectedRegion].forEach(district => {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
            districtSelect.disabled = false;
        } else {
            districtSelect.disabled = true;
        }
    });

    // Handle form submission
    const registrationForm = document.getElementById('registrationForm');
    registrationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch('handlers/register.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Registration successful!');
                registrationForm.reset();
            } else {
                alert('Registration failed: ' + data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred during registration');
        });
    });
});
