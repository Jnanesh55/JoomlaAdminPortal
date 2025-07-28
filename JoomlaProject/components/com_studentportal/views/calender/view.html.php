<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StudentPortalViewCalender extends JView {
    function display($tpl = null) {
        // Load CSS
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/calendar.css');
        
        // Load JS
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/calendar.js');
        
        parent::display($tpl);
    }
}