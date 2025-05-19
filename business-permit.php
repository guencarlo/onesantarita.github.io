<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>GET LISTED</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('picture/santarita.jpg');
      background-size: cover;
      background-position: center;
      padding: 20px;
    }
    .card {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .map-container {
      height: 100%;
      min-height: 550px;
      border-radius: 10px;
      overflow: hidden;
    }
    iframe {
      width: 100%;
      height: 100%;
      border: none;
      filter: brightness(95%);
    }
  </style>
</head>
<body>

<div class="container bg-white p-4 rounded shadow-lg">
  <h2 class="text-center text-primary fw-bold">GET LISTED</h2>
  <p class="text-center text-muted mb-4">Fill out the form below to register your business and get listed in our official directory.</p>

  <!-- Success message -->
  <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
    <div class="alert alert-success">Your business has been successfully submitted!</div>
  <?php endif; ?>

  <div class="row">
    <!-- Form Column -->
    <div class="col-md-6">
      <div class="card p-4">
        <h4 class="text-primary mb-3">BUSINESS DETAILS</h4>
        <form action="process-permit.php" method="POST" enctype="multipart/form-data" onsubmit="return validateLocation()">
          <input type="text" name="owner_name" class="form-control mb-3" placeholder="Owner's Full Name" required>
          <input type="text" name="business_name" class="form-control mb-3" placeholder="Business Name" required>
          <input type="text" name="business_address" class="form-control mb-3" placeholder="Business Address" required>
          <textarea name="business_description" class="form-control mb-3" placeholder="Business Description" rows="3" required></textarea>

          <fieldset class="mb-3">
            <legend class="fs-6">Select Location Type</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="locationType" id="chooseBarangay" value="barangay" checked>
              <label class="form-check-label" for="chooseBarangay">Barangay</label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="locationType" id="chooseStreet" value="street">
              <label class="form-check-label" for="chooseStreet">Street</label>
            </div>

            <div id="barangaySelect" class="mb-2">
              <select id="barangayDropdown" class="form-select">
                <option value="">Select Barangay</option>
                <option value="San Agustin">San Agustin</option>
                <option value="San Basilio">San Basilio</option>
                <option value="San Isidro">San Isidro</option>
                <option value="San Jose">San Jose</option>
                <option value="San Juan">San Juan</option>
                <option value="San Matias">San Matias</option>
                <option value="San Vicente">San Vicente</option>
                <option value="Santa Monica">Santa Monica</option>
                <option value="Dila Dila">Dila Dila</option>
              </select>
            </div>

            <div id="streetInput" class="mb-2 d-none">
              <input type="text" id="streetText" class="form-control" placeholder="Enter Street Name">
            </div>

            <input type="hidden" name="selected_location" id="selectedLocationInput">

            <button type="button" class="btn btn-outline-primary w-100 mb-2" onclick="addLocation()">Add Location</button>

            <div class="bg-light p-3 rounded border">
              <strong>Selected Location:</strong>
              <div id="locationOutput" class="mt-1 text-success">None selected</div>
            </div>
          </fieldset>

          <div class="row mb-3">
            <div class="col">
              <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" required>
            </div>
            <div class="col">
              <input type="text" name="telephone_number" class="form-control" placeholder="Telephone Number">
            </div>
            <div class="col">
              <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" required>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <input type="email" name="business_email" class="form-control" placeholder="Business Email" required>
            </div>
            <div class="col">
              <input type="url" name="business_website" class="form-control" placeholder="Business Website (Optional)">
            </div>
          </div>

          </select>

          <input type="file" name="supporting_documents" class="form-control mb-2" required>
          <small class="text-muted mb-3 d-block">Upload supporting documents (e.g., valid ID, proof of ownership)</small>

          <div class="g-recaptcha mb-3" data-sitekey="YOUR_SITE_KEY"></div>

          <button type="submit" class="btn btn-primary w-100 mb-2">REGISTER</button>
          <button type="button" class="btn btn-secondary w-100" onclick="window.location.href='card.php';">Back</button>
        </form>
      </div>
    </div>

    <!-- Map Column -->
    <div class="col-md-6 mt-4 mt-md-0">
      <div class="map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.2290622265973!2d120.61282897509118!3d14.997241785847601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f5c49f0a87e3%3A0x91b0a8b6df4dc16f!2sSanta%20Rita%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1683095556619!5m2!1sen!2sph" 
          allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</div>

<script>
  const barangayRadio = document.getElementById('chooseBarangay');
  const streetRadio = document.getElementById('chooseStreet');
  const barangaySelect = document.getElementById('barangaySelect');
  const streetInput = document.getElementById('streetInput');
  const locationOutput = document.getElementById('locationOutput');
  const selectedLocationInput = document.getElementById('selectedLocationInput');

  barangayRadio.addEventListener('change', toggleLocationInput);
  streetRadio.addEventListener('change', toggleLocationInput);

  function toggleLocationInput() {
    if (barangayRadio.checked) {
      barangaySelect.classList.remove('d-none');
      streetInput.classList.add('d-none');
    } else {
      barangaySelect.classList.add('d-none');
      streetInput.classList.remove('d-none');
    }
  }

  function addLocation() {
    let selectedValue = "";
    if (barangayRadio.checked) {
      selectedValue = document.getElementById('barangayDropdown').value;
    } else {
      selectedValue = document.getElementById('streetText').value.trim();
    }

    if (selectedValue) {
      locationOutput.innerText = selectedValue;
      selectedLocationInput.value = selectedValue;
    } else {
      locationOutput.innerText = "None selected";
      selectedLocationInput.value = "";
      alert("Please select a barangay or enter a street.");
    }
  }

  function validateLocation() {
    if (!selectedLocationInput.value) {
      alert("Please add a location before submitting.");
      return false;
    }
    return true;
  }
</script>

</body>
</html>
