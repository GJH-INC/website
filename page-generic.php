<?php
/*
Template Name: Generic Page
*/
get_header();
?>

<main>
    <h1><?php the_title(); ?></h1>
    <section class="generic-content">
        <div class="content">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
