$(document).ready(function () {
    const citiesByState = {
        "Maharashtra": [
            "Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad",
            "Solapur", "Amravati", "Kolhapur", "Sangli", "Satara"
        ],
        "Karnataka": [
            "Bangalore", "Mysore", "Hubli", "Belgaum", "Mangalore",
            "Gulbarga", "Davanagere", "Shimoga", "Bellary", "Tumkur"
        ],
        "Gujarat": [
            "Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar",
            "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Bharuch"
        ]
    };

    const form = $("#myForm");
    const stateSelect = $("#state");
    const citySelect = $("#city");

    function populateCitySelect(cities) {
        citySelect.empty().append("<option value=''>Select City</option>");
        $.each(cities, function (index, city) {
            citySelect.append("<option value='" + city + "'>" + city + "</option>");
        });
    }

    stateSelect.on("change", function () {
        const selectedState = stateSelect.val();
        const cities = citiesByState[selectedState] || [];
        populateCitySelect(cities);
    });

    form.on("submit", function (event) {
        if (!form[0].checkValidity()) {
            event.preventDefault();
            alert("Please fill in all required fields correctly.");
        } else {
            // Send the form data to the server-side script
            const apiUrl = "http://localhost/submit-form.php";



         
        }
    });
});

