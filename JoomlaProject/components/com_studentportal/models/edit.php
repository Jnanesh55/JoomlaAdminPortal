<?php
 defined('_JEXEC') or die('Restriced access');

 jimport('joomla.application.component.view');

 class StudentPortalModelEdit extends JModel{

    function getStudentById($id){
       $db = JFactory::getDbo();
      $query = "SELECT * FROM #__students WHERE id = " . (int) $id;
       $db->setQuery($query);
       return $db->loadAssoc();
    }

    function update(){
        $db = JFactory::getDbo();
        $id = JRequest::getInt('personel_id');
        $firstname = $db->Quote(JRequest::getString('firstname'));
         $lastname = $db->Quote(JRequest::getString('lastname'));
        $email = $db->Quote(JRequest::getString('email'));
        $mobile = $db->Quote(JRequest::getString('mobile'));
        $dob = $db->Quote(JRequest::getString('dob'));
        $gender = $db->Quote(JRequest::getString('gender'));
        $address = $db->Quote(JRequest::getString('address'));
        $state = $db->Quote(JRequest::getString('state'));
        $collagename = $db->Quote(JRequest::getString('collagename'));
        $branch = $db->Quote(JRequest::getString('branch'));
        $year = $db->Quote(JRequest::getString('year'));

        $tenthh = $db->Quote(JRequest::getString('tenthh'));
        $twelveth = $db->Quote(JRequest::getString('twelveth'));

        $skills = JRequest::getVar('skills',array(),'post','array');
        $skills_csv = $db->Quote(implode(',', $skills));

        $interests = JRequest::getVar('interests', array(), 'post', 'array');
        $interests_csv = $db->Quote(implode(",", $interests));

        
        $query = "UPDATE #__students SET
            firstname = $firstname,
            lastname = $lastname,
            email = $email,
            mobile = $mobile,
            dob = $dob,
            gender = $gender,
            address = $address,
            state = $state,
            collagename = $collagename,
            branch = $branch,
            year = $year,
            tenthh = $tenthh,
            twelveth =$twelveth,
            skills = $skills_csv,
            interests = $interests_csv
            WHERE id = $id";

        $db->setQuery($query);
        return $db->query();
    }

     function delete($id)
    {
        $db = JFactory::getDBO();
        $id = (int) $id; // now it's defined properly

        $query = "DELETE FROM #__students WHERE id = " . $db->Quote($id);
        $db->setQuery($query);
        return $db->query(); // return result to check success/failure
    }
 }