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