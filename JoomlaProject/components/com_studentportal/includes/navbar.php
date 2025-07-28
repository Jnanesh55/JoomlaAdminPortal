<?php
defined('_JEXEC') or die('Restricted access');

$base = JURI::base();
$view = JRequest::getCmd('view');

$session = JFactory::getSession();
$loginUser = $session->get('login_user');

$profileImage = ($loginUser && $loginUser->profile_image)
    ? $base . 'components/com_studentportal/assets/profileimages/' . $loginUser->profile_image
    : $base . 'components/com_studentportal/assets/img/profile.png';

if (in_array($view, array('home','edit','form','graph','piechart','about','calender'))) {
?>
<div class="back">
<div id="profile-container">
  <!-- <div class="head">
    <h1>Student Portal</h1>
  </div> -->

    <div class="sidebar">
    <img src="<?php echo JURI::base(); ?>components/com_studentportal/assets/img/user-gear.png" alt="Logo"/>
  </div>
  <div class="search">
    <input type="text" placeholder="Search here.....">
  </div>


  <div class="mode" onclick="toggleDarkMode()">
   <img src="<?php echo $base; ?>components/com_studentportal/assets/img/dark-mode.png" alt="mode" title="mode" />
  </div>
  <div class="notification">
    <img src="<?php echo $base; ?>components/com_studentportal/assets/img/notification.png" alt="Notification" title="View Notifications" />
  </div>

 <div class="profile-icon" onclick="toggleProfileMenu()">
    <img src="<?php echo $profileImage; ?>" alt="Profile" title="<?php echo $loginUser ? $loginUser->username : 'User'; ?>"/>
  </div>

  <div id="profile-menu" class="profile-dropdown">
    <a href="#">Change Photo</a>
    <!-- <a href="#" onclick="toggleDarkMode()">Change Mode</a> -->
    <a href="#">Settings</a>
    <a href="index.php?option=com_studentportal&view=login">Logout</a>
  </div>
</div>

</div>

<link rel="stylesheet" href="<?php echo $base; ?>components/com_studentportal/assets/css/navbar.css" />
<script src="<?php echo $base; ?>components/com_studentportal/assets/js/navbar.js"></script>
<script src="<?php echo $base; ?>components/com_studentportal/assets/js/darkmode.js"></script>

<?php
} // END if view is one of frontpage, login, signup, home
?>

