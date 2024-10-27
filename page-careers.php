<?php
/*
Template Name: Career Page
*/
get_header();
?>

<main>
    <style>
        .car-pg-hero {
            background-color: #f5f5f5;
            padding: 60px 0;
            text-align: center;
        }
        .car-pg-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .car-pg-hero-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        .car-pg-hero-text {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }
        .car-pg-sections {
            padding: 60px 0;
        }
        .car-pg-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .car-pg-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .car-pg-card-content {
            padding: 25px;
        }
        .car-pg-card-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }
        .car-pg-card-text {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .car-pg-features {
            list-style: none;
            padding: 0;
        }
        .car-pg-feature-item {
            padding: 8px 0;
            color: #555;
            position: relative;
            padding-left: 25px;
        }
        .car-pg-feature-item:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #007bff;
        }
        .car-pg-cta {
            padding: 80px 0;
            text-align: center;
            background-color: #f5f5f5;
        }
        .car-pg-cta-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }
        .car-pg-cta-text {
            color: #666;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <section class="car-pg-hero">
        <div class="car-pg-container">
            <h1 class="car-pg-hero-title">Welcome to Our Career Support!</h1>
            <p class="car-pg-hero-text">GJH INC offers comprehensive consulting, management, design, and research opportunities. Every architectural endeavor is an opportunity to shape the future.</p>
        </div>
    </section>

    <section class="car-pg-sections">
        <div class="car-pg-container">
            <div class="car-pg-grid">
                <div class="car-pg-card">
                    <div class="car-pg-card-content">
                        <h2 class="car-pg-card-title">Career Management</h2>
                        <p class="car-pg-card-text">At GJH-INC, we support the range of aspects of an Individual's life, learning and work. Our proficient Career Management model and career guidance includes:</p>
                        <ul class="car-pg-features">
                            <li class="car-pg-feature-item">Reflect on one's current career</li>
                            <li class="car-pg-feature-item">Research of the IT market</li>
                            <li class="car-pg-feature-item">Determine if Continued Education is necessary</li>
                            <li class="car-pg-feature-item">Find openings and make career changes</li>
                        </ul>
                    </div>
                </div>

                <div class="car-pg-card">
                    <div class="car-pg-card-content">
                        <h2 class="car-pg-card-title">H1B Visa Support</h2>
                        <p class="car-pg-card-text">We meet all the regulatory and lawful standards Department of Labor (DOL) and United States Citizenship and Immigration Service (USCIS) requirements for sponsorship of H1B Visa employees.</p>
                        <p class="car-pg-card-text">If you have an H1B Visa status, please feel free to inquire about the jobs by contacting us.</p>
                    </div>
                </div>

                <div class="car-pg-card">
                    <div class="car-pg-card-content">
                        <h2 class="car-pg-card-title">Growth Opportunities</h2>
                        <p class="car-pg-card-text">We provide accelerated career paths for a better future and are a dependable partner for many Fortune 500 companies.</p>
                        <p class="car-pg-card-text">We appreciate your interest in career opportunities with GJH-INC.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="car-pg-cta">
        <div class="car-pg-container">
            <h2 class="car-pg-cta-title">Thank you for choosing GJH-INC!</h2>
            <p class="car-pg-cta-text">There are number of ways to define career in one's life, and we're here to help you find yours.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>