<?php

    $auteur = $_GET['auteur'];

    include $subpath . "/elements/function/bddConnect.php";
    
// Récupère et affiche les informations de l'auteur

        $auteurData = $bdd->prepare("
        SELECT DISTINCT *
        FROM auteurs
        WHERE AuteurName 
        LIKE :auteur
        ");
        $auteurData->execute(array(
        'auteur' => $auteur
        ));
        while ($auteurInfo = $auteurData->fetch())
        {
            ?> <section class="contentSection grey"> 
                <?php
                    dispAuteur($auteurInfo['AuteurName'], $auteurInfo['imgPath'], $auteurInfo['description'], $auteurInfo['tags'], $auteurInfo['tipeee']);
                ?> 
            </section> <?php
        }

        $auteurData->closeCursor();

// Récupère et affiche les vidéos de l'auteur

        $auteurVideos = $bdd->prepare("
        SELECT *
        FROM videos
        WHERE auteur
        LIKE :auteur
        ");
        $auteurVideos->execute(array(
        'auteur' => '%' . $_GET['auteur'] . '%'
        ));

        ?>
    <section class="contentSection">
        <div class="contentContainer grid videos">
            <?php while ($auteurVideo = $auteurVideos->fetch()) {
                // dispVideo($auteurVideo['title'], $auteurVideo['auteur'], $auteurVideo['intervenant'], $auteurVideo['tagsID'], $auteurVideo['videoID']);
            } ?>
        </div>
    </section>

        <?php 
        
        $auteurData->closeCursor(); 

        ?>