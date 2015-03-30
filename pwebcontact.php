<?php 
/**
 * Plugin Name: Perfect Easy & Powerful Contact Form
 * Plugin URI: http://www.perfect-web.co/wordpress/contact-form
 * Description: Easy for beginners, customizable for pros!
 * Version: 2.0.10
 * Text Domain: pwebcontact
 * Author: Piotr Moćko
 * Author URI: http://www.perfect-web.co
 * License: GNU/GPL http://www.gnu.org/licenses/gpl-3.0.html
 */

// No direct access
function_exists('add_action') or die;

// Do not use any PHP 5.3+ syntax in this file

if (version_compare($GLOBALS['wp_version'], '3.5', '>=') AND version_compare(PHP_VERSION, '5.3', '>=')) {

    require_once dirname( __FILE__ ) . '/site.php';
    
    if ( is_admin() ) {

        if (defined( 'DOING_AJAX' )) {

            add_action('wp_ajax_pwebcontact_sendEmail', array('PWebContact', 'sendEmailAjax'));
            add_action('wp_ajax_nopriv_pwebcontact_sendEmail', array('PWebContact', 'sendEmailAjax'));

            add_action('wp_ajax_pwebcontact_checkCaptcha', array('PWebContact', 'checkCaptchaAjax'));
            add_action('wp_ajax_nopriv_pwebcontact_checkCaptcha', array('PWebContact', 'checkCaptchaAjax'));

            add_action('wp_ajax_pwebcontact_uploader', array('PWebContact', 'uploaderAjax'));
            add_action('wp_ajax_nopriv_pwebcontact_uploader', array('PWebContact', 'uploaderAjax'));

            add_action('wp_ajax_pwebcontact_getToken', array('PWebContact', 'getTokenAjax'));
            add_action('wp_ajax_nopriv_pwebcontact_getToken', array('PWebContact', 'getTokenAjax'));
        }
        else {

            require_once dirname( __FILE__ ) . '/install.php';
            require_once dirname( __FILE__ ) . '/admin.php';

            register_activation_hook( __FILE__, 'pwebcontact_install' );
            register_uninstall_hook( __FILE__, 'pwebcontact_uninstall' );
        }
    } 
    else {

        add_action('init', array('PWebContact', 'init'));

        add_action('wp_footer', array('PWebContact', 'displayFormsInFooter'), 100);

        add_shortcode('pwebcontact', array('PWebContact', 'displayFormByShortcode'));
    }

    require_once dirname( __FILE__ ) . '/widget.php';
}
else {
    
    function pwebcontact_requirements_notice() {
        ?>
        <div class="error">
            <p><?php printf(__( 'Perfect Easy & Powerful Contact Form plugin requires WordPress %s and PHP %s', 'pwebcore' ), '3.5+', '5.3+'); ?></p>
        </div>
        <?php
    }
    add_action( 'admin_notices', 'pwebcontact_requirements_notice' );
}
