<div class="py-4 border-bottom">
    <div class="pb-1 mb-3 nav flex-nowrap align-items-center justify-content-between">
        <div class="gap-3 d-flex align-items-center me-4">
            @if ($address->is_primary)
                <h2 class="mb-0 h6">Shipping address</h2>
                <span class="badge text-bg-info rounded-pill">Primary</span>
            @else
                <h2 class="mb-0 h6">Alternative Address</h2>
            @endif
        </div>
        <a class="p-0 nav-link hiding-collapse-toggle text-decoration-underline collapsed" href=".primary-address"
            data-bs-toggle="collapse" aria-expanded="false"
            aria-controls="primaryAddressPreview primaryAddressEdit">Edit</a>
    </div>
    <div class="collapse primary-address show" id="primaryAddressPreview">
        <ul class="m-0 list-unstyled fs-sm">
            <li>{{ $address->city }} {{ $address->zip_code }}, {{ $address->country }}</li>
            <li>{{ $address->curr_address }}</li>
        </ul>
    </div>
    <div class="collapse primary-address" id="primaryAddressEdit">
        <form class="row g-3 g-sm-4 needs-validation" novalidate="">
            <div class="col-sm-6">
                <div class="position-relative">
                    <label class="form-label">Country</label>
                    <select class="form-select" aria-label="Select country" required id="country-select">
                        <option value="">Select country...</option>
                    </select>
                    <div class="invalid-feedback">Please select your country!</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="position-relative">
                    <label class="form-label">City</label>
                    <select class="form-select" id="city-select" aria-label="Select city" required>
                        <option value="">Select city...</option>
                    </select>
                    <div class="invalid-feedback">Please select your city!</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="position-relative">
                    <label for="psa-zip" class="form-label">ZIP code</label>
                    <input type="text" class="form-control" id="psa-zip" value="11741" required>
                    <div class="invalid-feedback">Please enter your ZIP code!</div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="position-relative">
                    <label for="psa-address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="psa-address" value="396 Lillian Bolavandy, Holbrook"
                        required>
                    <div class="invalid-feedback">Please enter your address!</div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-0 form-check">
                    <input type="checkbox" class="form-check-input" id="set-primary-1" checked="">
                    <label for="set-primary-1" class="form-check-label">Set as primary
                        address</label>
                </div>
            </div>
            <div class="col-12">
                <div class="gap-3 pt-2 d-flex pt-sm-0">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="collapse"
                        data-bs-target=".primary-address" aria-expanded="true"
                        aria-controls="primaryAddressPreview primaryAddressEdit">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    const countrySelect = document.getElementById('country-select');
    const citySelect = document.getElementById('city-select');

    let countryCities = {};

    async function fetchCitiesForCountry(countryCode) {

        try {
            const response = await fetch(`https://restcountries.com/v3.1/alpha/${countryCode}`);
            const data = await response.json();
            console.log('response', data);

            if (!data[0]) {
                throw new Error('Country not found');
            }

            countryCities[countryCode] = data[0].name.common.split(',').slice(0, -1).join(', ');

            return countryCities[countryCode];
        } catch (error) {
            console.error('Error fetching cities:', error.message);
            return [];
        }
    }

    async function populateCityDropdown(selectedCountry) {
        const cities = await fetchCitiesForCountry(selectedCountry);
        citySelect.innerHTML = '';

        cities.forEach(city => {
            const option = document.createElement('option');
            option.value = city;
            option.textContent = city;
            citySelect.appendChild(option);
        });
    }

    countrySelect.addEventListener('change', () => {
        const selectedCountry = countrySelect.value;
        populateCityDropdown(selectedCountry);
    });

    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(countries => {
            countries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.cca2;
                option.textContent = country.name.common;
                countrySelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error loading countries:', error));
</script>
