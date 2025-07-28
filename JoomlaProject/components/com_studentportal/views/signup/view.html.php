<?php

defined("_JEXEC") or die("Access denied");

jimport('joomla.application.component.view');

class StudentPortalViewSignUp extends JView{

    function display($tpl = null){
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::root().'components\com_studentportal\assets/css/signup.css');
        parent::display($tpl);
    }
}