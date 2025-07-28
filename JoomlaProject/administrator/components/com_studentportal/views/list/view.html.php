<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class StudentPortalViewList extends JView
{
    function display($tpl = null)
    {
        JHTML::stylesheet('style.css', 'components/com_studentportal/assets/css/');

        $model = $this->getModel('student');
        $this->assignRef('students', $model->getStudents());

        parent::display($tpl);
    }
}
