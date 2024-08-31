<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <style>
        #panorama {
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        #controls {
            position: absolute;
            bottom: 0;
            z-index: 2;
            text-align: center;
            width: 100%;
            padding-bottom: 3px;
        }
        .ctrl {
            padding: 8px 5px;
            width: 30px;
            text-align: center;
            background: rgba(200, 200, 200, 0.8);
            display: inline-block;
            cursor: pointer;
        }
        .btn{
            padding: 8px 5px;
            width: 60px;
            text-align: center;
            background: rgba(200, 200, 200, 0.8);
            display: inline-block;
            cursor: pointer;
            outline:none;
            border-radius:none;
        }
        .btn:hover{
            background: rgba(200, 200, 200, 200);
        }
        .ctrl:hover {
            background: rgba(200, 200, 200, 1);
        }

        .pnlm-hotspot {
            border: 2px solid rgba(255, 255, 255, 0.0); /* Warna border awal */
            border-radius: 50%;
            animation: rippleAnimation 1s linear infinite;
        }

        @keyframes rippleAnimation {
            0% {
                border: 0px solid rgba(255, 255, 255, 0);
            }
            25% {
                border: 0.5px solid rgba(255, 255, 255, 0.2);
            }
            50% {
                border: 1px solid rgba(255, 255, 255, 0.7);
            }
            75% {
                border: 2px solid rgba(255, 255, 255, 0.85);
            }
            100% {
                border: 0.5px solid rgba(255, 255, 255, 0);
            }
        }
    </style>
</head>
<body>
    <div id="panorama">
        <div id="controls">
            <button class="btn"><a href="index.php" style="color: black; text-decoration: none;">Kembali</a></button>
            <div class="ctrl" id="pan-up">&#9650;</div>
            <div class="ctrl" id="pan-down">&#9660;</div>
            <div class="ctrl" id="pan-left">&#9664;</div>
            <div class="ctrl" id="pan-right">&#9654;</div>
            <div class="ctrl" id="zoom-in">&plus;</div>
            <div class="ctrl" id="zoom-out">&minus;</div>
            <div class="ctrl" id="fullscreen">&#x2922;</div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="infoModalLabel">Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="infoContent"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var hotSpotsData = [
            {
                "pitch": -2.1,
                "yaw": 142,
                "type": "scene",
                "text": "360 view of the VLT at Paranal Observatory",
                "sceneId": "house"
            },
            {
                "pitch": 3,
                "yaw": 45,
                "type": "info",
                "text": "Baltimore Museum of Art",
                "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet nulla purus. Cras eros massa, egestas imperdiet ultricies maximus, vestibulum sit amet est. <img style='width:90%' src='https://images.unsplash.com/photo-1625015531264-43c3fce8c792?q=80&w=2920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'> <br><br>Morbi consequat lorem vel fermentum congue. In semper varius justo. Fusce a mattis leo, nec consectetur justo. Phasellus viverra, elit tincidunt hendrerit iaculis, risus lectus mattis eros, vel tincidunt lacus nisi et odio. Cras diam arcu, mollis quis sem eget, pulvinar pretium metus. Nulla a odio nunc. Cras vitae arcu justo. Nullam placerat metus non tincidunt consectetur. Phasellus vestibulum iaculis nulla eget viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Praesent aliquam, eros nec mollis ornare, nunc magna volutpat ante, porttitor eleifend nunc augue in magna. Sed scelerisque dui et placerat facilisis"
            },
        ];

        var viewer = pannellum.viewer('panorama', {   
            "default": {
                "firstScene": "circle",
                "sceneFadeDuration": 1000,
                "autoLoad": true,
            },

            "scenes": {
                "circle": {
                    "title": "360 degrees of the VLT",
                    "hfov": 150,
                    "pitch": -3,
                    "yaw": 85,
                    "type": "equirectangular",
                    "panorama": "images/ESO_Paranal_360_Marcio_Cabral_Chile_07-CC.jpg",
                    "hotSpots": hotSpotsData.map(function(hotSpot, index) {
                        hotSpot.clickHandlerFunc = function() { showInfoModal(index); };
                        return hotSpot;
                    })
                },

                "house": {
                    "title": "360 view of the VLT at Paranal Observatory",
                    "hfov": 150,
                    "yaw": 5,
                    "type": "equirectangular",
                    "panorama": "images/ESO_Paranal_360_Marcio_Cabral_Chile_11-CC.jpg",
                    "hotSpots": [
                        {
                            "pitch": 1,
                            "yaw": 37.1,
                            "type": "scene",
                            "text": "360 degrees of the VLT",
                            "sceneId": "circle",
                            "targetYaw": 50,
                            "targetPitch": 2
                        },
                    ]
                }
            }
        });

        // Make buttons work
        document.getElementById('pan-up').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() + 10);
        });
        document.getElementById('pan-down').addEventListener('click', function(e) {
            viewer.setPitch(viewer.getPitch() - 10);
        });
        document.getElementById('pan-left').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() - 10);
        });
        document.getElementById('pan-right').addEventListener('click', function(e) {
            viewer.setYaw(viewer.getYaw() + 10);
        });
        document.getElementById('zoom-in').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() - 10);
        });
        document.getElementById('zoom-out').addEventListener('click', function(e) {
            viewer.setHfov(viewer.getHfov() + 10);
        });
        document.getElementById('fullscreen').addEventListener('click', function(e) {
            viewer.toggleFullscreen();
        });

        function showInfoModal(hotSpotIndex) {
            var hotSpotData = hotSpotsData[hotSpotIndex];
            if(hotSpotData.type == 'info'){
                // console.log("Informasi dari hotspot yang diklik:", hotSpotData);
                // Lakukan sesuatu dengan informasi dari hotspot yang diklik, seperti menampilkannya di modal
                if (hotSpotData && hotSpotData.text) {
                    $('#infoModalLabel').html(hotSpotData.text);
                    $('#infoContent').html(hotSpotData.description);
                    $('#infoModal').modal('show');
                } else {
                    console.error("Invalid hotspot arguments");
                }
            }
        }
    </script>

</body>
</html>
