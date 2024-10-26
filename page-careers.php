<?php
/**
 * Template Name: Careers Page
 * 
 * @package YourThemeName
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="careers-container">
        <!-- Hero Section -->
        <section class="careers-hero">
            <div class="hero-content">
                <h1>Welcome to Our Career Support!</h1>
                <p class="hero-text">GJH INC offers comprehensive consulting, management, design, and research opportunities. Every architectural endeavor is an opportunity to shape the future.</p>
            </div>
        </section>

        <!-- Main Content -->
        <section class="careers-content">
            <div class="content-wrapper">
                <div class="career-info">
                    <p class="emphasis-text">There are number of ways to define career in one's life. At GJH-INC, we support the range of aspects of an Individual's life, learning and work.</p>

                    <div class="career-management">
                        <h2>Career Management</h2>
                        <p>Our proficient Career Management model and career guidance includes the ability to:</p>
                        <ul>
                            <li>Reflect on one's current career</li>
                            <li>Research of the IT market</li>
                            <li>Determine if Continued Education is necessary</li>
                            <li>Find openings</li>
                            <li>Make career changes</li>
                        </ul>
                    </div>

                    <div class="visa-info">
                        <h2>Visa Sponsorship</h2>
                        <p>We meet all the regulatory and lawful standards Department of Labor (DOL) and United States Citizenship and Immigration Service (USCIS) requirements for sponsorship of H1B Visa employees. If you have an H1B Visa status, please feel free to inquire about the jobs by contacting us.</p>
                    </div>

                    <div class="closing-statement">
                        <p>We appreciate your interest in career opportunities with GJH-INC. We provide accelerated career paths for a better future and are a dependable partner for many Fortune 500 companies.</p>
                        <p class="thank-you">Thank you for choosing GJH-INC!</p>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="contact-section">
                    <h2>Contact us</h2>
                    <div class="company-info">
                        <h3>GJH INC</h3>
                        <!-- Add your address and contact details here -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
    .careers-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .careers-hero {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 80px 0;
        margin-bottom: 60px;
        border-radius: 8px;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
        padding: 0 20px;
    }

    .hero-content h1 {
        font-size: 2.5rem;
        color: #1a1a1a;
        margin-bottom: 20px;
        font-weight: 700;
    }

    .hero-text {
        font-size: 1.2rem;
        color: #4a5568;
        line-height: 1.6;
    }

    .careers-content {
        padding: 40px 0;
    }

    .content-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }

    .career-info {
        margin-bottom: 60px;
    }

    .emphasis-text {
        font-size: 1.1rem;
        color: #2d3748;
        line-height: 1.7;
        margin-bottom: 30px;
        padding: 20px;
        background: #f8f9fa;
        border-left: 4px solid #3182ce;
        border-radius: 4px;
    }

    .career-management {
        margin: 40px 0;
    }

    .career-management h2,
    .visa-info h2 {
        font-size: 1.8rem;
        color: #2d3748;
        margin-bottom: 20px;
    }

    .career-management ul {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .career-management li {
        padding: 10px 0 10px 25px;
        position: relative;
    }

    .career-management li:before {
        content: "→";
        position: absolute;
        left: 0;
        color: #3182ce;
    }

    .visa-info {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin: 40px 0;
    }

    .closing-statement {
        margin: 40px 0;
    }

    .thank-you {
        font-size: 1.2rem;
        color: #2d3748;
        text-align: center;
        margin-top: 30px;
        font-weight: 600;
    }

    .contact-section {
        background: #2d3748;
        color: white;
        padding: 40px;
        border-radius: 8px;
        margin-top: 60px;
    }

    .contact-section h2 {
        color: white;
        margin-bottom: 20px;
        font-size: 1.8rem;
    }

    .company-info h3 {
        color: #63b3ed;
        margin-bottom: 15px;
        font-size: 1.4rem;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .careers-hero {
            padding: 60px 0;
        }

        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-text {
            font-size: 1.1rem;
        }

        .emphasis-text {
            font-size: 1rem;
        }

        .career-management h2,
        .visa-info h2 {
            font-size: 1.5rem;
        }

        .contact-section {
            padding: 30px;
        }
    }
</style>

<?php get_footer(); ?>