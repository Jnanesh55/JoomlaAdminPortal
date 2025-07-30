<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');
class StudentPortalController extends JController
{
    function display()
    {
        $view = JRequest::getCmd('view', 'form');
        $view = JRequest::getCmd('view', 'list');
        $view = JRequest::getCmd('view', 'edit');
        $view = JRequest::getCmd('view', 'home');
        $view = JRequest::getCmd('view', 'login');
        $view = JRequest::getCmd('view', 'signup');
        $view = JRequest::getCmd('view', 'frontpage');
        $view = JRequest::getCmd('view', 'calender');
        $view = JRequest::getCmd('view', 'about');
        $view = JRequest::getCmd('view', 'graph');
        $view = JRequest::getCmd('view', 'piechart');
        $view = JRequest::getCmd('view', 'changephoto');
        $view = JRequest::getCmd('view', 'studentdetails');
        JRequest::setVar('view', $view);
        parent::display();
    }

    function login_submit()
    {
        require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'login_submit.php');
    }

    function signup_submit()
    {
        require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'signup_submit.php');
    }
    function update_photo()
    {
        require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'update_photo.php');
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
    function download()
    {
        require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'download.php');
        jexit(); // Important: prevent Joomla from continuing normal output
    }

    function downloadbms()
    {
       require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'downloadbms.php');
    }
    function exportexcel()
    {
        require_once(JPATH_COMPONENT . DS . 'tasks' . DS . 'exportexel.php');
        jexit(); // Important: prevent Joomla from continuing normal output
    }
    function edit()
    {
        $view = JRequest::getCmd('view', 'edit');
        JRequest::setVar('view', $view);
        parent::display();
    }

    function update()
    {
        $model = $this->getModel('edit');
        if ($model->update()) {
            $msg = "Student updated successfully.";
        } else {
            $msg = "Failed to update.";
        }
        $this->setRedirect('index.php?option=com_studentportal&view=home', $msg);
    }

    function delete()
    {
        $id = JRequest::getInt('id');
        $model = $this->getModel('studentdelete');
        if ($model->delete($id)) {
            $model = "Student Deleted Successfully";
        } else {
            $msg = "Failed in deletion";
        }
        $this->setRedirect('index.php?option=com_studentportal&view=home', $msg);
    }
}
