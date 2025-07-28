<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class StudentPortalModelStudentDetails extends JModel
{
    function getStudent( $id )
    {
       $db = JFactory::getDbo();

       $id = (int) $id;

       $query = "SELECT*FROM #__students WHERE id = ".$db->Quote( $id );

       $db->setQuery( $query );

       $result = $db->loadAssoc();

       return $result;
    }
}