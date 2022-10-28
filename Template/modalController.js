const thumbnails = document.querySelectorAll('[data-videoid]');
const closeModalBtn = document.querySelector('[data-close-button]');
const modal = document.getElementById('modal')

var isModal, isAPIReady

thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        openModal(thumbnail.dataset.videoid);
    })
})

closeModalBtn.addEventListener('click', () => {
    modal.classList.remove('active')
    document.body.style.overflow = "visible";
    isModal = false;

    videoModal.reset
})