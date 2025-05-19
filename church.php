<section class="menu-section" id="menu">
    <h2 class="section-title">CHAPELS & CHURCHES IN SANTA RITA</h2>
    <div class="section-content">
        <div class="menu-row">
            <ul class="menu-list">
                <!-- Santa Rita Parish Church -->
                <li class="menu-item">
                    <img src="images/santa_rita_parish.jpg" alt="Santa Rita Parish Church" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Santa Rita Parish Church</h3>
                        <p class="description">Historical church known for its beautiful architecture and peaceful ambiance.</p>
                        <p class="contact">Central Santa Rita</p>
                        <a href="https://www.google.com/maps?q=Santa+Rita+Parish+Church,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- St. Therese of Lisieux Chapel -->
                <li class="menu-item">
                    <img src="images/st_therese_chapel.jpg" alt="St. Therese of Lisieux Chapel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">St. Therese of Lisieux Chapel</h3>
                        <p class="description">A small, serene chapel offering a peaceful place for prayer and reflection.</p>
                        <p class="contact">Barangay San Isidro, Santa Rita</p>
                        <a href="https://www.google.com/maps?q=St.+Therese+of+Lisieux+Chapel,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Our Lady of Fatima Chapel -->
                <li class="menu-item">
                    <img src="images/our_lady_of_fatima_chapel.jpg" alt="Our Lady of Fatima Chapel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Our Lady of Fatima Chapel</h3>
                        <p class="description">A well-known chapel for its faithful congregation and devotion to Our Lady of Fatima.</p>
                        <p class="contact">Barangay Dolores, Santa Rita</p>
                        <a href="https://www.google.com/maps?q=Our+Lady+of+Fatima+Chapel,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Divine Mercy Chapel -->
                <li class="menu-item">
                    <img src="images/divine_mercy_chapel.jpg" alt="Divine Mercy Chapel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Divine Mercy Chapel</h3>
                        <p class="description">A place of worship and devotion dedicated to the Divine Mercy.</p>
                        <p class="contact">Barangay San Vicente, Santa Rita</p>
                        <a href="https://www.google.com/maps?q=Divine+Mercy+Chapel,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- St. Jude Thaddeus Chapel -->
                <li class="menu-item">
                    <img src="images/st_jude_thaddeus_chapel.jpg" alt="St. Jude Thaddeus Chapel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">St. Jude Thaddeus Chapel</h3>
                        <p class="description">A chapel dedicated to St. Jude, known for answering prayers and providing hope.</p>
                        <p class="contact">Barangay Pulung Bulu, Santa Rita</p>
                        <a href="https://www.google.com/maps?q=St.+Jude+Thaddeus+Chapel,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
                    </div>
                </li>

                <!-- Sacred Heart of Jesus Chapel -->
                <li class="menu-item">
                    <img src="images/sacred_heart_chapel.jpg" alt="Sacred Heart of Jesus Chapel" class="menu-image" />
                    <div class="menu-details">
                        <h3 class="name">Sacred Heart of Jesus Chapel</h3>
                        <p class="description">A small chapel dedicated to the Sacred Heart, known for its peaceful atmosphere.</p>
                        <p class="contact">Barangay Sto. Niño, Santa Rita</p>
                        <a href="https://www.google.com/maps?q=Sacred+Heart+of+Jesus+Chapel,+Santa+Rita,+Pampanga" target="_blank">View on Google Maps</a>
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
zzzzzzzz
    
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
