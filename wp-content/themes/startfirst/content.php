<div class="blog-post">
    <a href="<?php the_permalink(); ?>"><h2 class="blog-post-title"><?php the_title(); ?></h2></a>
    <p class="blog-post-meta">
        <?php the_date(); echo ', '; ?>
        <a class="general-link" href="<?php comments_link(); ?>"><?php printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(get_comments_number())); ?>
        </a>
    </p>
    <?php
        if ( has_post_thumbnail() ) {
    ?>
        <div class="row">
            <div class="col-md-12">
                <?php the_post_thumbnail('full' ); ?>
            </div>
            <div class="col-md-12">
                <?php the_excerpt(); ?>
            </div>
        </div>
    <?php
        }
    else {
         the_excerpt();
    } ?>


</div><!-- /.blog-post -->
