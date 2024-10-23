<footer>
    <p>&copy; <?php echo date("Y"); ?> - All Rights Reserved</p>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()): ?>
    <script src="<?php echo get_template_directory_uri(); ?>/asset/accordion.js"></script>
<?php endif; ?> 
</body>
</html>
