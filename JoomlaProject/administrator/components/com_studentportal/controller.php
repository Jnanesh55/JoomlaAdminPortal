<?php
defined('_JEXEC') or die('Restricted access');

class StudentPortalController extends JController
{
    function display()
    {
        $view = JRequest::getCmd('view', 'form'); // default to form
           JRequest::setVar('view', $view);
           parent::display();
    }

    function submit()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('student');
        if ($model->store()) {
            $msg = "Student registered successfully.";
        } else {
            $msg = "Failed to register.";
        }

        $this->setRedirect('index.php?option=com_studentportal&view=list', $msg);
    }
}
