const rating = [...document.querySelectorAll('.btn-choice')];
const btn = document.querySelector('#submit');
const ratingDisplay = document.querySelector('.hide');
const thankYouDisplay = document.querySelector('.hide-thank');
const selected = document.getElementById('rating');
const closeBtn = document.querySelector('.close-btn');

rating.forEach((item) => {
    item.addEventListener('click', () => {
        rating.forEach((item) => {
            item.classList.remove('active')
        })
        item.classList.add('active')
    }, false)
})

btn.addEventListener('click', () => {
    const active = document.querySelector('.btn-choice.active')
    let ind = rating.indexOf(active) + 1;
    selected.innerText = ind;
    ratingDisplay.classList.add('active')
    thankYouDisplay.classList.add('active')
}, false);

closeBtn.addEventListener('click', () => {
    ratingDisplay.classList.remove('active')
    thankYouDisplay.classList.remove('active')
    rating.forEach((item) => {
        item.classList.remove('active')
    })
})


