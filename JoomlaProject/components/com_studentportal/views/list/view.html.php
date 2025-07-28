<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

require_once(JPATH_COMPONENT . DS . 'models' . DS . 'student.php');

class StudentPortalViewList extends JView
{
    function display($tpl = null)
    {
        JHTML::stylesheet('style.css', 'components/com_studentportal/assets/css/');

        $model = new StudentPortalModelStudent();
        $this->assignRef('students', $model->getStudents());
        JHTML::script('delay.js','components/com_studentportal/assets/js/');
        parent::display($tpl);
        

    }
}
