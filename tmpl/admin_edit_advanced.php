<?php
/**
 * @version 1.0.1
 * @package Perfect Easy & Powerful Contact Form
 * @copyright © 2014 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU/GPL http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */

// No direct access
function_exists('add_action') or die;

?>
<h3>
    <?php _e( 'These are really advanced options. That is why they are not only in Advanced Tab, but also hidden below. Change them only if you do know what you are doing.', 'pwebcontact' ); ?>
</h3>

<div class="pweb-advanced-options">
    <a href="#" class="pweb-advanced-options-toggler">
        <i class="glyphicon glyphicon-cog"></i> <span><?php _e( 'Advanced', 'pwebcontact' ); ?></span> <i class="glyphicon glyphicon-chevron-down"></i>
    </a>
    <div class="pweb-advanced-options-content">

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'moduleclass_sfx',
            'label' => 'Contact Form CSS class',
            'tooltip' => 'Add additional CSS class name to contact form container.'
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'rtl',
            'label' => 'Enable RTL',
            'tooltip' => 'Set Yes to enable Right to Left text direction. Use Auto mode if you have multi-language site with RTL languages.',
            'default' => 2,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                ),
                array(
                    'value' => 2,
                    'name' => 'Auto'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_jquery',
            'label' => 'Load WordPress jQuery',
            'header' => 'jQuery',
            'tooltip' => 'Disable this option only if you have already loaded jQuery with other extension. Required.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_jquery_ui',
            'label' => 'Load WordPress jQuery UI',
            'tooltip' => 'It is being loaded only if needed. Disable this option only if you have already loaded jQuery UI with other extension. Required for transitions effects and for Uploader.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_jquery_validate',
            'label' => 'Load jQuery Validate',
            'tooltip' => 'Disable this option only if you have already loaded jQuery Validate Plugin with other extension. Required.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_jquery_fileupload',
            'label' => 'Load jQuery File Upload',
            'tooltip' => 'It is being loaded only if needed. Disable this option only if you have already loaded jQuery File Upload Plugin with other extension. Required for files uploader.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_jquery_cookie',
            'label' => 'Load jQuery Cookie',
            'tooltip' => 'It is being loaded only if needed. Disable this option only if you have already loaded jQuery Cookie Plugin with other extension. Required for auto-popup counter.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>


        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'bootstrap_version',
            'label' => 'Bootstrap version',
            'header' => 'Bootstrap',
            'tooltip' => 'Select version of Bootstrap to work with.',
            'default' => 2,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 2,
                    'name' => '2.3.2',
                    'is_parent' => true
                ),
                array(
                    'value' => 3,
                    'name' => '3.x'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_bootstrap',
            'label' => 'Load Bootstrap JS',
            'tooltip' => 'Disable this option only if you have already loaded Bootstrap JavaScript with other extension. Required.',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'load_bootstrap_css',
            'label' => 'Load Bootstrap CSS',
            'tooltip' => 'Disable this option only if you have already loaded Bootstrap CSS with other extension. If your template breaks because of loaded Bootstrap then set legacy option to load only required styles which would work only for contact form. Required.',
            'default' => 2,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                ),
                array(
                    'value' => 2,
                    'name' => 'Only required styles'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'boostrap_glyphicons',
            'label' => 'Load Bootstrap 3 Glyphicons',
            'default' => 1,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'boostrap2_glyphicons',
            'label' => 'Disable Bootstrap 2 Glyphicons',
            'tooltip' => 'Enable this option if your WP theme has own icons and you can see two icons over themselves.',
            'default' => 0,
            'class' => 'pweb-radio-group',
            'parent' => array('bootstrap_version_2'),
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'demo',
            'label' => 'Demo mode',
            'header' => 'Demo',
            'tooltip' => 'Sends email message to User only.',
            'default' => 0,
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes'
                )
            )
        )); ?>
        
    </div>
</div>