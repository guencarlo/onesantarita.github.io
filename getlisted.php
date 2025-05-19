<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Details Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffcc4d;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2 {
            color: #4A148C;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            background-color: #4A148C;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
        }
        .submit-btn:hover {
            background-color: #6A1B9A;
        }
        .flex-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .flex-container input {
            flex: 1;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Business Details</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="business_name" placeholder="Business Name" required>
        <input type="text" name="branch_name" placeholder="Branch Name (Optional)">
        <input type="text" name="nature_of_business" placeholder="Nature of Business" required>
        <textarea name="description" placeholder="Description" rows="4"></textarea>

        <label>Location</label>
        <select name="province">
            <option value="Pampanga">Pampanga</option>
        </select>
        <select name="municipality">
            <option value="">Select Municipality</option>
            <option value="Santa Rita">Santa Rita</option>
        </select>
        <select name="barangay">
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

        <!-- Contact Information -->
        <div class="flex-container">
            <input type="text" name="contact_person" placeholder="Contact Person" required>
            <input type="text" name="telephone_number" placeholder="Telephone Number">
            <input type="text" name="mobile_number" placeholder="Mobile Number" required>
        </div>

        <div class="flex-container">
            <input type="email" name="business_email" placeholder="Business Email Address" required>
            <input type="url" name="business_website" placeholder="Business Website (Optional)">
        </div>

        <!-- Social Media Links -->
        <div class="flex-container">
            <input type="url" name="facebook_link" placeholder="Facebook Link">
            <input type="text" name="twitter_username" placeholder="Twitter Username">
            <input type="text" name="instagram_username" placeholder="Instagram Username">
        </div>

        <button type="submit" class="submit-btn">Submit</button>
        <button type="button" class="submit-btn" onclick="window.location.href='front.php';">Back</button>
    </form>
</div>
</body> 
</html>
