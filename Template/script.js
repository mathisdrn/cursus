class videoRecipient {
    constructor(modalElement, isModal, playerElement, titleElement, auteurElement, intervenantElement, tagsElement, descriptionElement, supportElement) {
        this.modalElement = modalElement;
        this.isModal = isModal;
        this.playerElement = playerElement;
        this.titleElement = titleElement;
        this.auteurElement = auteurElement;
        this.intervenantElement = intervenantElement;
        this.tagsElement = tagsElement;
        this.descriptionElement = descriptionElement;
        this.supportElement = supportElement;
    }

    loadVideo(videoData.videoID) {
        if (isModal && isAPIReady) {
            player = new YT.Player('player', {
                videoId: videoData.videoID,
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

    loadBasicInformation(videoData.title, videoData.auteur, videoData.intervenant, videoData.tagsElement) {
        if (videoData.title.length != 0) {
            this.titleElement.textContent = videoData.title;
        }

        if (videoData.auteur.length != 0) {
            this.auteurElement.textContent = videoData.auteur;
        }

        let intervenantDiv = this.intervenantElement.parentElement;

        if (videoData.intervenant.length != 0) {
            this.intervenantElement.textContent = videoData.intervenant;
            intervenantDiv.classList.remove("hidden");
        } else {
            let intervenantDiv = this.intervenantElement.parentElement;
            intervenantDiv.classList.add("hidden");
        }

        if (videoData.tags.length != 0) {
            for (let i in videoData.tags) {
                let a_tag = document.createElement("a");
                a_tag.href = 'http://localhost/tag/?tag=' + videoData.tags[i];

                let h5_tag = document.createElement("h5");
                h5_tag.classList.add('tag');
                h5_tag.textContent = videoData.tags[i];
                h5_tag.classList.add(videoData.tags[i]);

                a_tag.appendChild(h5_tag);
                this.tagsElement.appendChild(a_tag);
            }
        }
    }

    loadRequestedInformation(videoData.description, videoData.support) {

    }

    openModal() {
        document.body.style.overflow = "hidden";
        videoRecipient.modal.classList.add('active');
        videoRecipient.isModal = true;

        const newModalVideo = new videoData();
        newModalVideo.getInformation(videoID);
        newModalVideo.requestInformation(videoID);
        videoModal.loadInformation(newModalVideo);
    }

    closeModal() {
        // playerElement, titleElement, auteurElement, intervenantElement, tagsElement, descriptionElement, supportElement
        
        // remove the title
        this.titleElement.textContent = '';
        
        // remove the auteur
        this.auteurElement.textContent = '';

        // remove the intervenant if any 
        this.intervenantElement.textContent = '';

        // remove the tagsChild
        console.log("reset function");

        console.log(this.tagsElement);
        
        var child = this.tagsElement.lastElementChild;

        while (child) {
            child.remove();
            child = this.tagsElement.lastElementChild;
        }

    }
}

const videoModal = new videoRecipient(
    document.getElementById('modal'),
    false,
    document.getElementById('player'),
    document.getElementById('titleModal'),
    document.getElementById('auteurModal'),
    document.getElementById('intervenantModal'),
    document.getElementById('tagsModal'),
    document.getElementById('descModal'),
    document.getElementById('supportModal'),
)

class videoData {
    constructor(videoID, title, auteur, intervenant, tags, description, support) {
        this.videoID = videoID;
        this.title = title;
        this.auteur = auteur;
        this.intervenant = intervenant;
        this.tags = tags;
        this.description = description;
        this.support = support;
    }

    getBasicInformation(videoID) {
        this.videoID = videoID;
        let videoInfo = document.querySelector("div[data-videoinfo='" + videoID + "']")

        this.title = videoInfo.querySelector('[data-titre]').textContent.trim();
        this.auteur = videoInfo.querySelector('[data-auteur]').textContent.trim();
        this.intervenant = videoInfo.querySelector('[data-intervenant]').textContent.trim();
        this.tags = videoInfo.querySelector('[data-tags]').innerText.split(" ");
        // console.log(this)
    }

    requestInformation(videoID) {
        // description, supportLink

        // AJAX Request for description / support link
        // var request = new XMLHttpRequest();
        // request.onreadystatechange = function() {
        //     if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        //         var response = JSON.parse(this.responseText);
        //         this.description = response.description;
        //         this.support = response.supportLink;
        //         console.log(response.current_condition.condition);
        //     }
        // };
        // request.open("GET", "http://localhost/getVideoInfo/");
        // request.send;
    }

    loadBasicInformation() {
        videoRecipient.loadBasicInformation(this.videoID, this.title, this.auteur, this.intervenant, this.tags)
    }
}