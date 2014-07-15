<?php
/**
 * @version 1.0.0
 * @package Perfect Easy & Powerful Contact Form
 * @copyright © 2014 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license Perfect Web License http://www.perfect-web.co/license
 * @author Piotr Moćko
 */

// No direct access
function_exists('add_action') or die;

?>

<?php echo $this->_get_field(array(
    'type' => 'radio',
    'name' => 'handler',
    'label' => 'How do you want to display your form before it is opened?',
    'class' => 'pweb-related',
    'default' => 'tab',
    'required' => true,
    'options' => array(
        array(
            'value' => 'button',
            'name' => 'Toggler Button',
            'class' => 'pweb-layout_type-button pweb-related-accordion pweb-related-modal-button',
            'is_parent' => true
        ),
        array(
            'value' => 'tab',
            'name' => 'Toggler Tab',
            'class' => 'pweb-layout_type-tab pweb-related-slidebox pweb-related-modal',
            'is_parent' => true
        ),
        array(
            'value' => 'static',
            'name' => 'Always opened inside page content or sidebar',
            'class' => 'pweb-layout_type-static pweb-related-static'
        ),
        array(
            'value' => 'hidden',
            'name' => 'Hidden before opening',
            'class' => 'pweb-layout_type-hidden pweb-related-modal pweb-related-accordion pweb-related-slidebox pweb-related-modal-button'
        )
    )
)); ?>



<?php echo $this->_get_field(array(
    'type' => 'text',
    'name' => 'toggler_name',
    'label' => 'Define text shown on Toggler Tab or Button',
    'default' => 'Contact form',
    'parent' => array('handler_button', 'handler_tab')
)); ?>

<div class="pweb-advanced-options">
    <a href="#" class="pweb-advanced-options-toggler">
        <i class="glyphicon glyphicon-cog"></i> <span><?php _e( 'Advanced', 'pwebcontact' ); ?></span> <i class="glyphicon glyphicon-chevron-down"></i>
    </a>
    <div class="pweb-advanced-options-content">
        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'toggler_position',
            'label' => 'Toggler Tab position',
            'parent' => 'handler_tab',
            'default' => 'left',
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 'left',
                    'name' => 'Left',
                    'after' => '<br><span class="pwebposition-left"><span></span><span>&varr;</span></span>',
                    'is_parent' => true
                ),
                array(
                    'value' => 'right',
                    'name' => 'Right',
                    'after' => '<br><span class="pwebposition-right"><span></span><span>&varr;</span></span>',
                    'is_parent' => true
                ),
                array(
                    'value' => 'top:left',
                    'name' => 'Top left',
                    'after' => '<br><span class="pwebposition-top-left"><span></span><span>&harr;</span></span>'
                ),
                array(
                    'value' => 'top:right',
                    'name' => 'Top right',
                    'after' => '<br><span class="pwebposition-top-right"><span></span><span>&harr;</span></span>'
                ),
                array(
                    'value' => 'bottom:left',
                    'name' => 'Bottom left',
                    'after' => '<br><span class="pwebposition-bottom-left"><span></span><span>&harr;</span></span>'
                ),
                array(
                    'value' => 'bottom:right',
                    'name' => 'Bottom right',
                    'after' => '<br><span class="pwebposition-bottom-right"><span></span><span>&harr;</span></span>'
                )
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'offset',
            'label' => 'Position offset [px, %]',
            'tooltip' => 'Set length of red arrow in above `Toggler Tab position` with unit, e.g. 150px, 25%',
            'class' => 'pweb-filter-unit pweb-input-mini',
            'parent' => array('layout_type_slidebox', 'handler_tab')
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'zindex',
            'label' => 'Layer level (CSS z-index)',
            'tooltip' => 'Default level is 1030. If contact form appears under menu or other layers then enlarge default value.',
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('layout_type_slidebox', 'layout_type_modal')
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'toggler_icon',
            'label' => 'Toggler icon',
            'header' => 'Toggler Tab',
            'tooltip' => 'Select source for Toggler Tab icon.',
            'default' => 0,
            'parent' => array('handler_tab', 'handler_button'),
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'Disabled'
                ),
                array(
                    'value' => 'glyphicon',
                    'name' => 'Glyphicons',
                    'is_parent' => true
                ),
                array(
                    'value' => 'gallery',
                    'name' => 'Gallery',
                    'is_parent' => true
                ),
                array(
                    'value' => 'custom',
                    'name' => 'Custom image',
                    'is_parent' => true
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'glyphicon',
            'name' => 'toggler_glyphicon',
            'label' => 'Glyphicons',
            'parent' => array('toggler_icon_glyphicon')
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'filelist',
            'name' => 'toggler_icon_gallery_image',
            'label' => 'Gallery icon',
            'tooltip' => 'Select image from directory: `wp-content/plugins/pwebcontact/media/images/icons`.',
            'filter' => '\.(jpg|png|gif)$',
            'directory' => 'media/images/icons',
            'parent' => array('toggler_icon_gallery')
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'image',
            'name' => 'toggler_icon_custom_image',
            'label' => 'Custom icon',
            'tooltip' => 'Enter URL with custom image file with icon for Toggler Tab.',
            'parent' => array('toggler_icon_custom'),
            'class' => 'pweb-input-xlarge'
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'toggler_vertical',
            'label' => 'Vertical Toggler Tab',
            'header' => 'Vertical Toggler Tab',
            'tooltip' => 'Flip toggler tab to vertical orientation.',
            'desc' => 'Default vertical text color is white, change it in `Layout` tab.<br>Reload browser cache on front-end to see changes.<br>If you see rectangles instead of letters then you have to use other `TTF font`.<br>If text is cut then enlarge height of toggler in `Layout` tab. Width leave blank.',
            'default' => 0,
            'parent' => array('toggler_position_left', 'toggler_position_right'),
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No',
                    'is_parent' => true
                ),
                array(
                    'value' => 1,
                    'name' => 'Yes',
                    'is_parent' => true,
                    'disabled' => $this->_check_image_text_creation() !== true
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'toggler_rotate',
            'label' => 'Rotate Toggler Tab text',
            'tooltip' => 'Rotate text by 90&deg; to the left or right.',
            'default' => 1,
            'parent' => array('toggler_vertical_1'),
            'options' => array(
                array(
                    'value' => -1,
                    'name' => '-90&deg; (counter-clockwise)' //TODO add utf8 rotate arrow
                ),
                array(
                    'value' => 1,
                    'name' => ' 90&deg; (clockwise)' //TODO add utf8 rotate arrow
                )
            )
        )); ?>

        <?php echo $this->_get_field(array(
            'type' => 'filelist',
            'name' => 'toggler_font',
            'label' => 'TTF font for vertical Toggler Tab text',
            'tooltip' => 'Select font from directory: `wp-content/plugins/pwebcontact/media/fonts`. If it does not support your language then upload there other font file.',
            'default' => 'NotoSans-Regular',
            'filter' => '\.ttf$',
            'directory' => 'media/fonts',
            'strip_ext' => true,
            'parent' => array('toggler_vertical_1')
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'open_toggler',
            'label' => 'Auto-open',
            'header' => 'Auto open and close',
            'tooltip' => 'Open contact form automatically after page has been loaded or when User scrolls down the page. On exit is experimental and might not work in old browsers.',
            'default' => 0,
            'parent' => array('layout_type_slidebox', 'layout_type_modal', 'layout_type_accordion'),
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'On load',
                    'is_parent' => true
                ),
                array(
                    'value' => 2,
                    'name' => 'On scroll',
                    'is_parent' => true
                ),
                array(
                    'value' => 3,
                    'name' => 'On exit',
                    'is_parent' => true
                )
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'open_delay',
            'label' => 'Auto-open delay [ms]',
            'tooltip' => 'Set delay in mili-seconds for auto-open, e.g. 1000 (1s delay). Set 0 for no delay.',
            'default' => 1000,
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('open_toggler_1', 'open_toggler_2', 'open_toggler_3')
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'open_count',
            'label' => 'Auto-open count',
            'tooltip' => 'Set number of auto-open times. Counter is incremented after page refresh. Set 0 for unlimited auto-popups. Information is stored in cookie and will be cleared when cookie expires.',
            'default' => 1,
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('open_toggler_1', 'open_toggler_2', 'open_toggler_3')
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'cookie_lifetime',
            'label' => 'Cookie lifetime [days]',
            'tooltip' => 'Set 0 that cookie would expire when the browser is closed or number of days after which cookie would expire.',
            'default' => 30,
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('open_toggler_1', 'open_toggler_2', 'open_toggler_3')
        )); ?>



        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'close_toggler',
            'label' => 'Auto-close',
            'tooltip' => 'Close contact form automatically after sending email',
            'default' => 0,
            'parent' => array('layout_type_slidebox', 'layout_type_modal', 'layout_type_accordion'),
            'class' => 'pweb-radio-group',
            'options' => array(
                array(
                    'value' => 0,
                    'name' => 'No'
                ),
                array(
                    'value' => 1,
                    'name' => 'On mail success',
                    'is_parent' => true
                )
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'text',
            'name' => 'close_delay',
            'label' => 'Auto-close delay [ms]',
            'tooltip' => 'Set delay in mili-seconds for auto-close, e.g. 1000 (1s delay). Set 0 to disable.',
            'default' => 0,
            'class' => 'pweb-filter-int pweb-input-mini',
            'parent' => array('close_toggler_1')
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'radio',
            'name' => 'close_other',
            'label' => 'Close other Perfect Contact Forms and Boxes',
            'tooltip' => 'Close all other Slide in Boxes and Accordion from Perfect-Web when opening another one.',
            'default' => 0,
            'parent' => array('layout_type_slidebox', 'layout_type_accordion'),
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
            'name' => 'modal_disable_close',
            'label' => 'Disable manual closing of Lightbox',
            'tooltip' => 'Hide close button of Lightbox window and disable closing when clicking backdrop. Window can only be closed with Auto-close event, page refresh or custom link.',
            'default' => 0,
            'parent' => array('layout_type_modal'),
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
            'type' => 'textarea',
            'name' => 'onload',
            'label' => 'JavaScript on load event',
            'header' => 'JavaScript events',
            'tooltip' => 'JavaScript code called on page load. Do not insert any HTML tags!',
            'class' => 'pweb-filter-javascript widefat',
            'attributes' => array(
                'rows' => 5,
                'cols' => 50
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'textarea',
            'name' => 'onopen',
            'label' => 'JavaScript on open event',
            'tooltip' => 'JavaScript code called on form open. Do not insert any HTML tags!',
            'class' => 'pweb-filter-javascript widefat',
            'parent' => array('layout_type_slidebox', 'layout_type_modal', 'layout_type_accordion'),
            'attributes' => array(
                'rows' => 5,
                'cols' => 50
            )
        )); ?>
        
        <?php echo $this->_get_field(array(
            'type' => 'textarea',
            'name' => 'onclose',
            'label' => 'JavaScript on close event',
            'tooltip' => 'JavaScript code called on form close. Do not insert any HTML tags!',
            'class' => 'pweb-filter-javascript widefat',
            'parent' => array('layout_type_slidebox', 'layout_type_modal', 'layout_type_accordion'),
            'attributes' => array(
                'rows' => 5,
                'cols' => 50
            )
        )); ?>
    </div>
</div>