<?php
 defined('_JEXEC') or die('Access Denied');

$session = JFactory::getSession();
    $user = $session->get('login_user');

    if (!$user) {
        echo "<script>alert('Session expired. Please log in again.'); window.location.href='index.php?option=com_studentportal&view=login';</script>";
        exit();
    }

    if (!empty($_FILES['new_profile_image']['name'])) {
        $uploadDir = JPATH_COMPONENT . DS . 'assets' . DS . 'profileimages';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir);
        }

        $ext = pathinfo($_FILES['new_profile_image']['name'], PATHINFO_EXTENSION);
        $fileName = time() . '_' . basename($_FILES['new_profile_image']['name']);
        $targetPath = $uploadDir . DS . $fileName;

        move_uploaded_file($_FILES['new_profile_image']['tmp_name'], $targetPath);

        // Update DB
        $db =& JFactory::getDBO();
        $query = "UPDATE login SET profile_image = " . $db->quote($fileName) .
                 " WHERE username = " . $db->quote($user->username);
        $db->setQuery($query);
        $db->query();

        // Update session
        $user->profile_image = $fileName;
        $session->set('login_user', $user);

        JFactory::getApplication()->redirect('index.php?option=com_studentportal&view=home');
    } else {
        echo "<script>alert('No file selected.'); window.history.back();</script>";
    }
