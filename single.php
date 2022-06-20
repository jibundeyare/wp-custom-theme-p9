<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col">
<?php
if (have_posts()):
    the_post();
    ?>
        <article class="bg-slate-400">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
        </article>
    <?php
endif;
?>
        </div>
    </div>
</div>
<?php
get_footer();
