<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StudentPortalModelStudentDelete extends JModel
{
    function delete($id)
    {
        $db = JFactory::getDBO();
        $id = (int) $id; // now it's defined properly

        $query = "DELETE FROM #__students WHERE id = " . $db->Quote($id);
        $db->setQuery($query);
        return $db->query(); // return result to check success/failure
    }
}
