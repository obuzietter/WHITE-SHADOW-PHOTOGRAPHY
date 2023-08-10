const photos = document.querySelectorAll(".photo");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            entry.target.classList.toggle("show", entry.isIntersecting);
        });
    },{
        threshold: .1
    });
    photos.forEach((photo) => {
        observer.observe(photo);
    });