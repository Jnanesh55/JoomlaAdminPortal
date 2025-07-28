<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StudentPortalViewForm extends JView
{
    function display($tpl = null)
    {
        JHTML::stylesheet('style.css', 'components/com_studentportal/assets/css/');
        JHTML::script('validate.js', 'components/com_studentportal/assets/js/');
        parent::display($tpl);
    }
}
