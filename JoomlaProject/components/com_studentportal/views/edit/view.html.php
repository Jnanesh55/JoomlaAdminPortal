<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');


class StudentPortalViewEdit extends JView
{
    function display($tpl = null)
    {

        JHTML::stylesheet('editstyle.css', 'components/com_studentportal/assets/css/');
        JHTML::script('validate.js', 'components/com_studentportal/assets/js/');

        $id = JRequest::getInt('id');

        // Get model
        $model = $this->getModel();  // Don't manually load the model, let Joomla inject it

        // Fetch student data
        $student = $model->getStudentById($id);

        // Pass data to the view
        $this->assignRef('student', $student);

        parent::display($tpl);
       
    }
}
