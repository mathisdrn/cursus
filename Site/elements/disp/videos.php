<section class="contentSection">
    <div class="contentTitle"><h3>Vidéos mises en avant :</h3></div>
    <div class="contentContainer grid videos">     
        <?php
            include $subpath . '/elements/function/bddConnect.php';
                
            $videos = $bdd->query('SELECT * FROM videos');
                
            while ($video = $videos->fetch())
            {
                dispVideo($video['title'], $video['auteur'], $video['intervenant'], $video['tagsID'], $video['videoID']);
            }
                
            $videos->closeCursor();
        ?>
    </div>   
</section>