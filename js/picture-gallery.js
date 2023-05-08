const thumbnails = document.querySelectorAll('.thumbnail');
const bigPicture = document.querySelector('.current-picture');

thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        bigPicture.src = thumbnail.src;
        thumbnails.forEach(thumbnail => thumbnail.classList.remove('highlighted'));
        thumbnail.classList.add('highlighted');
    });
});
