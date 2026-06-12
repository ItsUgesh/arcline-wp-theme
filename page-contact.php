<?php
// ============================================
// PROCESS FORM SUBMISSION
// ============================================
$success = false;
$error   = '';

if ( isset( $_POST['arcline_contact_submit'] ) ) {

    // Verify nonce for security
    if ( ! isset( $_POST['arcline_contact_nonce'] ) || 
         ! wp_verify_nonce( $_POST['arcline_contact_nonce'], 'arcline_contact_form' ) ) {
        $error = 'Security check failed. Please try again.';

    } else {

        // Sanitize inputs
        $name    = sanitize_text_field( $_POST['contact_name'] ?? '' );
        $email   = sanitize_email( $_POST['contact_email'] ?? '' );
        $subject = sanitize_text_field( $_POST['contact_subject'] ?? '' );
        $message = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

        // Validate
        if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
            $error = 'Please fill in all required fields.';
        } elseif ( ! is_email( $email ) ) {
            $error = 'Please enter a valid email address.';
        } else {

            // Send email
            $to      = get_option( 'admin_email' );
            $subject = $subject ? $subject : 'New Contact from Arcline Studio';
            $body    = "Name: {$name}\n";
            $body   .= "Email: {$email}\n\n";
            $body   .= "Message:\n{$message}";
            $headers = array(
                'Content-Type: text/plain; charset=UTF-8',
                "Reply-To: {$name} <{$email}>",
            );

            $sent = wp_mail( $to, $subject, $body, $headers );

            if ( $sent ) {
                $success = true;
            } else {
                $error = 'Something went wrong. Please try again.';
            }
        }
    }
}

get_header(); ?>

<div class="contact-wrapper">
    <div class="container">

        <!-- Page Header -->
        <div class="contact-header">
            <span class="section-tag">Get In Touch</span>
            <h1 class="contact-title">Let's Work Together</h1>
            <p class="contact-subtitle">
                Have a project in mind? We'd love to hear about it. 
                Send us a message and we'll get back to you within 24 hours.
            </p>
        </div>

        <div class="contact-inner">

            <!-- Contact Form -->
            <div class="contact-form-col">

                <?php if ( $success ) : ?>
                    <div class="form-success">
                        ✓ Message sent! We'll get back to you within 24 hours.
                    </div>
                <?php else : ?>

                    <?php if ( $error ) : ?>
                        <div class="form-error">
                            <?php echo esc_html( $error ); ?>
                        </div>
                    <?php endif; ?>

                    <form class="contact-form" method="POST" action="">

                        <?php wp_nonce_field( 'arcline_contact_form', 'arcline_contact_nonce' ); ?>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact_name">Full Name <span>*</span></label>
                                <input 
                                    type="text" 
                                    id="contact_name"
                                    name="contact_name" 
                                    placeholder="Your Name"
                                    value="<?php echo esc_attr( $_POST['contact_name'] ?? '' ); ?>"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <label for="contact_email">Email Address <span>*</span></label>
                                <input 
                                    type="email" 
                                    id="contact_email"
                                    name="contact_email" 
                                    placeholder="email@example.com"
                                    value="<?php echo esc_attr( $_POST['contact_email'] ?? '' ); ?>"
                                    required
                                >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact_subject">Subject</label>
                            <input 
                                type="text" 
                                id="contact_subject"
                                name="contact_subject" 
                                placeholder="Web Design Project"
                                value="<?php echo esc_attr( $_POST['contact_subject'] ?? '' ); ?>"
                            >
                        </div>

                        <div class="form-group">
                            <label for="contact_message">Message <span>*</span></label>
                            <textarea 
                                id="contact_message"
                                name="contact_message" 
                                rows="6" 
                                placeholder="Tell us about your project..."
                                required
                            ><?php echo esc_textarea( $_POST['contact_message'] ?? '' ); ?></textarea>
                        </div>

                        <button type="submit" name="arcline_contact_submit" class="btn btn-primary">
                            Send Message
                        </button>

                    </form>

                <?php endif; ?>

            </div><!-- /.contact-form-col -->

            <!-- Contact Details -->
            <div class="contact-details-col">

                <div class="contact-detail-card">
                    <div class="detail-icon">✉</div>
                    <h3 class="detail-title">Email Us</h3>
                    <p class="detail-text">
                        <a href="mailto:ugeshsimkhada@gmail.com">
                            ugeshsimkhada@gmail.com
                        </a>
                    </p>
                </div>

                <div class="contact-detail-card">
                    <div class="detail-icon">◎</div>
                    <h3 class="detail-title">Based In</h3>
                    <p class="detail-text">Berlin, Germany</p>
                </div>

                <div class="contact-detail-card">
                    <div class="detail-icon">◷</div>
                    <h3 class="detail-title">Response Time</h3>
                    <p class="detail-text">Within 24 hours</p>
                </div>

            </div><!-- /.contact-details-col -->

        </div><!-- /.contact-inner -->

    </div>
</div>

<?php get_footer(); ?>