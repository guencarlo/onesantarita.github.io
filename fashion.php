<section class="menu-section" id="fashion-shopping">
    <h2 class="section-title">FASHION & SHOPPING</h2>
    <div class="section-content">
        <div class="menu-row">
            <ul class="menu-list">
                <!-- Sunshine Apparel -->
                <li class="menu-item">
                    <img src="images/sunshine_apparel.jpg" alt="Sunshine Apparel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Sunshine Apparel</h3>
                        <p class="description">Trendy and affordable clothing for men and women.</p>
                        <p class="contact">Located in Poblacion, Santa Rita</p>
                        <a href="https://www.facebook.com/sunshineapparelsantarita" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=Poblacion,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>
                
                <!-- Santa Rita Mini Mall -->
                <li class="menu-item">
                    <img src="images/mini_mall.jpg" alt="Santa Rita Mini Mall" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Santa Rita Mini Mall</h3>
                        <p class="description">Everything from fashion to household needs in one place.</p>
                        <p class="contact">San Jose, Santa Rita</p>
                        <a href="https://www.facebook.com/santaritaminimall" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=San+Jose,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>
                
                <!-- Casoy Souvenir Shop -->
                <li class="menu-item">
                    <img src="images/casoy_shop.jpg" alt="Casoy Souvenir Shop" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Casoy Souvenir Shop</h3>
                        <p class="description">Locally-made gifts, pasalubong, and traditional fashion items.</p>
                        <p class="contact">Carlos Mariano St., Santa Rita</p>
                        <a href="https://www.facebook.com/casoyshop" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" width="30" height="30">
                        </a><br>
                        <a href="https://www.google.com/maps?q=Carlos+Mariano+St.,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>
            </ul>
        </div>
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
