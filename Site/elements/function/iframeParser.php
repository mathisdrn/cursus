<?php 

function iframeParser($videoID)
{
    $videoURL = "https://www.youtube-nocookie.com/embed/" . $videoID . "?showinfo=0&modestbranding=1&rel=0";
    
?>
    <iframe width="100%" height="200px" src="<?= $videoURL ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<?php } ?>