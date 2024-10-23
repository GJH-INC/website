
    // Array of image names corresponding to each offer
    const imageNames = [
        "dev.svg",
        "cots.svg",
        "dataanalysis.svg",
        "maintain.svg",
        "GenAI.webp",
        "architecture.webp"
    ];

    function toggleDetails(index) {
        const offers = document.querySelectorAll('.gjh-offers .offers-details');
        const titles = document.querySelectorAll('.gjh-offers .offers-title h4');
        const imgElement = document.getElementById('offerImage');

        // Loop through all offers to close the others and reset title colors
        offers.forEach((offer, i) => {
            if (i === index) {
                // Toggle current clicked offer's details
                offer.style.display = (offer.style.display === 'none' || offer.style.display === '') ? 'block' : 'none';
            } else {
                offer.style.display = 'none';
            }
        });

        // Extract the current image's directory path
        const currentSrc = imgElement.src;
        const basePath = currentSrc.substring(0, currentSrc.lastIndexOf('/') + 1);

        // Change the image source based on the index
        const newSrc = `${basePath}${imageNames[index]}`;
        imgElement.style.opacity = 0; // fade out transition

        // Wait for the fade-out transition to complete before changing the image
        setTimeout(() => {
            imgElement.src = newSrc;
            imgElement.style.opacity = 1; // fade in transition
        }, 300); // matches the CSS transition duration

        // Change the title color for the active offer
        titles.forEach((title, i) => {
            if (i === index) {
                if (title.classList.contains('active-title')) {
                    title.classList.remove('active-title');
                } else {
                    title.classList.add('active-title');
                }
            } else {
                title.classList.remove('active-title');
            }
        });
    }