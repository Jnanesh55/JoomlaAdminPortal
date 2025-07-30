<?php 
defined('_JEXEC') or die('ACESS DENY');

jimport('joomla.application.component.view');

class StudentPortalViewChangePhoto extends JView{

    function display($tpl = null){
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::root().'components/com_studentportal/assets/css/changephoto.css');
        $document->addScript(JURI::root().'components/com_studentportal/assets/js/changephoto.js');
        parent::display($tpl);
    }
}