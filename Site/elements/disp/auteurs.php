<section class="contentSection">
    <div class="contentTitle"><h3>Auteurs présentés :</h3></div>
    <div class="contentContainer grid auteurs">
        <?php
        
            $imgSize = "128";
                
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=cursus;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
            
            $auteurs = $bdd->query("
            SELECT DISTINCT *
            FROM auteurs
            ORDER BY AuteurName ASC
            ");
        
            while ($auteur = $auteurs->fetch()) 
            { 
            ?>
                <div class="auteur">
                    <div class="auteurImgDiv">
                        <a href="http://localhost/public/auteur/?auteur=<?= $auteur['AuteurName'] ?>">
                            <img class="circle" src="<?= $auteur['imgPath'] . '=s' . $imgSize ?>" alt="Miniature de la chaîne <?= $auteur['AuteurName'] ?>"/>
                        </a>
                    </div>
                    <div class="auteurInfo">
                        <a href="http://localhost/public/auteur/?auteur=<?= $auteur['AuteurName'] ?>"><h4 class="auteurName"><?= $auteur['AuteurName'] ?></h4></a>
                    </div>
                </div>
            <?php
            }
            $auteurs->closeCursor();    ?>
        
    </div>
</section>