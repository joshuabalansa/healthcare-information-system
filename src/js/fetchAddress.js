function fetchProvincesData() {

  const apiEndpoint = "https://psgc.gitlab.io/api/provinces/";

  fetch(apiEndpoint)
    .then(response => {

      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.statusText}`);
      }

      return response.json();
    })
    .then(data => {

      const selectElement = document.getElementById('provincesSelect');


      data.forEach(province => {
        const option = document.createElement('option');
        option.value = `${province.code}-${province.name.toLowerCase().replace(/ /g, "_")}`;
        option.textContent = province.name;
        selectElement.appendChild(option);
      });

      // const option = document.createElement('option');
      // option.value = "064500000-negros_occidental";
      // option.textContent = "Negros Occidental";
      // selectElement.appendChild(option);
      
      selectElement.addEventListener('change', event => {
        const selectedValue = event.target.value;
        if (selectedValue) {
          const provinceCode = selectedValue.split('-')[0];
          fetchCitiesData(provinceCode);
        } else {
          clearCitiesSelect();
          clearBarangaysSelect();
        }
      });
    })
    .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
    });
}

/**
 * @param {string} provinceCode
 */
function fetchCitiesData(provinceCode) {
  const apiEndpoint = `https://psgc.gitlab.io/api/provinces/${provinceCode}/cities/`;

  fetch(apiEndpoint)
    .then(response => {

      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.statusText}`);
      }

      return response.json();
    })
    .then(data => {

      const selectElement = document.getElementById('citiesSelect');

      clearCitiesSelect();
      clearBarangaysSelect();

      data.forEach(city => {
        const option = document.createElement('option');
        option.value = `${city.code}-${city.name.toLowerCase().replace(/ /g, "_")}`;
        option.textContent = city.name;
        selectElement.appendChild(option);
      });

      selectElement.addEventListener('change', event => {
        const cityCode = event.target.value.split('-')[0];
        if (cityCode) {

          fetchBarangaysData(cityCode);

        } else {

          clearBarangaysSelect();
        }
      });
    })
    .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
    });
}

/**
 * @param {string} cityCode 
 */
function fetchBarangaysData(cityCode) {
  const apiEndpoint = `https://psgc.gitlab.io/api/cities/${cityCode}/barangays/`;

  fetch(apiEndpoint)
    .then(response => {
      if (!response.ok) {
        throw new Error(`Network response was not ok: ${response.statusText}`);
      }
      return response.json();
    })
    .then(data => {

      const selectElement = document.getElementById('barangaysSelect');

      clearBarangaysSelect();

      data.forEach(barangay => {
        const option = document.createElement('option');
        option.value = `${barangay.code}-${barangay.name.toLowerCase().replace(/ /g, "_")}`;
        option.textContent = barangay.name;
        selectElement.appendChild(option);
      });
    })
    .catch(error => {

      console.error('There was a problem with the fetch operation:', error);
    });
}

function clearCitiesSelect() {
  const selectElement = document.getElementById('citiesSelect');
  selectElement.innerHTML = '<option value="">-- Select a City --</option>';
}


function clearBarangaysSelect() {
  const selectElement = document.getElementById('barangaysSelect');
  selectElement.innerHTML = '<option value="">-- Select a Barangay --</option>';
}

fetchProvincesData();
