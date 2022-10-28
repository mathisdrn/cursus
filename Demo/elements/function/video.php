<?php
function dispVideo($videoTitre, $auteur, $intervenant, $tags, $videoID) {
    global $sitePath;
?>
    <div class="contentDiv">
        <div class="video">
            <?php iframeParser($videoID) ?>
        </div>
        <div class="videoInformation">
            <h5 class="videoTitle"><?= $videoTitre ?></h5>
            <h5 class="videoAuteur"><a href="<?= $sitePath ?>/auteur/?auteur=<?= $auteur ?>" class="underline"><?= $auteur ?></a> 
            
            <?php if (isset($intervenant) and !empty($intervenant)) {
                ?>  avec <a class="underline" href="<?= $sitePath ?>/auteur/?auteur=<?= $intervenant ?>"> <?= $intervenant ?> </a>
            <?php } ?>
                
            </h5>
            <div class="videoTagContainer">
                <?php   $tagsArr = explode(", ", $tags);
                foreach ($tagsArr as $i => $tag) {    ?>        
                    <h6 class="tag <?= $tag ?>"> <a href="<?= $sitePath ?>/tag/?tag=<?= $tag ?>"> <?= $tag ?> </a> </h6>
                <?php } ?>
            </div>
        </div>
    </div>
    
<?php 
                                                                         
}

?>