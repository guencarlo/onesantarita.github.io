<section class="menu-section" id="menu">
    <h2 class="section-title">AUTOMOTIVE SERVICES</h2>
    <div class="section-content">
        <div class="menu-row">
            <ul class="menu-list">

                <!-- Rhein Auto Services -->
                <li class="menu-item">
                    <img src="picture/automotive1.jpg" alt="Rhein Auto Services" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Rhein Auto Services</h3>
                        <p class="description">Expert car maintenance and repair services.</p>
                        <p class="contact">Zone 7, Pipitik, Dila-Dila, Santa Rita, Pampanga</p>
                        <a href="https://www.facebook.com/Mranyhaw" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=Zone+7,+Pipitik,+Dila-Dila,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- LEO's Auto Repair Shop -->
                <li class="menu-item">
                    <img src="picture/automotive2.jpg" alt="LEO's Auto Repair Shop" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">LEO's Auto Repair Shop</h3>
                        <p class="description">Comprehensive auto repair solutions.</p>
                        <p class="contact">397 Provincial Rd, Santa Rita, Pampanga</p>
                        <a href="https://www.facebook.com/p/LEOs-Auto-Repair-Shop-100063769246621/" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=397+Provincial+Rd,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- DLDC Auto Care Center -->
                <li class="menu-item">
                    <img src="picture/automotive3.jpg" alt="DLDC Auto Care Center" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">DLDC Auto Care Center</h3>
                        <p class="description">Automotive care and maintenance.</p>
                        <p class="contact">Zone 7, Pipitik, Dila-Dila, Santa Rita, Pampanga</p>
                        <a href="https://www.facebook.com/DLDCautocare/videos/-zone-7-pipitik-diladila-sta-rita/146791526966446/" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=Zone+7,+Pipitik,+Dila-Dila,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Big Jay Auto Repair Shop -->
                <li class="menu-item">
                    <img src="picture/automotive4.jpg" alt="Big Jay Auto Repair Shop" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Big Jay Auto Repair Shop</h3>
                        <p class="description">Auto repair and maintenance services.</p>
                        <p class="contact">172 A. Fausto, Santa Ana, Pampanga</p>
                        <a href="https://www.facebook.com/Big-Jay-Auto-Repair-Shop-100218568064917" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=172+A.+Fausto,+Santa+Ana,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>

    <div class="back-button-container">
        <button onclick="window.location.href='front.php'" class="back-button">Back</button>
    </div>
</section>
<button style="
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 15px 30px;
        font-size: 16px;
        background: linear-gradient(45deg, #ffc107, #ff5722);
        color: #fff;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 0 10px rgba(255, 87, 34, 0.5);
        transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    " 
    onmouseover="this.style.background='linear-gradient(45deg, #e0a800, #d84315)'; this.style.transform='scale(1.1)'; this.style.boxShadow='0 6px 8px rgba(0, 0, 0, 0.15), 0 0 15px rgba(216, 67, 21, 0.7)';" 
    onmouseout="this.style.background='linear-gradient(45deg, #ffc107, #ff5722)'; this.style.transform='scale(1)'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1), 0 0 10px rgba(255, 87, 34, 0.5)';"
    onclick="window.location.href='front.php';">
        Back
    </button>



<style>
.menu-section {
    text-align: center;
    padding: 20px;
    background-color: #f9f9f9;
}

.menu-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 20px;
}

.menu-item {
    width: 220px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    padding: 15px;
}

.menu-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.menu-image {
    width: 100%;
    height: 150px;
    object-fit: contain;
    border-radius: 10px;
}

.menu-details {
    margin-top: 10px;
}

.name {
    font-size: 16px;
    font-weight: bold;
}

.description, .contact {
    font-size: 14px;
    margin: 5px 0;
}

.back-button-container {
    margin-top: 20px;
}

.back-button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #0056b3;
}
</style>
