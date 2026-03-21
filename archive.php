<?php
/**
 * The template for displaying archive pages (Categories, Tags, Dates)
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="c-page-header py-xl bg-light">
        <div class="container">
            <div class="c-page-header__content text-center">
                <h1 class="c-page-header__title">
                    <?php
                    if ( is_category() ) {
                        single_cat_title();
                    } elseif ( is_tag() ) {
                        single_tag_title();
                    } elseif ( is_author() ) {
                        the_author();
                    } else {
                        esc_html_e( 'Archives', 'careme' );
                    }
                    ?>
                </h1>
                <p class="text-muted mt-sm"><?php the_archive_description(); ?></p>
            </div>
        </div>
    </section>

    <div class="c-blog-body py-xl border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="c-post-list">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" class="c-archive-item bg-white p-lg rounded shadow-sm mb-lg d-md-flex gap-lg align-items-center">
                                    <div class="c-archive-item__image col-md-4 px-0">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid rounded' ) ); ?>
                                        <?php else : ?>
                                            <img src="https://picsum.photos/seed/dentarchive/400/300" class="img-fluid rounded" alt="Thumb">
                                        <?php endif; ?>
                                    </div>
                                    <div class="c-archive-item__content col-md-8 pt-md pt-md-0">
                                        <div class="small text-primary mb-sm"><?php the_category( ', ' ); ?></div>
                                        <h3 class="h5 mb-md"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></h3>
                                        <p class="small text-muted mb-md"><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
                                        <div class="small text-muted"><?php echo get_the_date(); ?></div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                            
                            <?php the_posts_pagination( array( 'class' => 'c-pagination-wrapper' ) ); ?>
                        <?php else : ?>
                            <p><?php esc_html_e( 'No posts found in this archive.', 'careme' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-4 mt-xl mt-lg-0">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
