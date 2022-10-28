<?php
$titlePage = "Cursus - Demo";
$subpath = "../..";
include $subpath . '/elements/section/header.php';
include $subpath . "/elements/section/headerSection.php";
?>

<style>
    div.videoContainer{
        width: 640px;
        height: 360px;
        overflow: hidden;
    }

</style>

<div class="videoContainer">
    <img id="thumbnail" src="https://dummyimage.com/640x360/fff/aaa" onclick="playVideo()">
    <div id="player"></div>
</div>

<script>

    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    var isAPIReady = false;
    
    function onYouTubeIframeAPIReady() {
        isAPIReady = true;
    }

    function playVideo() {
        if (isAPIReady) {
                load();
                player1.playVideo();  
            }
    }
    
    function onPlayerReady(event) {
        document.getElementById('thumbnail').style.display = 'none';    
    }
    

    function load() {
        player = new YT.Player('player', {
            height: '360',
            width: '640',
            videoId: 'M7lc1UVf-VE',
            host: 'https://www.youtube-nocookie.com',
            playerVars: { 'autoplay': 0, 'rel': 0, 'modestbranding':1, 'autoplay':1},
            events: {
                'onReady': onPlayerReady
            }
        });
    }
    
    
    
    
</script>

<?php
include $subpath . "/elements/section/footer.php";
?>