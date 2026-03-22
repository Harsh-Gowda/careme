<?php
/**
 * The template for displaying the blog index (Home)
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="c-page-header py-xl bg-primary text-white">
        <div class="container">
            <div class="c-page-header__content text-center py-lg">
                <h1 class="c-page-header__title display-4 font-weight-bold"><?php esc_html_e( 'Health Library', 'careme' ); ?></h1>
                <p class="lead opacity-75 mt-md mx-auto" style="max-width: 700px;"><?php esc_html_e( 'Expert advice, late news, and comprehensive guides for your oral health journey.', 'careme' ); ?></p>
            </div>
        </div>
    </section>

    <div class="c-blog-body py-xl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="c-post-grid row g-4">
                        <?php
                        // Mocking blog posts for demonstration
                        for ( $i = 1; $i <= 4; $i++ ) : ?>
                            <div class="col-md-6">
                                <article class="c-post-card h-100 shadow-sm border rounded overflow-hidden bg-white">
                                    <div class="c-post-card__image ratio ratio-16x9">
                                        <img src="https://picsum.photos/seed/dental<?php echo $i; ?>/800/450" alt="Post thumbnail" loading="lazy">
                                    </div>
                                    <div class="c-post-card__content p-lg d-flex flex-column h-100">
                                        <div class="c-post-card__meta mb-sm small text-primary font-weight-bold">
                                            <?php esc_html_e( 'HEALTH TIPS', 'careme' ); ?>
                                        </div>
                                        <h3 class="h5 mb-md">
                                            <a href="#" class="text-dark text-decoration-none hover-primary">
                                                <?php echo ( $i == 1 ) ? __( 'How to Maintain a Bright Smile During the Holidays', 'careme' ) : __( 'The Connection Between Oral Health and Heart Disease', 'careme' ); ?>
                                            </a>
                                        </h3>
                                        <p class="text-muted small flex-grow-1">
                                            <?php esc_html_e( 'Discover essential tips for keeping your teeth white and healthy even during the most festive times of the year...', 'careme' ); ?>
                                        </p>
                                        <div class="c-post-card__footer mt-lg pt-md border-top d-flex justify-content-between align-items-center">
                                            <span class="small text-muted">Mar 21, 2024</span>
                                            <a href="#" class="btn btn--link p-0 text-primary font-weight-bold small">
                                                <?php esc_html_e( 'Read More →', 'careme' ); ?>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endfor; ?>
                    </div>
                    
                    <!-- Pagination Placeholder -->
                    <nav class="c-pagination mt-xl py-md border-top d-flex justify-content-center">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><span class="page-link">Prev</span></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-xl mt-lg-0">
                    <div class="ps-lg border-start d-none d-lg-block">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="d-lg-none mt-xl">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
