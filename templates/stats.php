<?php
/**
 * Stats Section
 *
 * @package Careme
 */

$stats = array(
    array( 'label' => __( 'Happy Patients', 'careme' ), 'target' => 5000, 'suffix' => '+' ),
    array( 'label' => __( 'Expert Doctors', 'careme' ), 'target' => 25, 'suffix' => '' ),
    array( 'label' => __( 'Years Experience', 'careme' ), 'target' => 15, 'suffix' => '+' ),
    array( 'label' => __( 'Awards Won', 'careme' ), 'target' => 12, 'suffix' => '' ),
);
?>

<section id="stats" class="c-stats py-lg bg-primary text-white">
    <div class="container">
        <div class="c-stats__grid">
            <?php foreach ( $stats as $stat ) : ?>
                <div class="c-stat-item text-center">
                    <div class="c-stat-item__number h2">
                        <span class="js-counter" data-target="<?php echo esc_attr( $stat['target'] ); ?>">0</span><?php echo esc_html( $stat['suffix'] ); ?>
                    </div>
                    <div class="c-stat-item__label"><?php echo esc_html( $stat['label'] ); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
