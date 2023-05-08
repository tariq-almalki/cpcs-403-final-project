const thumbnails = document.querySelectorAll('.thumbnail');
const bigPicture = document.querySelector('.current-picture');

const backArrow = document.querySelector('.back-arrow');
const forwardArrow = document.querySelector('.forward-arrow');

backArrow.addEventListener('click', () => {
    for (let i = 0; i < thumbnails.length; i++) {
        const isHighlighted = thumbnails[i].classList.contains('highlighted');
        if (isHighlighted) {
            thumbnails[i].classList.remove('highlighted');
            const currentHighlighted = Number(thumbnails[i].dataset.index);
            const nextHighlightedIndex = currentHighlighted === 0 ? 9 : currentHighlighted - 1;
            const nextHighlighted = thumbnails[nextHighlightedIndex];
            nextHighlighted.classList.add('highlighted');
            bigPicture.src = nextHighlighted.src;
            return;
        }
    }
});

forwardArrow.addEventListener('click', () => {
    for (let i = 0; i < thumbnails.length; i++) {
        const isHighlighted = thumbnails[i].classList.contains('highlighted');
        if (isHighlighted) {
            thumbnails[i].classList.remove('highlighted');
            const currentHighlighted = Number(thumbnails[i].dataset.index);
            const nextHighlightedIndex = currentHighlighted === 9 ? 0 : currentHighlighted + 1;
            const nextHighlighted = thumbnails[nextHighlightedIndex];
            nextHighlighted.classList.add('highlighted');
            bigPicture.src = nextHighlighted.src;
            return;
        }
    }
});

thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        bigPicture.src = thumbnail.src;
        thumbnails.forEach(thumbnail => thumbnail.classList.remove('highlighted'));
        thumbnail.classList.add('highlighted');
    });
});