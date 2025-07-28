<?php
defined('_JEXEC') or die('Restricted access');
$db =& JFactory::getDBO();
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM login WHERE username=" . $db->quote($username) .
         " AND password=" . $db->quote($password);
$db->setQuery($query);
$user = $db->loadObject();

if ($user) {
    $session = JFactory::getSession();
    $session->set('login_user', $user);  // store user info (object)
    
    JFactory::getApplication()->redirect('index.php?option=com_studentportal&view=piechart');
} else {
    echo "<script>alert('Invalid Credentials'); window.history.back();</script>";
}
?>
