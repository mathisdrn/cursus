<?php

function dispAuteur ($auteur, $imgPath, $description, $tags, $tipeee) {

    $imgSize = "200";
?>
    
    <div class="contentContainer auteurInfo">
        <img class="circle" src="<?= $imgPath . '=s' . $imgSize ?>" alt="Miniature de <?= $auteur ?>">
        <div class="infoContainer">
            <h2><?= $auteur ?></h2>
            
            <?php if (isset($description) and !empty($description)) {
                echo '<br><h4>' . nl2br($description) . '</h4>'; 
            } ?>
            <br>
            <div class="tagsDiv">
                <?php   
                $tagArr = explode(", ", $tags);
                foreach ($tagArr as $i => $tag ) 
                {  ?>        
                    <h4 class="tag <?= $tag ?>"> <?= $tag ?> </h4>
                <?php } ?>
            </div>
            <?php if (isset($tipeee) && !empty($tipeee)) {
                ?> <a class="button donation" href="<?= $tipeee ?>">Faire un don</a> 
            <?php } ?>
        </div>        
    </div>

<?php
}
?>