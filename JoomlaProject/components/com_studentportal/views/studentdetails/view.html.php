<?php
defined('_JEXEC') or die("ACCESS DENIED");

jimport('joomla.application.component.view');

class StudentPortalViewStudentDetails extends JView
{
    function display($tpl = null){
      $id = JRequest::getInt('id');

      $model = $this->getModel();
      $this->student = $model->getStudent($id);

      parent::display($tpl);
    }
}