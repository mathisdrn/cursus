<form method="post" action="/public/insert/">
    <label for="videoID">VideoID</label><br>
    <input type="text" id="videoID" name="videoID" value=""><br>
    <label for="title">VideoTitlte</label><br>
    <input type="text" id="title" name="title" value=""><br>
    <label for="auteur">VideoAuteur</label><br>
    <input type="text" id="auteur" name="auteur" value=""><br>
    <label for="intervenant">VideoIntervenants</label><br>
    <input type="text" id="intervenant" name="intervenant"><br>
    <label for="tags">VideoTags</label><br>
    <input type="text" id="tags" name="tags">
    <br><br>
    <input type="submit" value="Insert">
</form>
<br><br>
        
<?php
    // check GET variable exist
    if (empty($_POST['videoID']) OR empty($_POST['title']) OR empty($_POST['auteur']) OR empty($_POST['tags']) ) 
    {
        echo '<p>videoID, title ou auteur manquant.<p>';
    } else 
    {

        $videoID = $_POST['videoID'];
        $title = $_POST['title'];
        $auteur = $_POST['auteur'];
        
        if(!empty($_POST['intervenant'])) {
            $intervenant = $_POST['intervenant'];   
        } else {
            $intervenant = "";
        }
        
        $tags = $_POST['tags'];
        $tags = explode(", ", $tags);
    
        echo $videoID . '<br>';
        echo $title . '<br>';
        echo $auteur . '<br>';
        var_dump($tags);
        echo '<br><br>';
        
        try { $bdd = new PDO('mysql:host=localhost;dbname=cursus;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); }
        catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }
        
        $tags = $_POST['tags'];
        $tags = explode(", ", $tags);
        var_dump($tags);
        
        foreach ($tags as $i => $tag ) {
            $req = $bdd-> prepare("SELECT tagID FROM tags WHERE tag = ?");
            $req->execute(array($tag));
            
            while ($tagID = $req->fetch())
            {

                if (empty($tagID['tagID'])) 
                {
                    $addTag = $bdd->exec("INSERT INTO tag VALUES('', $tag)");
                    $last_id = $req->insert_id;
                    $tagsID[] = append($last_id);
                    $addTag->closeCursor();
                    echo $tag . ' tag added, ID : ' . $last_ID . '<br>';
                } else 
                {
                    echo $tag . ' tag exist, ID : ' . $tagID['tagID'] . '<br>';
                }
            }
        }

        $req->closeCursor();
        
        // dispAddded value
     //   echo "<p>just added :<br> ID : " . $ID . "<br> Title : " .  $ID . "<br> Auteur : " .  $auteur . "<br> tags :" .  $tags . "</p>";
    }
?>