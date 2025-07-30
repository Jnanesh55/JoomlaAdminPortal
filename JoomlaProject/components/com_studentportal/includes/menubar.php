<?php
$base = JURI::base();
$view = JRequest::getCmd('view');
if (in_array($view, array('home', 'edit', 'form', 'list', 'calender', 'about', 'graph','piechart'))) {

  ?>
  <div class="custom-sidebar">
    <div class="sidebar-header">
      <!-- <img src="<?php echo JURI::base(); ?>components/com_studentportal/assets/img/student.png" alt="Logo"
        class="sidebar-logo"> -->
      <h2 class="sidebar-title">Admins Portal</h2>
    </div>
    <ul class="sidebar-menu">
      <li><a href="index.php?option=com_studentportal&view=piechart">🏠 Dashboard</a></li>
         <li><a href="index.php?option=com_studentportal&view=home">📊 Manage Students</a></li>
      <li><a href="index.php?option=com_studentportal&view=calender">📅 Calendar</a></li>
      <li><a href="#">💬 Chats</a></li>

      <!-- <li class="dropdown"> -->
     
        <!-- <ul class="dropdown-content">
          <li><a href="index.php?option=com_studentportal&view=graph">10th & 12th Marks</a></li>
          <li><a href="index.php?option=com_studentportal&view=home">Students Information</a></li>
        </ul>
      </li> -->
      <li><a href="index.php?option=com_studentportal&view=graph">🌍 Map</a></li>
      <li><a href="index.php?option=com_user&view=login">🚪 Logout</a></li>
      <li><a href="index.php?option=com_studentportal&view=about">ℹ️ About Us</a></li>
    </ul>
  </div>
  <link rel="stylesheet" href="<?php echo $base; ?>components/com_studentportal/assets/css/menubar.css" />
  <link rel="stylesheet" href="<?php echo $base; ?>components/com_studentportal/assets/css/menudropdown.css" />

  <?php
}
?>