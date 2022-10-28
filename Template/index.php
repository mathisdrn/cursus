<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="robots" content="none" />
        <meta name="Cursus" content="Accès large à des vidéos de qualités" />
        <meta http-equiv="content-type" xml:lang="fr-FR" lang="fr-FR" content="text/html; charset=UTF-8" />  

        <title>Cursus - template</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="specific.css">
        <link rel="stylesheet" type="text/css" href="modal.css">
        <link rel="stylesheet" type="text/css" href="tags.css">
        <link rel="stylesheet" type="text/css" href="videos.css">

        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@661&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        
        <script defer src="script.js"></script>
        <script defer src="modalController.js"></script>
        <script defer src="loadVideo.js"></script>
        <!-- PRECONNECT : -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://www.youtube.com" crossorigin>
        <link rel="preconnect" href="https://www.youtube-nocookie.com" crossorigin>
        <link rel="preconnect" href="https://i.ytimg.com" crossorigin>
        <link rel="preconnect" href="https://i3.ytimg.com" crossorigin>
        <link rel="preconnect" href="https://s.ytimg.com" crossorigin>
    </head>
    <body>
        <header>
            <div class="divTitle">
                <h1 class="title">Cursus</h1>
                <h3 class="subtitle">Un accès à des vidéos rigoureusement choisis</h3>
            </div>
        </header>

        <?php
            include 'video.php';
        ?>

        <footer>
            <div>
                <p><a href="contact.html">Contact</a></p>
                <p><a href="whoisbehind.html">Qui suis-je</a></p>
                <p><a href="FAQ.html">F.A.Q</a></p>
            </div>
        </footer>

    </body>
</html>