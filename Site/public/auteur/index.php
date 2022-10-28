<?php 
    $titlePage = "Cursus - " . $_GET['auteur'];
    $subpath = "../..";
    include $subpath . "/elements/section/header.php";
    include $subpath . "/elements/section/headerSection.php";

    if (empty($_GET['auteur'])) {
        $errorMessage = "Auteur introuvable";
        // add a line to disp a link to /auteurs/
        include $subpath . "/elements/section/error404.html";
    } else {
        include $subpath . "/elements/disp/auteur.php";
    }

    include $subpath . '/elements/section/footer.php';
?>