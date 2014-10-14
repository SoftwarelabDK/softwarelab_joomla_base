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
<!--
    ##########################################
    ## Softwarelab ApS                      ##
    ## 5000 Odense C                        ##
    ## Danmark                              ##
    ## software@softwarelab.dk              ##
    ## http://www.softwarelab.dk            ##
    ## Designer: Softwarelab                ##
    ## Dato: November 2014                  ##
    ## Version: 1.0                         ##
    ##########################################
-->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="templates/softwarelab_joomla_base/less/template.less" />
</head>
<body>
<!-- Direct Template Image -->
<div class="col-md-12 logo">
	<a href="index.php"><img src="<?php echo $this->baseurl; ?>/templates/softwarelab_joomla_base/images/logo.png" alt="Custom image" class="customImage" /></a>
</div>
<!-- Default Boostrap Menu  -->
<div class="col-md-12 softmenu">
	<nav class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="topnav">
			<jdoc:include type="modules" name="softmenu" />  <!-- Put your menu position to 'softmenu' -->
		</div>
	</nav>
</div>
<!-- Costum HTML -->
<div class="col-md-12 swl">
	<h1>THANK YOU FOR USING <br/><b>Softwarelab Joomla Base Template.</b></h1>
	<h2>Feel free to fork at <a href="https://github.com/SoftwarelabDK/softwarelab_joomla_base"><i class="fa fa-github">Github</i></a></h2>
	<h3>Or visit us at <a href="http//www.softwarelab.dk">www.softwarelab.dk</a></h3>
</div>
<!-- Article Container -->
<div class="article_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
		</div>
	</div>
</div>
<!-- Example Costum Module -->
<?php if ($this->countModules('modulename')) : ?>
	<div class="module_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<w:module name="modulename" />
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
</body>
<!-- ADD scripts here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
