<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartoon Character Web Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner">
        <h1>Welcome to My Portfolio</h1>
    </div>

    <div class="character-container">
        <video id="cartoon-video" autoplay loop muted>
            <source src="path-to-your-opentoonz-animation.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="clickable-container">
        <div class="clickable-item" onclick="popUpContent('content1')">Click Me 1</div>
        <div class="clickable-item" onclick="popUpContent('content2')">Click Me 2</div>
        <div class="clickable-item" onclick="popUpContent('content3')">Click Me 3</div>
    </div>

    <div id="popup" class="popup">
        <span class="close" onclick="closePopup()">X</span>
        <div id="popup-content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
