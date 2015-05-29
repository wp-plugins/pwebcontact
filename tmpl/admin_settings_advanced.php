<?php
/**
 * @version 2.0.13
 * @package Perfect Easy & Powerful Contact Form
 * @copyright © 2015 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU/GPL http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */

// No direct access
function_exists('add_action') or die;

?>

<?php echo $this->_get_field(array(
	'type' => 'radio',
	'name' => 'feed',
	'group' => 'settings',
	'label' => 'Updates feed',
	'header' => 'Updates',
	'tooltip' => 'Display news and special offers from Perfect-Web.co website in administration panel of this extension.',
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
    'type' => 'text',
    'name' => 'dlid',
    'group' => 'settings',
    'label' => 'Download ID',
    'desc' => sprintf(__('Enter download ID which you can get at %s website, if you have purchased PRO version. If you have active subscription, then your plugin will be automatically updated. To use this feature you have to install PRO version first.', 'pwebcontact'), '<a href="https://www.perfect-web.co/login" target="_blank">Perfect-Web.co</a>')
)); ?>