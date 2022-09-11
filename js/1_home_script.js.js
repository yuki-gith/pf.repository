const dt_tags = document.querySelectorAll('.accordion dt');
dt_tags.forEach(dt => {
    dt.addEventListener('click', () => {
        dt.classList.toggle('open');
        dt.nextElementSibling.classList.toggle('open');
    })
});