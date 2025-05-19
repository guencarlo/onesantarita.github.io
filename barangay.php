<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Santa Rita Barangay Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: url('picture/santarita.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            min-height: 100vh;
            padding-bottom: 20px;
        }

       

        .barangay-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            margin-top: 90px;
        }

        .barangay-btn {
            background-color: rgba(195, 146, 11, 0.58);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-size: 16px;
        }

        .barangay-btn:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        .barangay-btn:active {
            transform: scale(0.95);
        }

        .barangay-btn:hover {
            background-color: #0056b3;
        }

        .main-content {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: space-between;
            gap: 10px;
            padding: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        #map {
            height: 60vh;
            flex: 1;
            border: 2px solid #444;
            border-radius: 10px;
            min-width: 300px;
        }

        .info-panel {
            width: 300px;
            padding: 15px;
            background-color: rgba(170, 144, 72, 0.56);
            color: #000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: left;
        }

        .info-panel img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .info-panel iframe {
            width: 100%;
            height: 200px;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
        }

        .info-panel.hidden {
            display: none;
        }

        @media screen and (max-width: 768px) {
            .main-content {
                flex-direction: column;
                align-items: center;
            }

            .info-panel {
                width: 90%;
            }

            #map {
                width: 100%;
            }
        }
        .landing-section {
    background: rgba(0, 0, 0, 0.75);
    padding: 40px 20px;
    text-align: center;
    color: #fff;
    margin-top: 60px;
}

.landing-content {
    max-width: 1000px;
    margin: 0 auto;
}

.landing-section h2, .landing-section h3 {
    color: #ffc107;
    margin-bottom: 20px;
}

.landing-section p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.news-list {
    text-align: left;
    list-style-type: disc;
    max-width: 800px;
    margin: 0 auto 20px;
    padding-left: 20px;
}

.news-list li {
    margin-bottom: 10px;
}

.top-btn {
    background-color: #ffc107;
    color: #000;
    border: none;
    padding: 10px 25px;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.top-btn:hover {
    background-color: #e0a800;
}


    </style>
</head>
<body>
   
        <div class="barangay-container">
            <?php
            $barangays = [
                "San Jose", "San Isidro", "San Matias", "San Basilio",
                "San Juan", "San Roque", "San Agustin", "San Vicente",
                "Becuran", "Dila-Dila",  
            ];

            foreach ($barangays as $brgy) {
                echo "<button class='barangay-btn' data-name='$brgy'>$brgy</button>";
            }
            ?>
        </div>

        <div class="main-content">
            <div id="infoPanel" class="info-panel hidden">
                <h2 id="barangayTitle">Barangay Name</h2>
                <img id="barangayPhoto" src="" alt="Barangay Photo" />
                <p id="barangayAnnouncement">No announcement yet.</p>
                <div id="barangayVideoContainer"></div>
                            </div>
            <div id="map"></div>
        </div>
    </div>
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
    onclick="window.location.href='card.php';">
        Back
    </button>
    <div class="landing-section">
    <div class="landing-content">
        <h2>Welcome to Santa Rita, Pampanga</h2>
        <p>Santa Rita is a historic town located in the province of Pampanga. Known for its centuries-old church, rich Kapampangan culture, and delicacies like turones de casoy, Santa Rita has become a symbol of heritage and hospitality in Central Luzon.</p>

        <h3>Latest News & Events</h3>
        <ul class="news-list">
            <li><strong>April 2025:</strong> Santa Rita celebrates its annual town fiesta with cultural shows and street parades.</li>
            <li><strong>March 2025:</strong> Launch of the “One Santa Rita” digital directory for MSMEs.</li>
            <li><strong>February 2025:</strong> Tree planting and cleanup drive organized by youth organizations and barangay councils.</li>
        </ul>

        <p>Stay connected with your community. Visit your barangay page to view local updates, announcements, and media.</p>

        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="top-btn">Back to Top</button>
    </div>
</div>




    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([15.0322, 120.6203], 13);
        

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        const barangayData = {
            "San Jose": {
  coords: [15.0291, 120.6141],
  announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
                 <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
  photo: "picture/munisipyo.jpg",
  video: "https://www.youtube.com/embed/i7WATwOFacM?autoplay=1&mute=1"
},

            "San Isidro": {
          coords: [15.0287, 120.6215],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_isidro.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "San Matias": {
          coords: [15.0318, 120.6277],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_matias.jpg",
          video: "https://www.youtube.com/embed/5qap5aO4i9A?autoplay=1&mute=1"
            },
            "San Basilio": {
          coords: [15.0350, 120.6300],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_basilio.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "San Juan": {
          coords: [15.0330, 120.6250],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_juan.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "San Roque": {
          coords: [15.0325, 120.6200],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_roque.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "San Agustin": {
          coords: [15.0310, 120.6150],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_agustin.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "San Vicente": {
          coords: [15.0300, 120.6100],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/san_vicente.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "Becuran": {
          coords: [15.0345, 120.6350],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/becuran.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            },
            "Dila-Dila": {
          coords: [15.0360, 120.6400],
          announcement: `MUNICIPALITY OF SANTA RITA PAMPANGA. 
          <a href="https://www.philatlas.com/luzon/r03/pampanga/santa-rita/san-jose.html" target="_blank" style="color: #1e90ff;">View more</a>`,
          photo: "assets/images/dila_dila.jpg",
          video: "https://www.youtube.com/embed/YOUR_VIDEO_ID_HERE?autoplay=1&mute=1"
            }
        };

        let marker;
        const buttons = document.querySelectorAll('.barangay-btn');
        const panel = document.getElementById('infoPanel');
        const title = document.getElementById('barangayTitle');
        const announcement = document.getElementById('barangayAnnouncement');
        const photo = document.getElementById('barangayPhoto');
        const videoContainer = document.getElementById('barangayVideoContainer');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const name = btn.getAttribute('data-name');
                const data = barangayData[name];

                if (data) {
                    map.setView(data.coords, 15);

                    if (marker) marker.remove();
                    marker = L.marker(data.coords)
                        .addTo(map)
                        .bindPopup(`${name} Barangay`)
                        .openPopup();

                    panel.classList.remove('hidden');
                    title.textContent = name;
                    announcement.innerHTML = data.announcement;
                    photo.src = data.photo;
                    photo.alt = `${name} Photo`;

                    // Embed video inside info panel
                    if (data.video) {
                        videoContainer.innerHTML = `
                            <iframe 
                                src="${data.video}" 
                                allow="autoplay; encrypted-media" 
                                allowfullscreen
                            ></iframe>`;
                    } else {
                        videoContainer.innerHTML = '';
                    }
                }
            });
        });
        function showAllBarangays() {
    if (marker) marker.remove();
    Object.entries(barangayData).forEach(([name, data]) => {
        L.marker(data.coords)
            .addTo(map)
            .bindPopup(`${name} Barangay`);
    });
    map.setView([15.0322, 120.6203], 13); // Reset to overview
}

</script>

    </script>
</body>
</html>
