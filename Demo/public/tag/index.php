<?php
    $titlePage = "Cursus - Tag";
    $subpath = "../..";
    include $subpath . "/elements/section/header.php";
    include $subpath . "/elements/section/headerSection.php";
    
    if (!empty($_GET['tag'])) {
        // show the tag the user is looking for
        include $subpath . "/elements/disp/tag.php";
    } else {
        // display all the existing tag
        include $subpath . "/elements/disp/tags.php";
    }

    include $subpath . "/elements/section/footer.php";

?>