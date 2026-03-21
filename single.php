<?php
/**
 * The template for displaying all single posts
 *
 * @package Careme
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'c-single-post py-xl' ); ?>>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Post Header -->
                        <div class="c-post-header text-center mb-xl">
                            <div class="c-post-meta mb-sm text-primary font-weight-bold">
                                <?php the_category( ', ' ); ?>
                            </div>
                            <h1 class="c-post-title display-5 mb-lg"><?php the_title(); ?></h1>
                            <div class="c-post-meta-details text-muted small d-flex justify-content-center gap-md">
                                <span>By <?php the_author(); ?></span>
                                <span>•</span>
                                <span><?php echo get_the_date(); ?></span>
                                <span>•</span>
                                <span><?php echo careme_get_icon( 'clock' ); ?> 5 min read</span>
                            </div>
                        </div>

                        <!-- Featured Image -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="c-post-featured-image rounded shadow-lg overflow-hidden mb-xl">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid w-100' ) ); ?>
                            </div>
                        <?php else: ?>
                            <div class="c-post-featured-image rounded shadow-lg overflow-hidden mb-xl">
                                <img src="https://picsum.photos/seed/healthpost/1200/600" alt="Featured" class="img-fluid w-100">
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <!-- Article Content -->
                            <div class="col-lg-8">
                                <div class="c-post-content entry-content">
                                    <?php
                                    if ( empty( get_the_content() ) ) {
                                        echo '<p><strong>' . esc_html__( 'Introduction:', 'careme' ) . '</strong> ' . esc_html__( 'Maintaining good oral health is about more than just a bright smile. It is an essential component of your overall well-being. Modern dentistry offers more ways than ever to keep your teeth and gums healthy for a lifetime.', 'careme' ) . '</p>';
                                        echo '<h2>' . esc_html__( 'Top 5 Tips for Daily Care', 'careme' ) . '</h2>';
                                        echo '<ul>
                                                <li>' . esc_html__( 'Brush twice daily with fluoride toothpaste.', 'careme' ) . '</li>
                                                <li>' . esc_html__( 'Floss every single day without exception.', 'careme' ) . '</li>
                                                <li>' . esc_html__( 'Limit sugary snacks and acidic beverages.', 'careme' ) . '</li>
                                                <li>' . esc_html__( 'Replace your toothbrush every 3 months.', 'careme' ) . '</li>
                                                <li>' . esc_html__( 'Visit your dentist twice a year.', 'careme' ) . '</li>
                                              </ul>';
                                        echo '<p>' . esc_html__( 'Regular checkups allow your dentist to catch potential problems early, saving you from complex treatments later.', 'careme' ) . '</p>';
                                    } else {
                                        the_content();
                                    }
                                    ?>
                                </div>

                                <div class="c-post-tags mt-xl pt-lg border-top">
                                    <?php the_tags( '<span class="text-muted mr-sm">Tags:</span> ', ' ', '' ); ?>
                                </div>
                                
                                <!-- Related Posts Placeholder -->
                                <div class="c-related-posts mt-xl pt-xl bg-light p-lg rounded">
                                    <h4 class="mb-lg"><?php esc_html_e( 'Related Articles', 'careme' ); ?></h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <div class="d-flex align-items-center gap-sm">
                                                    <img src="https://picsum.photos/seed/dent1/100/100" class="rounded" alt="Thumb">
                                                    <h6 class="mb-0 small line-clamp-2"><?php esc_html_e( 'The Future of Invisible Braces', 'careme' ); ?></h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <div class="d-flex align-items-center gap-sm">
                                                    <img src="https://picsum.photos/seed/dent2/100/100" class="rounded" alt="Thumb">
                                                    <h6 class="mb-0 small line-clamp-2"><?php esc_html_e( 'Pediatric Dentistry: First Visits', 'careme' ); ?></h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Sidebar -->
                            <div class="col-lg-4">
                                <div class="ps-lg sticky-top" style="top: 100px;">
                                    <?php get_sidebar(); ?>
                                    
                                    <div class="c-author-box mt-xl p-lg bg-white shadow-sm border rounded text-center">
                                        <img src="https://i.pravatar.cc/100?u=dr" class="rounded-circle mb-md" alt="Author">
                                        <h5 class="mb-sm">Dr. Sarah Miller</h5>
                                        <p class="small text-muted mb-md"><?php esc_html_e( 'Clinical Lead at Careme Dental with 15+ years of experience in restorative dentistry.', 'careme' ); ?></p>
                                        <a href="#" class="btn btn--outline btn--sm w-100"><?php esc_html_e( 'Follow Author', 'careme' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
