<?php get_header(); ?>

      <div class="row">

          <div class="col-lg-8">
<p>index</p>
              <?php
              global $post;
              $args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post_status' => 'any', 'post_parent' => null );
              $attachments = get_posts( $args );
              if ( $attachments ) {
                  foreach ( $attachments as $post ) {
                      setup_postdata( $post );
                      the_title();
                      the_attachment_link( $post->ID, false );
                      the_excerpt();
                  }
                  wp_reset_postdata();
              }
              ?>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'content', get_post_format() );
            ?>
                <div class="divider"></div>
            <?php
            endwhile;
            ?>
                <nav>
                    <ul class="pager">
                        <li><?php next_posts_link( 'Previous' ); ?></li>
                        <li><?php previous_posts_link( 'Next' ); ?></li>
                    </ul>
                </nav>
            <?php
            endif;
            ?>

        </div><!-- /.blog-main -->

       <!--   --><?php /*get_sidebar(); */?>

      </div><!-- /.row -->

<?php get_footer(); ?>
