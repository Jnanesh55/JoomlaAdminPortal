<?php

defined("_JEXEC") or die("REstricted Access");

jimport('joomla.application.component.view');

class StudentPortalViewLogin extends JView
{

    function display($tpl = null)
    {
        $document = JFactory::getDocument();
       $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/login.css');
        parent::display($tpl);
    }
}





