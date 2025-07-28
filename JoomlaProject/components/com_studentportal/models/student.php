<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');


class StudentPortalModelStudent extends JModel
{
    function getMarksData()
    {
        $db = JFactory::getDBO();
        $query = "SELECT CONCAT(firstname, ' ', lastname) AS name, tenthh,twelveth FROM #__students";
        $db->setQuery($query); 
        return $db->loadObjectList();
    }

    function getYear(){
        $db = JFactory::getDBO();
        $query = "SELECT year FROM #__students";
        $db->setQuery($query);
        return $db->loadObjectList();
    }

    function getBranch(){
        $db = JFactory::getDBO();
        $query = "SELECT branch FROM #__students";
        $db->setQuery($query);
        return $db->loadObjectList();
    }

    function getSk(){
        $db = JFactory::getDBO();
        $query = "SELECT skills,interests FROM #__students";
        $db->setQuery($query);  
        return $db->loadObjectList();
    }

    function getTable(){
    $db = JFactory::getDBO();
    $query = "SELECT CONCAT(firstname, ' ', lastname) AS name, email, gender, mobile, state, tenthh, twelveth FROM #__students";
    $db->setQuery($query);
    return $db->loadObjectList();
}

    function store()
    {
        $postData = JRequest::get('post');
        $mainframe = JFactory::getApplication();
        $row = JTable::getInstance('Student', 'Table');

        // Process skills and interests if they are arrays
        if (isset($postData['skills']) && is_array($postData['skills'])) {
            $postData['skills'] = implode(',', $postData['skills']);
        }
        if (isset($postData['interests']) && is_array($postData['interests'])) {
            $postData['interests'] = implode(',', $postData['interests']);
        }

        // No need for field name conversion - use exact names from form
        $row->state = isset( $postData['state'] ) ? $postData['state'] :'';
        $row->tenthh = isset($postData['tenthh']) ? $postData['tenthh'] : '';
        $row->twelveth = isset($postData['twelveth']) ? $postData['twelveth'] : '';

        // Bind and save
        if (!$row->bind($postData)) {
            JError::raiseWarning(500, "Binding failed: " . $row->getError());
            return false;
        }

        if (!$row->store()) {
            JError::raiseWarning(500, "DB save failed: " . $row->getError());
            return false;
        }

        $mainframe->redirect('index.php?option=com_studentportal&view=list');
        return true;
    }
    // For list view
    function getStudents()
    {
        $db = JFactory::getDBO();
        $query = "SELECT * FROM #__students ORDER BY id DESC";
        $db->setQuery($query);
        return $db->loadObjectList();

    }


}
