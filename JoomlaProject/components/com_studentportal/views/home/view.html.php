<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StudentPortalViewHome extends JView
{
    function display($tpl = null)
    {
        $document = JFactory::getDocument();



        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/jquery-3.7.1.min.js');

        $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/uikit.min.css');
        $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/dataTables.uikit.css');
       
        $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/dataTables.dataTables.css');
        $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/buttons.dataTables.css');


        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/uikit.min.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/dataTables.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/dataTables.uikit.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/dataTables.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/dataTables.buttons.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/buttons.dataTables.js');

        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/jszip.min.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/pdfmake.min.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/vfs_fonts.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/buttons.html5.min.js');
        $document->addScript(JURI::base() . 'components/com_studentportal/assets/js/buttons.print.min.js');


         $document->addStyleSheet(JURI::base() . 'components/com_studentportal/assets/css/homestyle.css');

        parent::display($tpl);
    }
}
