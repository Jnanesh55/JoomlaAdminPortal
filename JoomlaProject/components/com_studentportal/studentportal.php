<?php
defined('_JEXEC') or die('Restricted access');

include_once(dirname(__FILE__) .'/includes/menubar.php');
include_once(dirname(__FILE__) .'/includes/navbar.php');

require_once(JPATH_COMPONENT.DS.'controller.php');

$controller = new StudentPortalController();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
