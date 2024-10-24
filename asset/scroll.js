const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
        }
    });
});

document.querySelectorAll('.scroll-animate').forEach(section => {
    observer.observe(section);
});
