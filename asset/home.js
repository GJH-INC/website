const h3observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
        }
    });
});

document.querySelectorAll('.underlined-h3').forEach(h3 => {
    h3observer.observe(h3);
});