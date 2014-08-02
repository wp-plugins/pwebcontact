<?php
/**
 * @version 1.0.0
 * @package Perfect Easy & Powerful Contact Form
 * @copyright © 2014 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU/GPL http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */

// No direct access
function_exists('add_action') or die;

?>

<h3 class="pweb-steps">
    <?php printf(__('Step %d of %d', 'pwebcontact'), 3, 4); ?>
    -
    <?php _e('Choose predefined theme', 'pwebcontact'); ?>
    
    <?php echo $this->_get_field_control(array(
        'type' => 'filelist',
        'group' => 'load',
        'name' => 'theme',
        'filter' => '\.(jpg|png)$',
        'directory' => 'media/theme_settings',
        'strip_ext' => true,
        'default' => 'blue-white',
        'attributes' => array(
            'data-action' => admin_url( 'admin.php?page=pwebcontact&task=load_theme&ajax=1&_wpnonce='. wp_create_nonce('load-theme') )
        ),
        'options' => array(
                array(
                    'name' => '- Select -',
                    'value' => ''
                )
            )
    )); ?>
    
    <?php _e('or create it in advanced options ', 'pwebcontact'); ?>
    
    <button class="button button-primary pweb-next-tab-button" type="button">
        <?php _e( 'Next', 'pwebcontact' ); ?> <i class="glyphicon glyphicon-chevron-right"></i>
    </button>
</h3>


<?php if (!defined('PWEBCONTACT_PRO')) : ?>
<div id="pweb_theme_warning" class="pweb-alert pweb-alert-info" style="display:none">
    <?php _e('You need to go PRO :)', 'pwebcontact'); ?>
    <?php _e('You have chosen theme with some PRO options. You can still save your form, but to display it buy PRO Version', 'pwebcontact'); ?>
    <button class="button button-primary pweb-buy">
         <?php _e( 'Buy', 'pwebcontact' ); ?>
    </button>
</div>
<?php endif; ?>


<div id="pweb-theme-preview">
    <p>
        <a href="#" class="button button-primary">
            <?php _e( 'Load settings for this theme', 'pwebcontact' ); ?>
        </a>
    </p>
    <img src="<?php echo plugins_url('pwebcontact/media/theme_settings/blue-white.png'); ?>" alt="<?php _e('Theme preview', 'pwebcontact'); ?>">
</div>

<div id="pweb-dialog-theme" title="<?php esc_attr_e( 'Load theme settings', 'pwebcontact' ); ?>" style="display:none">
    <p><?php _e( 'Are you sure you want to load settings for selected theme? It would change your current theme settings.', 'pwebcontact' ); ?></p>
</div>



<div class="pweb-advanced-options">
    <a href="#" class="pweb-advanced-options-toggler">
        <i class="glyphicon glyphicon-cog"></i> <span><?php _e( 'Advanced', 'pwebcontact' ); ?></span> <i class="glyphicon glyphicon-chevron-down"></i>
    </a>
    <div class="pweb-advanced-options-content">

        <?php echo $this->_get_field(array(
            'type' => 'filelist',
            'name' => 'style_toggler',
            'label' => 'Toggler style',
            'header' => 'Toggler',
            'tooltip' => 'If you want to change colors of Toggler Tab then edit or upload new CSS file to directory: `wp-content/plugins/pwebcontact/media/css/toggler`.',
            'default' => 'blue',
            'filter' => '\.css$',
            'directory' => 'media/css/toggler',
            'strip_ext' => true,
            'parent' => array('handler_tab', 'handler_button'),
            'options' => array(
                array(
                    'value' => -1,
                    'name' => '- Do not use -'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'toggler_bg',
            'label' => 'Custom color of Toggler',
            'tooltip' => 'Select background color of Toggler Tab.',
            'parent' => array('handler_tab', 'handler_button')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'toggler_color',
            'label' => 'Custom color of Toggler text',
            'tooltip' => 'Select text color of Toggler Tab',
            'parent' => array('handler_tab', 'handler_button')
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'filelist',
            'name' => 'style_form',
            'label' => 'Buttons and fields style',
            'header' => 'Buttons and fields',
            'tooltip' => 'If you want to change colors of buttons, fields and links then edit or upload new CSS file to directory: `wp-content/plugins/pwebcontact/media/css/form`.',
            'default' => 'blue',
            'filter' => '\.css$',
            'directory' => 'media/css/form',
            'strip_ext' => true,
            'options' => array(
                array(
                    'value' => -1,
                    'name' => '- Do not use -'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'buttons_fields_color',
            'label' => 'Custom color of buttons, fields and links',
            'tooltip' => 'Select color of buttons background, fields borders and links text color'
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'buttons_text_color',
            'label' => 'Custom color of buttons text',
            'tooltip' => 'Select color of buttons text'
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'filelist',
            'name' => 'style_bg',
            'label' => 'Background style',
            'header' => 'Background',
            'default' => 'white',
            'tooltip' => 'If you want to change colors of background then edit or upload new CSS file to directory: `wp-content/plugins/pwebcontact/media/css/background`.',
            'filter' => '\.css$',
            'directory' => 'media/css/background',
            'strip_ext' => true,
            'options' => array(
                array(
                    'value' => -1,
                    'name' => '- Do not use -'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'bg_color',
            'label' => 'Custom color of form background and opacity',
        )); ?>

        <?php echo $this->_get_field_control(array(
            'type' => 'select',
            'name' => 'bg_opacity',
            'default' => 0.9,
            'options' => array(
                array('value' => 0.1),
                array('value' => 0.2),
                array('value' => 0.3),
                array('value' => 0.4),
                array('value' => 0.5),
                array('value' => 0.6),
                array('value' => 0.7),
                array('value' => 0.8),
                array('value' => 0.9),
                array('value' => 1.0)
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'text_color',
            'label' => 'Custom color of form text',
            'tooltip' => 'Select color of text'
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'rounded',
            'label' => 'Display rounded corners',
            'header' => 'Shape',
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

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'shadow',
            'label' => 'Display shadow',
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



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'labels_position',
            'label' => 'Labels position',
            'header' => 'Labels',
            'tooltip' => 'Select placement of fields labels. For mobile devices (phones) labels inline are displayed above fields.',
            'default' => 'above',
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 'inline',
                    'name' => 'Inline with field',
                    'is_parent' => true
                ),
                array(
                    'value' => 'above',
                    'name' => 'Above field'
                ),
                array(
                    'value' => 'over',
                    'name' => 'Inside field as placeholder'
                )
            )
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'form_width',
            'label' => 'Form width [px, %]',
            'header' => 'Form size',
            'tooltip' => 'Width of form is also a width of Lightbox window. If you want to maximize the window then set 100%.',
            'class' => 'pweb-filter-unit pweb-input-mini'
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'labels_width',
            'label' => 'Labels width [%]',
            'tooltip' => 'Set labels width in percents.',
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => 'labels_position_inline'
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'image',
            'name' => 'bg_image',
            'label' => 'Background image',
            'header' => 'Background image',
            'tooltip' => 'Enter URL of image which will be shown in background of contact form. Image will not be repeated.',
            'class' => 'pweb-filter-url pweb-input-xlarge'
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'select',
            'name' => 'bg_position',
            'label' => 'Background image alignment',
            'tooltip' => 'Select position of background image: horizontal vertical.',
            'options' => array(
                array('value' => '', 'name' => '- Use default -'),
                array('value' => 'left top'),
                array('value' => 'left center'),
                array('value' => 'left bottom'),
                array('value' => 'right top'),
                array('value' => 'right center'),
                array('value' => 'right bottom'),
                array('value' => 'center top'),
                array('value' => 'center center'),
                array('value' => 'center bottom')
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'select',
            'name' => 'bg_padding_position',
            'label' => 'Form padding',
            'tooltip' => 'Select where you want to create space for background image.',
            'options' => array(
                array(
                    'value' => '',
                    'name' => '- Disabled -'
                ),
                array(
                    'value' => 'left',
                    'name' => 'Left'
                ),
                array(
                    'value' => 'right',
                    'name' => 'Right'
                ),
                array(
                    'value' => 'top',
                    'name' => 'Top'
                ),
                array(
                    'value' => 'bottom',
                    'name' => 'Bottom'
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'bg_padding',
            'label' => 'Padding value [px, %]',
            'tooltip' => 'Size of space for background image.',
            'class' => 'pweb-filter-unit pweb-input-mini'
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'color',
            'name' => 'modal_bg',
            'label' => 'Lightbox backdrop color',
            'header' => 'Lightbox backdrop',
            'tooltip' => 'Color of background layer under Lightbox window.',
            'parent' => array('layout_type_modal')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'select',
            'name' => 'modal_opacity',
            'label' => 'Lightbox backdrop opacity',
            'tooltip' => 'Transparency of background layer under Lightbox window.',
            'default' => -1,
            'parent' => array('layout_type_modal'),
            'options' => array(
                array('value' => -1, 'name' => '- Use default -'),
                array('value' => 0, 'name' => 'Hide'),
                array('value' => 0.1),
                array('value' => 0.2),
                array('value' => 0.3),
                array('value' => 0.4),
                array('value' => 0.5),
                array('value' => 0.6),
                array('value' => 0.7),
                array('value' => 0.8),
                array('value' => 0.9),
                array('value' => 1.0)
            )
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'toggler_width',
            'label' => 'Toggler width [px]',
            'header' => 'Toggler',
            'tooltip' => 'Toggler Tab width in pixels (without unit), e.g. 100. Leave blank for enabled vertical toggler.',
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('handler_tab', 'handler_button')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'toggler_height',
            'label' => 'Toggler height [px]',
            'tooltip' => 'Toggler Tab height in pixels (without unit), e.g. 20. Leave blank for disabled vertical toggler.',
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('handler_tab', 'handler_button')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'toggler_font_size',
            'label' => 'Toggler font size',
            'tooltip' => 'Size of Toggler font, e.g. 12px, 10pt, 100%',
            'class' => 'pweb-filter-unit pweb-input-mini',
            'parent' => array('handler_tab', 'handler_button')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'toggler_font_family',
            'label' => 'Toggler font family',
            'tooltip' => 'Name of font used for Toggler. Separate multiple names with coma and wrap name which contains space with single quote.',
            'parent' => array('toggler_vertical_0')
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'form_font_size',
            'label' => 'Form font size',
            'header' => 'Form font',
            'tooltip' => 'Size of form font, e.g. 12px, 10pt, 100%',
            'class' => 'pweb-filter-unit pweb-input-mini'
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'form_font_family',
            'label' => 'Form font family',
            'tooltip' => 'Name of font used for form. Separate multiple names with coma and wrap name which contains space with single quote.'
        )); ?>

    </div>
</div>