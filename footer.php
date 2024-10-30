<footer>
    <div class="foot-cont flex flex-row flex-wrap ">
        <div class="foot-logo flex flex-col">
            <div class="flex">
                <img width="48px" height="48px"  src="<?php echo get_template_directory_uri(); ?>/asset/images/logo.png" /> 
                <h3>GJH consulting</h3>
            </div>
            <p>
                Leave the Tech to us, Focus on winning in your business
            </p>
        </div>
        <div class="flex flex-col foot-mainpg">
            <h4>
                Main pages
            </h4>
            <a class="foot-links" href="<?php echo home_url(); ?>">
                Home
            </a>
            <a class="foot-links" href="<?php echo home_url('/services'); ?>">
                Services
            </a>
            <a class="foot-links" href="<?php echo home_url('/marketing'); ?>">
                Marketing
            </a>
            <a class="foot-links" href="<?php echo home_url('/careers'); ?>">
                Careers
            </a>
        </div>
        <div class="flex flex-col foot-otherpg">
            <h4>
                Other pages
            </h4>
            <a class="foot-links" href="<?php echo home_url('/capability-statement'); ?>">
                Capability Statement
            </a>
            <a class="foot-links" href="<?php echo home_url('/terms'); ?>">
                Terms
            </a>
            <a class="foot-links" href="<?php echo home_url('/privacy'); ?>">
                Privacy
            </a>
        </div>
        <div class="flex flex-col contact-links">
            <h4>
                Contacts
            </h4>
            <a class="foot-links"  href="mailto:info@gjh-inc.com">
                info@gjh-inc.com
            </a>

            <a class="foot-links"  href="tel:(650) 456-1744">
                (650) 456-1744
            </a>
            <div class="socials-icon flex">

            </div>
        </div>
    </div>
    <p>&copy; <?php echo date("Y"); ?> GJH consulting - All Rights Reserved</p>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/asset/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/asset/scroll.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/asset/home.js"></script>
<?php endif; ?> 
<script src="<?php echo get_template_directory_uri(); ?>/asset/header.js"></script>
</body>
</html>
