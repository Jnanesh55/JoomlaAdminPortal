<?php defined('_JEXEC') or die('Restricted access'); ?>

<?php
// Joomla DB connection
$db = JFactory::getDBO();
$query = "SELECT id, firstname, lastname, mobile FROM #__students ORDER BY id";
$db->setQuery($query);
$rows = $db->loadObjectList();
?>
<!-- <div class="welcome-container">
<h1 style="color: blue; text-align:center;">Welcome to Admins Portal!...</h1>
</div> -->

<button class="top-right-btn" onclick="window.location.href='index.php?option=com_studentportal&view=form'">
    Create Profile
</button>
 

<div>
      <button id="link" >Download Excel</button>
    <h2 style='color:black'>Registered Students</h2>
    <table id='example' class='uk-table uk-table-hover uk-table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $student): ?>
                <tr>
                    <td><?php echo $student->id; ?></td>
                    <td><?php echo $student->firstname . ' ' . $student->lastname; ?></td>
                    <td><?php echo $student->mobile; ?></td>
                    <td><button class="view-btn" data-id="<?php echo $student->id; ?>">View</button></td>
                    <td><a href="index.php?option=com_studentportal&view=edit&id=<?php echo $student->id; ?>"><button
                                id="btn2">Update</button></a></td>
                    <td><a href="index.php?option=com_studentportal&task=delete&id=<?php echo $student->id; ?>"
                            onclick="return confirm('Are you sure?')"><button id="btn3">Delete</button></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div id="viewModal" style="display:none; position:fixed; top:10%; left:50%; transform:translateX(-50%);
 background:white; padding:20px; border-radius:10px; box-shadow:0 0 10px gray; width: 500px; z-index:1000;">
    <h2 class="heading">Student Details</h2>
    <div id="modalContent">Loading...</div>
    <button id="btn1" onclick="closeModal()">Close</button>
    <button id="btn4" onclick="downloadpdf()">Download PDF</button>
      
</div>

<div id="overlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
 background:rgba(0,0,0,0.5); z-index:999;" onclick="closeModal()"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('viewModal');
        const overlay = document.getElementById('overlay');
        const modalContent = document.getElementById('modalContent');
        let currentPersonId = null;

        window.closeModal = function () {
            modal.style.display = 'none';
            overlay.style.display = 'none';
        };

        document.querySelectorAll('.view-btn').forEach(button => {
            button.addEventListener('click', () => {
                const personel_id = button.getAttribute('data-id');
                currentPersonId = personel_id;

                modal.style.display = 'block';
                overlay.style.display = 'block';

                fetch(`index.php?option=com_studentportal&task=view&id=${personel_id}&tmpl=component`)
                    .then(response => response.text())
                    .then(data => {
                        modalContent.innerHTML = data;
                    });
            });
        });

        window.downloadpdf = function () {
            if (currentPersonId) {
                window.open(`index.php?option=com_studentportal&task=download&id=${currentPersonId}`, '_blank');
            } else {
                alert("No student selected.");
            }
        }
  
        document.getElementById('link').addEventListener('click', function() {
    window.open('index.php?option=com_studentportal&task=exportexcel', '_blank');
        });

            
        jQuery.noConflict();
        jQuery(document).ready(function ($) {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    'print'
                ]
            });
              

});

    });
</script>  