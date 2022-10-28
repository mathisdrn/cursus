<section class="contentSection">
    <div class="contentTitle"><h3>Tags :</h3></div>
    <div class="contentContainer tagsDiv">
    
        <?php
        include $subpath . '/elements/function/bddConnect.php';

        $tagsList = $bdd->query("
        SELECT tag, color
        FROM tags
        ");
        
        while ($tagList = $tagsList->fetch()) 
        { 
            $tagArray = explode(", ", $tagList['tag']);
            foreach ($tagArray as $i => $tag ) 
                { ?>        
                    <h4 class = "tag" style = "background-color:#<?= $tagList['color']?>;">
                        <a href="tag/?tag=<?= $tag ?>"> <?= $tag ?> </a>
                    </h4>
                <?php 
                }
        }
        
        $tagsList->closeCursor(); ?>          
            
    </div>
</section>