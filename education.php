<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ONE SANTA RITA</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', sans-serif;
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
    }

    .school-card {
      transition: all 0.3s ease;
    }

    .school-card:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      transform: translateY(-3px);
    }

    .school-logo {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #ddd;
    }

    .school-name {
      color: #4b2e83;
      font-weight: bold;
      text-transform: uppercase;
    }

    .school-info i {
      color: #777;
      margin-right: 5px;
    }

    .social-links a {
      font-size: 1.2rem;
      margin-right: 10px;
      color: #666;
    }

    .social-links a:hover {
      color: #4b2e83;
    }
  </style>
</head>

<body>
    <!-- Search and Filter Form -->
  <form method="GET" class="row g-3 mb-4">
    <div class="col-md-6">
      <input type="text" name="search" class="form-control" placeholder="Search school name..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    </div>
    <div class="col-md-4">
      <select name="barangay" class="form-select">
        <option value="">Filter by Barangay</option>
        <?php
        // Barangay options (customize or fetch from DB if dynamic)
        $barangays = ["San Jose", "San Isidro", "San Juan", "San Agustin", "Becuran", "Dila Dila", "San Matias"];
        foreach ($barangays as $bgy) {
            $selected = (isset($_GET['barangay']) && $_GET['barangay'] === $bgy) ? 'selected' : '';
            echo "<option value=\"$bgy\" $selected>$bgy</option>";
        }
        ?>
      </select>
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100"><i class="bi bi-search"></i> Search</button>
    </div>
  </form>

  <div class="row">
    <?php
    $conn = new mysqli("localhost", "root", "", "db1");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Build SQL query with optional filters
    $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
    $barangay = isset($_GET['barangay']) ? $conn->real_escape_string($_GET['barangay']) : '';

    $sql = "SELECT name, phone, description, photo, barangay FROM schools WHERE 1=1";

    if (!empty($search)) {
        $sql .= " AND name LIKE '%$search%'";
    }

    if (!empty($barangay)) {
        $sql .= " AND barangay = '$barangay'";
    }

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-12 mb-4">
              <div class="p-3 bg-white rounded shadow-sm school-card">
                <div class="row g-3 align-items-center">
                  <div class="col-md-2 text-center">
                    <img src="uploads/' . htmlspecialchars($row["photo"]) . '" alt="' . htmlspecialchars($row["name"]) . '" class="school-logo">
                  </div>
                  <div class="col-md-10">
                    <h4 class="school-name mb-1">' . htmlspecialchars($row["name"]) . '</h4>
                    <p class="school-info mb-1"><i class="bi bi-geo-alt-fill"></i> Barangay: <strong>' . htmlspecialchars($row["barangay"]) . '</strong></p>
                    <p class="school-info mb-1"><i class="bi bi-telephone-fill"></i> <a href="tel:' . htmlspecialchars($row["phone"]) . '">' . htmlspecialchars($row["phone"]) . '</a></p>
                    <p class="school-info mb-1"><i class="bi bi-envelope-fill"></i> Email: <em>Not Provided</em></p>
                    <p class="school-info mb-2"><i class="bi bi-info-circle-fill"></i> ' . htmlspecialchars($row["description"]) . '</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-facebook"></i></a>
                      <a href="#"><i class="bi bi-globe"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
        }
    } else {
        echo '<p class="text-center">No schools found matching your filters.</p>';
    }

    $conn->close();
    ?>
  </div>
</section>

<section class="container py-5" id="menu">
  <h2 class="text-center section-title mb-4">Schools Directory</h2>
  <div class="row">
    <?php
    $conn = new mysqli("localhost", "root", "", "db1");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name, phone, description, photo FROM schools";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-12 mb-4">
              <div class="p-3 bg-white rounded shadow-sm school-card">
                <div class="row g-3 align-items-center">
                  <div class="col-md-2 text-center">
                    <img src="uploads/' . htmlspecialchars($row["photo"]) . '" alt="' . htmlspecialchars($row["name"]) . '" class="school-logo">
                  </div>
                  <div class="col-md-10">
                    <h4 class="school-name mb-1">' . htmlspecialchars($row["name"]) . '</h4>
                    <p class="school-info mb-1"><i class="bi bi-geo-alt-fill"></i> Location: <em>Not Provided</em></p>
                    <p class="school-info mb-1"><i class="bi bi-telephone-fill"></i> <a href="tel:' . htmlspecialchars($row["phone"]) . '">' . htmlspecialchars($row["phone"]) . '</a></p>
                    <p class="school-info mb-1"><i class="bi bi-envelope-fill"></i> Email: <em>Not Provided</em></p>
                    <p class="school-info mb-2"><i class="bi bi-info-circle-fill"></i> ' . htmlspecialchars($row["description"]) . '</p>
                    <div class="social-links">
                      <a href="#"><i class="bi bi-facebook"></i></a>
                      <a href="#"><i class="bi bi-globe"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
        }
    } else {
        echo '<p class="text-center">No schools found.</p>';
    }

    $conn->close();
    ?>
  </div>
</section>

<!-- Bootstrap JS (optional for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
