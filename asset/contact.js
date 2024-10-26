document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contact-form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault(); // Prevents default form submission

        // Get reCAPTCHA response
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            alert('Please complete the CAPTCHA');
            return;
        }

        // Prepare form data
        const formData = new FormData(form);
        formData.append('action', 'submit_contact_form');
        formData.append('g-recaptcha-response', recaptchaResponse);

        try {
            const response = await fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            });

            const result = await response.text();
            alert(result);  // Display server response
        } catch (error) {
            console.error('Error submitting form:', error);
            alert('There was an error submitting the form. Please try again.');
        }
    });
});
