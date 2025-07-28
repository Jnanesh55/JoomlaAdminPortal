<?php
defined('_JEXEC') or die('Restricted access');

$db =& JFactory::getDBO();
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$confirmPassword = trim($_POST['confirm_password']);


$hashedPassword = md5($password); 

// Check if user already exists
$query = "SELECT COUNT(*) FROM login WHERE username = " . $db->quote($username);
$db->setQuery($query);
$exists = $db->loadResult();

if ($exists) {
    echo "<script>alert('Username already taken. Choose a different one.'); window.history.back();</script>";
    exit();
}
$profileImageName = '';
if (!empty($_FILES['profile_image']['name'])) {
    $uploadDir = JPATH_COMPONENT . DS . 'assets' . DS . 'profileimages';
    if (!file_exists($uploadDir))
         mkdir($uploadDir);

    $ext = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
    $profileImageName = time() . '_' . basename($_FILES['profile_image']['name']);
    $targetPath = $uploadDir . DS . $profileImageName;

    move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetPath);
}

// Insert new user
$query = "INSERT INTO login (username, password,profile_image) VALUES (" .
         $db->quote($username) . ", " . $db->quote($hashedPassword) . ",".$db->quote($profileImageName).")";
$db->setQuery($query);
$db->query();

// Redirect to login page
JFactory::getApplication()->redirect('index.php?option=com_studentportal&view=login');
?>
