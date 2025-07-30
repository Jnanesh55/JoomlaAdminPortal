<?php
 define("_JEXEC","Access dnied");

?>
<button onclick="downloadbmspdf()">Download BMS PDF</button>

<script>
  window.downloadbmspdf = function(){
    window.open('index.php?option=com_studentportal&task=downloadbms')
  }
</script>