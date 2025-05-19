<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'Database.php'; // Make sure this file sets $connection

    // Use isset() for compatibility with older PHP versions
    $owner = isset($_POST['owner_name']) ? $_POST['owner_name'] : '';
    $business = isset($_POST['business_name']) ? $_POST['business_name'] : '';
    $address = isset($_POST['business_address']) ? $_POST['business_address'] : '';
    $description = isset($_POST['business_description']) ? $_POST['business_description'] : '';
    $location = isset($_POST['selected_location']) ? $_POST['selected_location'] : '';
    $contact_person = isset($_POST['contact_person']) ? $_POST['contact_person'] : '';
    $tel = isset($_POST['telephone_number']) ? $_POST['telephone_number'] : '';
    $mobile = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';
    $email = isset($_POST['business_email']) ? $_POST['business_email'] : '';
    $website = isset($_POST['business_website']) ? $_POST['business_website'] : '';
    $permit_type = isset($_POST['permit_type']) ? $_POST['permit_type'] : 'N/A';

    // File upload
    $document = isset($_FILES['supporting_documents']['name']) ? $_FILES['supporting_documents']['name'] : '';
    $uploadDir = __DIR__ . "/uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $target = $uploadDir . basename($document);
    if (!move_uploaded_file($_FILES['supporting_documents']['tmp_name'], $target)) {
        echo "Error: File upload failed.";
        exit();
    }

    // Use prepared statement
    $stmt = $connection->prepare("INSERT INTO businesses 
        (owner_name, business_name, business_address, business_description, location, contact_person, telephone_number, mobile_number, business_email, business_website, permit_type, document) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssss", 
        $owner, $business, $address, $description, $location,
        $contact_person, $tel, $mobile, $email, $website, $permit_type, $document
    );

    if ($stmt->execute()) {
        header("Location: success.php");
        exit();
    } else {
        echo "Database Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}
?>
