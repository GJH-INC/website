<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * @package YourThemeName
 */

get_header(); ?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <div class="page-content">
            <div class="error-container">
                <div class="error-image">
                    <!-- Large 404 Number -->
                    <h1 class="error-code">404</h1>
                </div>
                
                <div class="error-text">
                    <h2>Oops! Page Not Found</h2>
                    <p>It seems we can't find what you're looking for.</p>
                    
                    
                    <!-- Helpful Links Section -->
                    <div class="helpful-links">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/')); ?>">← Back to Homepage</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .site-main{
        margin-top: 80px;
    }
    .error-404 {
        padding: 60px 20px;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .error-container {
        background: #fff;
        border-radius: 8px;
        padding: 40px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }

    .error-code {
        font-size: 120px;
        color: #1a1a1a;
        margin: 0;
        line-height: 1;
        font-weight: 700;
        background: linear-gradient(135deg, #2563eb, #3b82f6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .error-text h2 {
        font-size: 28px;
        color: #1a1a1a;
        margin: 20px 0;
    }

    .error-text p {
        color: #666;
        margin-bottom: 30px;
        font-size: 16px;
        line-height: 1.6;
    }

    .helpful-links {
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #eee;
    }

    .helpful-links h3 {
        font-size: 18px;
        color: #1a1a1a;
        margin-bottom: 15px;
    }

    .helpful-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .helpful-links li {
        margin: 10px 0;
    }

    .helpful-links a {
        color: #2563eb;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .helpful-links a:hover {
        color: #1d4ed8;
    }

    /* Search form styling */
    .search-form {
        max-width: 400px;
        margin: 30px auto;
        display: flex;
        gap: 10px;
    }

    .search-form label {
        flex: 1;
    }

    .search-form .search-field {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .search-form .search-submit {
        padding: 12px 25px;
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .search-form .search-submit:hover {
        background: #1d4ed8;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .error-404 {
            padding: 40px 15px;
        }

        .error-container {
            padding: 30px 20px;
        }

        .error-code {
            font-size: 100px;
        }

        .error-text h2 {
            font-size: 24px;
        }
    }
</style>

<?php get_footer(); ?>