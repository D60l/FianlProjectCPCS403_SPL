<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="../global/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div>
        <?php
        include("../Includes/Header.php");
        ?>
    </div>
    <section class="image-gallery">
        <h2>Al-Ittihad Gallery</h2>
        <div class="preview-section">
            <div class="preview">
                <img id="main-image" src="../Images/Teams/Al-Ittihad-FC.png" alt="Preview">
            </div>
            <div class="preview-text">
                <h3 id="main-title">Al-Ittihad FC</h3>
                <p id="main-description">Al Ittihad is one of the oldest and most successful football clubs in Saudi
                    Arabia, based in Jeddah.The team
                    plays its home matches at the King Abdullah Sports City stadium, and there is more, to go to the website of Al-Ittihad <a href="https://ittihadclub.sa/">Click
                    here.</a></p>
            </div>
        </div>
        <!-- Horizontal line between thunbnails and text -->
        <hr>
        <!-- Gallery container -->
        <div class="gallery-container">
            <div class="gallery">
                <img src="../Images/Teams/Al-Ittihad-FC.png" 
                    alt="Thumbnail 1"
                    data-title="Al-Ittihad FC"
                    data-description="Al Ittihad is one of the oldest and most successful football clubs in Saudi Arabia, based in Jeddah. 
                    The team plays its home matches at the King Abdullah Sports City stadium." 
                    onclick="showMedia(this)">
                <img src="../Images/AlittihadHome.png" 
                    alt="Thumbnail 2" 
                    data-title="Club's Headquarters"
                    data-description="This is Headquarters of Al-Ittihad Club in Jeddah on Al-Sahafh Street"
                    onclick="showMedia(this)">
                <img src="../Images/AlittihadFans.jpg" 
                    alt="Thumbnail 3" 
                    data-title="Al-Ittihad Fans"
                    data-description="Al-Ittihad fans are the biggest fanbase in Saudi Arabia. -
                    Their statistics show they are far ahead of competitors in attendance by nearly 1,100,000 fans, and their attendance in recent years has reached more than 3,600,000."
                    onclick="showMedia(this)">
                <img src="../Images/AboNoran2.jpg" 
                    alt="Thumbnail 4" 
                    data-title="Club Legend"
                    data-description="Al-Ittihad midfielder Mohamed Noor, the legend of Al-Ittihad Club, joined his club in 1993. 
                    Noor played with Al-Ittihad for 23 years and won 20 cups." 
                    onclick="showMedia(this)">
                <!-- Video Thumbnail -->
                <img src="../Images/VideoThumbnail.png"
                    alt="Thumbnail 5" 
                    data-title="Crowning Alittihad"
                    data-description="In  2023/6/1 Al-Ittihad became the champion of Saudi League 'SPL', It was unforgettable moment."
                    data-video="../Videos/CrowningAlittihad2.mp4"
                    onclick="showMedia(this)">
            </div>

        </div>
    </section>
    <div>
        <?php
        include("../Includes/Footer.php");
        ?>
    </div>

    <script src="../javaScript/gallery.js"></script>
</body>

</html>