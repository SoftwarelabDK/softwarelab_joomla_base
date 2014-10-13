<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks

//$doc->addScript('templates/' .$this->template. '/js/softwarebase.js');

// Add current user information
$user = JFactory::getUser();


?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>


</head>
<body>
<jdoc:include type="modules" name="position-2" /> 
<jdoc:include type="component" />
<jdoc:include type="modules" name="bottom" />

<link rel="stylesheet/less" type="text/css" href="templates/softwarelab_joomla_base/less/softwarelab.less" />

<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js" type="text/javascript"></script>
</body>
</html>
