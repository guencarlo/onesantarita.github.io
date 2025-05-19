<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Design HTML and CSS | CodingNepal</title>
    <!-- Font Awesome Icons -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
 }
 body {
    background: #ecececdb;
 }
 .card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    max-width: 1250px;
    margin: 150px auto;
    padding: 20px;
    gap: 20px;
 }
 .card-list .card-item {
    background: #fff;
    padding: 26px;
    border-radius: 8px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
    list-style: none;
    cursor: pointer;
    text-decoration: none;
    border: 2px solid transparent;
    transition: border 0.5s ease;
 }
 .card-list .card-item:hover {
    border: 2px solid #000;
 }
 .card-list .card-item img {
    width: 100%;
    aspect-ratio: 16/9;
    border-radius: 8px;
    object-fit: cover;
 }
 .card-list span {
    display: inline-block;
    background: #F7DFF5;
    margin-top: 32px;
    padding: 8px 15px;
    font-size: 0.75rem;
    border-radius: 50px;
    font-weight: 600;
 }
 .card-list .developer {
    background-color: #F7DFF5; 
    color: #B22485;
 }   
 .card-list .designer {
    background-color: #d1e8ff;
    color: #2968a8;
 }
 .card-list .editor {
    background-color: #d6f8d6; 
    color: #205c20;
 }
 .card-item h3 {
    color: #000;
    font-size: 1.438rem;
    margin-top: 28px;
    font-weight: 600;
 }
 .card-item .arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(-35deg);
    height: 40px;
    width: 40px;
    color: #000;
    border: 1px solid #000;
    border-radius: 50%;
    margin-top: 40px;
    transition: 0.2s ease;
 }
 .card-list .card-item:hover .arrow  {
    background: #000;
    color: #fff; 
 }
 @media (max-width: 1200px) {
    .card-list .card-item {
        padding: 15px;
    }
 }
 @media screen and (max-width: 980px) {
    .card-list {
        margin: 0 auto;
    }
 }

 /* General Reset */
 body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: url('picture/santarita.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
 } 

 .card-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
 }

 .card-item {
    position: relative;
    width: 300px;
    height: 400px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-decoration: none;
    color: #333;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
 }

 .card-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
 }

 .card-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
 }

 .card-item:hover img {
    transform: scale(1.1);
 }

 .card-item span {
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
 }

 .card-item h3 {
    margin: 20px;
    font-size: 18px;
    line-height: 1.5;
    text-align: center;
 }

 .arrow {
    position: absolute;
    bottom: 20px;
    right: 20px;
    font-size: 20px;
    color: #333;
    transition: transform 0.3s ease;
 }

 .card-item:hover .arrow {
    transform: translateX(10px);
 }

 /* Animation for card appearance */
 @keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
 }

 .card-item {
    animation: fadeIn 0.5s ease forwards;
 }   
</style>
<body>
    <div class="card-list">
        <a href="business-permit.php" class="card-item" target="_blank">
            <img src="picture/santaritalogo-removebg-preview (1).png" alt="Card Image">
            <span class="developer">GET LISTED</span>
            <h3>JOIN ONE SANTA RITA WEBSITE AND PROMOTE YOUR BUSINESS TO A WIDER AUDIENCE.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="barangay.php" class="card-item">
            <img src="picture/Orange Square Point Logo.png" alt="Card Image">
            <span class="designer">Explore Now!</span>
            <h3>EXPLORE OUR SANTA RITA MAPPING</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="https://ph.indeed.com/jobs?q=title%2C+keywords&l=city%2C+province%2C+or+zip&utm_source=publisher&utm_medium=organic_listings&utm_campaign=affiliate" class="card-item" target="_blank">
            <img src="picture/findjob.png" alt="Card Image">
            <span class="editor">JOB</span>
            <h3>Can we help you find a better JOB for you!</h3>
            <div class="arrow">
            <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <!-- New Cards -->
        <a href="#" class="card-item">
            <img src="picture/Black and Red Modern Medical Center Logo.png" alt="Card Image">
            <span class="photographer">PENDING</span>
            <h3>A "ONE HEALTH ONE CARE" WE FIND WAYS TO CARE YOU</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="picture/Mobile Tricycle Transport Logo.png" alt="Card Image">
            <span class="manager">PENDING</span>
            <h3>A "TODA" oversees projects and teams.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
            <img src="picture/ecoparkk-removebg-preview.png" alt="Card Image">
            <span class="analyst">PENDING</span>
            <h3>Visit a mobile app for Ecopark system </h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
    <!-- Back Button -->
    <button style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 30px;
        font-size: 16px;
        background-color: #ffc107;
        color: #000;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, transform 0.2s ease;
    " 
    onmouseover="this.style.backgroundColor='#e0a800'; this.style.transform='scale(1.1)';" 
    onmouseout="this.style.backgroundColor='#ffc107'; this.style.transform='scale(1)';"
    onclick="window.location.href='front.php';">
        Back
    </button>
      </a>
   </div>
   </div>
    </div>
</body>
</html>

