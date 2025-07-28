<?php
defined('_JEXEC') or die('Restricted access');

class TableStudent extends JTable
{
    var $id = null;
    var $firstname = '';
    var $lastname = '';
    var $email = '';
    var $mobile = '';
    var $dob = '';
    var $gender = '';
    var $address = '';
    var $state = '';
    var $collagename = '';
    var $branch = '';
    var $year = '';
    var $tenthh = '';    
    var $twelveth = '';  
    var $skills = '';
    var $interests = '';

    function __construct(&$db)
    {
        parent::__construct('#__students', 'id', $db);
    }
}
