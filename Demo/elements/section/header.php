<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="robots" content="none" />
        <meta name="Cursus" content="Accès large à des vidéos de qualités" />
        <meta http-equiv="content-type" xml:lang="fr-FR" content="text/html; charset=UTF-8" />  
        
        <title><?php echo $titlePage ?></title>
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/default.css"> <!--Style -->
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/header.css"> <!--Style -->
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/tags.css"> <!--Style -->
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/auteurs.css"> <!--Style -->
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/video.css"> <!-- Style -->
        <link rel="stylesheet" type="text/css" href="<?= $subpath ?>/elements/css/footer.css"> <!--Style -->
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@530;580;661&display=swap" rel="stylesheet"> <!-- New font -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

<!-- PRECONNECT : -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://www.youtube.com">
        <link rel="preconnect" href="https://www.youtube-nocookie.com">
        <link rel="preconnect" href="https://i.ytimg.com">
        <link rel="preconnect" href="https://i9.ytimg.com">
        <link rel="preconnect" href="https://s.ytimg.com">
        
        <?php 
            $sitePath = "http://localhost:80/public";
            include $subpath . '/elements/function/iframeParser.php';
            include $subpath . '/elements/function/video.php';
            include $subpath . '/elements/function/auteur.php';
        ?>
    </head>
    <body>