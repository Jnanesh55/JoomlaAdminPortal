<?php
defined('_JEXEC') or die('ACCESS DENIED');

?>
<div class="bodyy">
    <div class="container">
        <h2><i>Change Profile Picture</i></h2>
        <div id="drop-area">
        <form action="index.php?option=com_studentportal&task=update_photo" method="post" enctype="multipart/form-data">
            <label><i>Drag & Drop your new profile picture here <strong>"or"</strong> Click here to add</i><br><img src="https://cdn-icons-png.flaticon.com/512/5733/5733887.png" alt="imgadd"/></label><br>
            <input type="file" name="new_profile_image" id="fileElem" accept="image/*"><br><br><br>
            </div><br>
            <div id="file-name-display" style="margin-top: 10px; margin-left:50px; color:black;"></div><br>
             <input type="submit" value="Update Picture">
        </form>
    </div>
</div>