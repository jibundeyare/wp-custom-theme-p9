<?php

get_header();
?>
<div class="container">
    <div class="row">
        <div class="col">
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
            <article class="bg-slate-400">
                <h2><a href="<?= get_permalink() ?>"><?php the_title() ?></a></h2>
                <p><?php the_content() ?></p>
            </article>
        <?php
    endwhile;
endif;
?>
        </div>
    </div>
</div>
<?php
get_footer();
