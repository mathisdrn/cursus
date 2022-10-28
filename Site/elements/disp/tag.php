<section class="contentSection">
    <div class="contentTitle">
        <h3>Vidéos sur le tag <span class="tag <?= $_GET['tag'] ?>"><?= $_GET['tag'] ?></span></h3>
    </div>
    <div class="contentContainer grid videos">

    <?php   
        include $subpath . '/elements/function/bddConnect.php';

        $videos = $bdd->prepare("
        SELECT *
        FROM videos
        WHERE tagsID 
        LIKE :tag
        ");
        $videos->execute(array(
        'tag' =>  '%' . $_GET['tag'] . '%'
        ));

        while ($video = $videos->fetch()) {
            dispVideo($video['title'], $video['auteur'], $video['intervenant'], $video['tagsID'], $video['videoID']); 
        }

        $videos->closeCursor();
    ?>
        
    </div>       
</section>