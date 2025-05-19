<section class="menu-section" id="menu">
    <h2 class="section-title">GAS STATIONS IN SANTA RITA</h2>
    <div class="section-content">
        <div class="menu-row">
            <ul class="menu-list">

                <!-- Petron Gas Station -->
                <li class="menu-item">
                    <img src="images/petron.jpg" alt="Petron Gas Station" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Petron Gas Station</h3>
                        <p class="description">Reliable fuel station offering high-quality fuel.</p>
                        <p class="contact">Barangay San Vicente, Santa Rita, Pampanga</p>
                        <a href="https://www.google.com/maps?q=Petron+Gas+Station,+San+Vicente,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Shell Gas Station -->
                <li class="menu-item">
                    <img src="images/shell.jpg" alt="Shell Gas Station" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Shell Gas Station</h3>
                        <p class="description">A trusted fuel provider with convenience store and car wash services.</p>
                        <p class="contact">Barangay Dolores, Santa Rita, Pampanga</p>
                        <a href="https://www.google.com/maps?q=Shell+Gas+Station,+Dolores,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Caltex Gas Station -->
                <li class="menu-item">
                    <img src="images/caltex.jpg" alt="Caltex Gas Station" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Caltex Gas Station</h3>
                        <p class="description">Fuel station offering premium fuels and services.</p>
                        <p class="contact">Guagua-Santa Rita-Porac Road, Santa Rita, Pampanga</p>
                        <a href="https://www.google.com/maps?q=Caltex+Gas+Station,+Guagua-Santa+Rita-Porac+Road,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Total Gas Station -->
                <li class="menu-item">
                    <img src="images/total.jpg" alt="Total Gas Station" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Total Gas Station</h3>
                        <p class="description">A reliable station for fuel and car maintenance services.</p>
                        <p class="contact">Santa Rita Town Center, Santa Rita, Pampanga</p>
                        <a href="https://www.google.com/maps?q=Total+Gas+Station,+Santa+Rita+Town+Center,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Seaoil Gas Station -->
                <li class="menu-item">
                    <img src="images/seaoil.jpg" alt="Seaoil Gas Station" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Seaoil Gas Station</h3>
                        <p class="description">Fuel station offering a variety of fuel types and additional services.</p>
                        <p class="contact">Barangay San Isidro, Santa Rita, Pampanga</p>
                        <a href="https://www.google.com/maps?q=Seaoil+Gas+Station,+San+Isidro,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

            </ul>
        </div>
    </div>

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

</section>

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

