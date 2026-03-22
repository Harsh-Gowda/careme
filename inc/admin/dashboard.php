<?php
/**
 * Theme Admin Dashboard
 *
 * @package Careme
 */

// Register the menu page
add_action( 'admin_menu', 'careme_register_theme_dashboard' );
function careme_register_theme_dashboard() {
    add_theme_page(
        __( 'CareMe Theme', 'careme' ), // Page title
        __( 'CareMe', 'careme' ),       // Menu title
        'manage_options',               // Capability
        'careme-dashboard',             // Menu slug
        'careme_theme_dashboard_html'   // Callback function
    );
}

// Render the page HTML
function careme_theme_dashboard_html() {
    // Check user capabilities
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    
    // Get active tab from URL, default to 'dashboard'
    $active_tab = isset( $_GET['tab'] ) ? sanitize_text_field( wp_unslash( $_GET['tab'] ) ) : 'dashboard';
    
    // Enqueue some basic admin styles if needed here
    ?>
    <div class="wrap careme-dashboard-wrap">
        <div class="careme-header">
            <div class="careme-header-left">
                <h1><?php esc_html_e( 'CareMe Theme', 'careme' ); ?> <span class="version">1.1.0</span></h1>
            </div>
            <div class="careme-header-right">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'Visit Site', 'careme' ); ?></a>
            </div>
        </div>

        <h2 class="nav-tab-wrapper">
            <a href="?page=careme-dashboard&tab=dashboard" class="nav-tab <?php echo $active_tab == 'dashboard' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Dashboard', 'careme' ); ?>
            </a>
            <a href="?page=careme-dashboard&tab=templates" class="nav-tab <?php echo $active_tab == 'templates' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Starter Templates', 'careme' ); ?>
            </a>
            <a href="?page=careme-dashboard&tab=plugins" class="nav-tab <?php echo $active_tab == 'plugins' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Plugins', 'careme' ); ?>
            </a>
            <a href="?page=careme-dashboard&tab=changelog" class="nav-tab <?php echo $active_tab == 'changelog' ? 'nav-tab-active' : ''; ?>">
                <?php esc_html_e( 'Changelog', 'careme' ); ?>
            </a>
        </h2>

        <div class="careme-dashboard-content">
            <?php if ( $active_tab == 'dashboard' ) : ?>
                <div class="careme-grid">
                    <!-- Global Colors -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Global Colors', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Setup the base color scheme for your site.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=colors' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                    <!-- Branding -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Branding', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Upload your logo and site title/tagline settings.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                    <!-- Header Layout -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Header Layout', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Select from Standard, Centered, or Pearl Minimal headers.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=careme_header_section' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                    <!-- Footer Layout -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Footer Layout', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Customize the columns and widget areas in various configurations.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=careme_footer_section' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                    <!-- Home Hero Options -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Hero Section', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Modify the home page hero text and background options.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=careme_hero_section' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                    <!-- Typography Defaults -->
                    <div class="careme-card">
                        <h3><?php esc_html_e( 'Typography', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Review your base fonts and serif headings configuration.', 'careme' ); ?></p>
                        <a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="careme-link"><?php esc_html_e( 'Customize', 'careme' ); ?></a>
                    </div>
                </div>

                <div class="careme-sidebar">
                    <div class="careme-sidebar-widget">
                        <h3><?php esc_html_e( 'Web Creators Community', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Join our community of fellow CareMe users creating effective dental websites! Share your site, ask a question and help others.', 'careme' ); ?></p>
                        <a href="#" class="careme-link"><?php esc_html_e( 'Join our Facebook Group', 'careme' ); ?></a>
                    </div>
                    <div class="careme-sidebar-widget">
                        <h3><?php esc_html_e( 'Video Tutorials', 'careme' ); ?></h3>
                        <p><?php esc_html_e( 'Want a guide? We have video tutorials to walk you through getting started.', 'careme' ); ?></p>
                        <a href="#" class="careme-link"><?php esc_html_e( 'Watch Videos', 'careme' ); ?></a>
                    </div>
                </div>

            <?php elseif ( $active_tab == 'templates' ) : ?>
                <div class="careme-templates-header bg-white p-xl" style="padding: 30px; margin-bottom: 24px; border: 1px solid #ccd0d4; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,.04);">
                    <h3 style="font-size: 1.5rem; margin-top: 0;"><?php esc_html_e( 'Available Starter Templates', 'careme' ); ?></h3>
                    <p style="color: #50575e; font-size: 1.05rem;"><?php esc_html_e( 'Select a pre-built website demo below. Importing a template will set up pages, menus, customizer settings, and sample content for you instantly.', 'careme' ); ?></p>
                </div>

                <div class="careme-templates-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px;">
                    <!-- Template 1: Pearl Luxe -->
                    <div class="careme-template-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.04); position: relative;">
                        <span class="careme-badge" style="position: absolute; top: 15px; right: 15px; background: #D6C9AD; color: #fff; padding: 4px 10px; font-size: 0.75rem; font-weight: bold; border-radius: 4px; text-transform: uppercase;">Featured</span>
                        <div class="careme-template-image" style="background-color: #f1f1f1; height: 220px; border-bottom: 1px solid #ccd0d4; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 3rem; color: #ccc;">✨</span>
                        </div>
                        <div class="careme-template-info" style="padding: 24px;">
                            <h4 style="margin: 0 0 8px; font-size: 1.2rem; font-weight: 600; font-family: 'Cormorant Garamond', serif;">Pearl Luxe Clinic</h4>
                            <p style="margin: 0 0 20px; color: #50575e; font-size: 0.9rem;">High-end, premium aesthetic for luxury dental spas. Features muted gold accents and serif typography.</p>
                            <div style="display: flex; gap: 10px;">
                                <a href="<?php echo esc_url( home_url( '/?h=v3&f=v3' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Activate Design', 'careme' ); ?></a>
                                <a href="<?php echo esc_url( home_url( '/?h=v3&f=v3' ) ); ?>" target="_blank" class="button"><?php esc_html_e( 'Preview Live', 'careme' ); ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Template 2: Modern Dental -->
                    <div class="careme-template-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.04);">
                        <div class="careme-template-image" style="background-color: #e3f2fd; height: 220px; border-bottom: 1px solid #ccd0d4; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 3rem; color: #90caf9;">🏢</span>
                        </div>
                        <div class="careme-template-info" style="padding: 24px;">
                            <h4 style="margin: 0 0 8px; font-size: 1.2rem; font-weight: 600;">Modern Dental</h4>
                            <p style="margin: 0 0 20px; color: #50575e; font-size: 0.9rem;">Clean, corporate, and trustworthy blue-centric design perfect for established practices.</p>
                            <div style="display: flex; gap: 10px;">
                                <a href="<?php echo esc_url( home_url( '/?h=v1&f=v1' ) ); ?>" class="button button-secondary"><?php esc_html_e( 'Activate Design', 'careme' ); ?></a>
                                <a href="<?php echo esc_url( home_url( '/?h=v1&f=v1' ) ); ?>" target="_blank" class="button"><?php esc_html_e( 'Preview Live', 'careme' ); ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Template 3: Family Practice -->
                    <div class="careme-template-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,.04);">
                        <div class="careme-template-image" style="background-color: #e8f5e9; height: 220px; border-bottom: 1px solid #ccd0d4; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 3rem; color: #a5d6a7;">👨‍👩‍👧‍👦</span>
                        </div>
                        <div class="careme-template-info" style="padding: 24px;">
                            <h4 style="margin: 0 0 8px; font-size: 1.2rem; font-weight: 600;">Family Practice</h4>
                            <p style="margin: 0 0 20px; color: #50575e; font-size: 0.9rem;">Friendly, welcoming layouts with soft rounded edges and warm, inviting color palettes.</p>
                            <div style="display: flex; gap: 10px;">
                                <a href="<?php echo esc_url( home_url( '/?h=v2&f=v2' ) ); ?>" class="button button-secondary"><?php esc_html_e( 'Activate Design', 'careme' ); ?></a>
                                <a href="<?php echo esc_url( home_url( '/?h=v2&f=v2' ) ); ?>" target="_blank" class="button"><?php esc_html_e( 'Preview Live', 'careme' ); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif ( $active_tab == 'plugins' ) : ?>
                <div class="careme-plugins-header bg-white p-xl" style="padding: 30px; margin-bottom: 24px; border: 1px solid #ccd0d4; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,.04);">
                    <h3 style="font-size: 1.5rem; margin-top: 0;"><?php esc_html_e( 'Recommended Plugins', 'careme' ); ?></h3>
                    <p style="color: #50575e; font-size: 1.05rem;"><?php esc_html_e( 'Increase your website functionality by installing these highly recommended plugins. These are fully compatible with your CareMe theme.', 'careme' ); ?></p>
                </div>

                <div class="careme-plugins-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
                    <!-- Plugin 1 -->
                    <div class="careme-plugin-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.04); display: flex; flex-direction: column;">
                        <div style="display: flex; align-items: center; margin-bottom: 15px; gap: 15px;">
                            <div style="width: 50px; height: 50px; background: #92003B; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 24px;">E</div>
                            <h4 style="margin: 0; font-size: 1.2rem;">Elementor Builder</h4>
                        </div>
                        <p style="color: #50575e; font-size: 0.9rem; margin-bottom: 20px; flex-grow: 1;">The world's leading drag & drop page builder. Required to easily edit CareMe custom templates.</p>
                        <button class="button button-primary" disabled><?php esc_html_e( 'Install & Activate', 'careme' ); ?></button>
                    </div>

                    <!-- Plugin 2 -->
                    <div class="careme-plugin-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.04); display: flex; flex-direction: column;">
                        <div style="display: flex; align-items: center; margin-bottom: 15px; gap: 15px;">
                            <div style="width: 50px; height: 50px; background: #e27730; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 24px;">W</div>
                            <h4 style="margin: 0; font-size: 1.2rem;">WPForms Lite</h4>
                        </div>
                        <p style="color: #50575e; font-size: 0.9rem; margin-bottom: 20px; flex-grow: 1;">The most beginner-friendly WordPress drag & drop contact form builder to generate leads.</p>
                        <button class="button button-primary" disabled><?php esc_html_e( 'Install & Activate', 'careme' ); ?></button>
                    </div>

                    <!-- Plugin 3 -->
                    <div class="careme-plugin-card bg-white" style="border: 1px solid #ccd0d4; border-radius: 4px; padding: 24px; box-shadow: 0 1px 3px rgba(0,0,0,.04); display: flex; flex-direction: column;">
                        <div style="display: flex; align-items: center; margin-bottom: 15px; gap: 15px;">
                            <div style="width: 50px; height: 50px; background: #0073aa; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 24px;">📅</div>
                            <h4 style="margin: 0; font-size: 1.2rem;">Dental Booking Pro</h4>
                        </div>
                        <p style="color: #50575e; font-size: 0.9rem; margin-bottom: 20px; flex-grow: 1;">A powerful appointment booking engine specifically designed for medical and dental clinics.</p>
                        <button class="button" disabled><?php esc_html_e( 'Active', 'careme' ); ?></button>
                    </div>
                </div>
            <?php elseif ( $active_tab == 'changelog' ) : ?>
                <div class="careme-changelog" style="margin-top: 20px; padding: 40px; background: #fff; border: 1px solid #ccd0d4; box-shadow: 0 1px 1px rgba(0,0,0,.04); border-radius: 4px;">
                    <h3 style="font-size: 1.5rem; border-bottom: 1px solid #eee; padding-bottom: 15px;"><?php esc_html_e( 'Changelog', 'careme' ); ?></h3>
                    
                    <div style="margin-top: 20px;">
                        <h4 style="font-size: 1.2rem; color: #1d2327;">Version 1.1.0 <span style="font-size: 0.8rem; font-weight: normal; color: #8c8f94; margin-left: 10px;">March 2024</span></h4>
                        <ul style="list-style-type: disc; margin-left: 20px; color: #50575e;">
                            <li><strong>New:</strong> Pearl Luxe Minimal design integration</li>
                            <li><strong>New:</strong> Interactive Client Selection Dashboard</li>
                            <li><strong>New:</strong> Theme Admin Dashboard UI</li>
                            <li><strong>Update:</strong> Premium typography and styling for core dental blocks</li>
                        </ul>
                    </div>

                    <div style="margin-top: 40px;">
                        <h4 style="font-size: 1.2rem; color: #1d2327;">Version 1.0.0</h4>
                        <ul style="list-style-type: disc; margin-left: 20px; color: #50575e;">
                            <li>Initial release of the CareMe Dental/Medical Theme</li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <style>
        .careme-dashboard-wrap {
            max-width: 1200px;
            margin: 20px auto;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }
        .careme-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 24px 30px;
            margin-bottom: 20px;
            border: 1px solid #ccd0d4;
            box-shadow: 0 1px 3px rgba(0,0,0,.04);
            border-radius: 4px;
        }
        .careme-header h1 {
            margin: 0;
            font-size: 1.6em;
            color: #1d2327;
            font-weight: 600;
        }
        .careme-header .version {
            font-size: 0.6em;
            background: #eef0f2;
            padding: 3px 8px;
            border-radius: 4px;
            vertical-align: middle;
            color: #50575e;
            margin-left: 10px;
        }
        .nav-tab-wrapper {
            border-bottom: 1px solid #c3c4c7;
            margin: 0;
            padding-top: 9px;
            padding-bottom: 0;
            line-height: normal;
        }
        .nav-tab {
            font-size: 15px;
            font-weight: 600;
            padding: 10px 15px;
        }
        .careme-dashboard-content {
            display: flex;
            gap: 24px;
            margin-top: 24px;
        }
        .careme-dashboard-content > .careme-grid {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            align-content: start;
        }
        .careme-dashboard-content > .careme-sidebar {
            width: 320px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .careme-card, .careme-sidebar-widget {
            background: #fff;
            border: 1px solid #ccd0d4;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,.04);
            border-radius: 4px;
            transition: box-shadow 0.2s;
        }
        .careme-card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,.05);
        }
        .careme-card h3, .careme-sidebar-widget h3 {
            margin-top: 0;
            font-size: 1.1em;
            color: #1d2327;
            margin-bottom: 12px;
        }
        .careme-card p, .careme-sidebar-widget p {
            color: #50575e;
            font-size: 0.95em;
            margin-bottom: 20px;
            min-height: 48px;
            line-height: 1.5;
        }
        .careme-link {
            text-decoration: none;
            color: #2271b1;
            font-weight: 500;
            display: inline-block;
        }
        .careme-link:hover {
            text-decoration: underline;
            color: #135e96;
        }
        @media (max-width: 900px) {
            .careme-dashboard-content {
                flex-direction: column;
            }
            .careme-dashboard-content > .careme-sidebar {
                width: 100%;
            }
        }
    </style>
    <?php
}
