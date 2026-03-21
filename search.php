<?php
/**
 * The template for displaying search results
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
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'careme' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
            </div>
        </div>
    </section>

    <div class="c-blog-body py-xl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php if ( have_posts() ) : ?>
                        <div class="c-search-results">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <article class="c-search-item py-md border-bottom">
                                    <h3 class="h5 mb-sm"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="small text-muted mb-sm"><?php the_excerpt(); ?></div>
                                    <a href="<?php the_permalink(); ?>" class="small font-weight-bold"><?php esc_html_e( 'View Result →', 'careme' ); ?></a>
                                </article>
                            <?php endwhile; ?>
                            
                            <div class="mt-xl">
                                <?php the_posts_pagination(); ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="c-no-results text-center py-xl">
                            <div class="h2 text-muted mb-md">🕵️‍♂️</div>
                            <h2 class="h4"><?php esc_html_e( 'Nothing Found', 'careme' ); ?></h2>
                            <p class="mb-xl"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'careme' ); ?></p>
                            <div class="max-400 mx-auto">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
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
