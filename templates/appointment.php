<?php
/**
 * Appointment Form Section
 *
 * @package Careme
 */
?>

<section id="appointment" class="c-appointment py-xl">
    <div class="container">
        <div class="c-appointment__wrapper d-flex flex-wrap align-items-center">
            <div class="c-appointment__content col-md-6">
                <h2 class="section-title"><?php esc_html_e( 'Book Your Appointment', 'careme' ); ?></h2>
                <p class="section-subtitle mb-lg"><?php esc_html_e( 'Take the first step towards a healthier, brighter smile. Fill out the form below and our team will get back to you shortly.', 'careme' ); ?></p>
                <ul class="c-appointment__info list-unstyled">
                    <li><strong><?php esc_html_e( 'Call Us:', 'careme' ); ?></strong> +1 234 567 890</li>
                    <li><strong><?php esc_html_e( 'Email:', 'careme' ); ?></strong> contact@careme-dental.com</li>
                    <li><strong><?php esc_html_e( 'Address:', 'careme' ); ?></strong> 123 Healthcare Blvd, Medical District</li>
                </ul>
            </div>

            <div class="c-appointment__form-container col-md-6">
                <form action="#" method="post" class="c-form js-appointment-form">
                    <div class="c-form__row">
                        <div class="c-form__group">
                            <label for="app_name" class="c-form__label"><?php esc_html_e( 'Full Name', 'careme' ); ?></label>
                            <input type="text" id="app_name" name="app_name" class="c-form__input" required>
                        </div>
                        <div class="c-form__group">
                            <label for="app_email" class="c-form__label"><?php esc_html_e( 'Email Address', 'careme' ); ?></label>
                            <input type="email" id="app_email" name="app_email" class="c-form__input" required>
                        </div>
                    </div>

                    <div class="c-form__row">
                        <div class="c-form__group">
                            <label for="app_phone" class="c-form__label"><?php esc_html_e( 'Phone Number', 'careme' ); ?></label>
                            <input type="tel" id="app_phone" name="app_phone" class="c-form__input" required>
                        </div>
                        <div class="c-form__group">
                            <label for="app_service" class="c-form__label"><?php esc_html_e( 'Service Group', 'careme' ); ?></label>
                            <select id="app_service" name="app_service" class="c-form__input">
                                <option value="general"><?php esc_html_e( 'General Dentistry', 'careme' ); ?></option>
                                <option value="ortho"><?php esc_html_e( 'Orthodontics', 'careme' ); ?></option>
                                <option value="cosmetic"><?php esc_html_e( 'Cosmetic Surgery', 'careme' ); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="c-form__group">
                        <label for="app_message" class="c-form__label"><?php esc_html_e( 'Additional Message', 'careme' ); ?></label>
                        <textarea id="app_message" name="app_message" class="c-form__input c-form__input--textarea"></textarea>
                    </div>

                    <div class="c-form__group c-form__group--checkbox">
                        <input type="checkbox" id="app_privacy" name="app_privacy" class="c-form__checkbox" required>
                        <label for="app_privacy" class="c-form__label-checkbox">
                            <?php esc_html_e( 'I agree to the privacy policy and data processing terms.', 'careme' ); ?>
                        </label>
                    </div>

                    <button type="submit" class="c-btn c-btn--primary w-100"><?php esc_html_e( 'Schedule Appointment', 'careme' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</section>
