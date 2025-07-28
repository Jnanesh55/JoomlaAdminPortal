<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StudentPortalModelStudent extends JModel
{
    function store()
    {
        $row = JTable::getInstance('Student', 'Table');
        $data = JRequest::get('post');

        if (!$row->bind($data)) {
            return false;
        }

        if (!$row->check()) {
            return false;
        }

        if (!$row->store()) {
            return false;
        }

        return true;
    }
    function getStudents()
    {
        $db = JFactory::getDBO();
        $query = "SELECT * FROM #__students ORDER BY id DESC";
        $db->setQuery($query);
        return $db->loadObjectList();
    }

}
