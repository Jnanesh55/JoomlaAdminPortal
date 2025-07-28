<?php

defined("_JEXEC") or die("Access denied");
jimport('joomla.application.component.view');

class StudentPortalViewFrontpage extends JView{

    function display($tpl = null){

        // $document = JFactory::getDocument();
        // $document->addStyleSheet(JURI::root().'components/com_studentportal/assets/css/frontpage.css');
        parent::display($tpl);
    }
}