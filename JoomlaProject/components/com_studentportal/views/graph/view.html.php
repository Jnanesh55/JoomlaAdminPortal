<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');
jimport('joomla.application.component.model');

class StudentPortalViewGraph extends JView
{
    function display($tpl = null)
    {
        JHTML::stylesheet('graphstyle.css', 'components/com_studentportal/assets/css/');
          //JModel::addIncludePath(JPATH_COMPONENT.DS.'models');
    $model = JModel::getInstance('Student', 'StudentPortalModel');
       $numbers = $model->getState();
       $this->assignRef('statedata', $numbers);
        parent::display($tpl);
    }
}
