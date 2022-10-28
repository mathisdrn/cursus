var tag = document.createElement('script')
tag.src = "https://www.youtube.com/iframe_api"
var firstScriptTag = document.getElementsByTagName('script')[0]
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

function onYouTubeIframeAPIReady() {
    isAPIReady = true;
    // appeler load() de l'objet recipientElement
}

function loadVideo(videoID) {
    if (isModal && isAPIReady) {
        player = new YT.Player('player', {
            videoId: videoID,
            host: 'https://www.youtube-nocookie.com',
            playerVars: { 
                'autoplay' : 0,
                'modestbranding' : 1, 
                'controls' : 2,
                'showinfo' : 0,
                'rel' : 0,
            },
        });    
    }
}