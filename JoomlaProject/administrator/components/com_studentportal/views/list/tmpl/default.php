<?php defined('_JEXEC') or die('Restricted access'); ?>

<h2 style="text-align:center;">Registered Students</h2>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead style="background-color:#4CAF50; color:white;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>DOB</th>
            <th>Gender</th>
            <th>College</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Skills</th>
            <th>Interests</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($this->students)) : ?>
            <?php foreach ($this->students as $student) : ?>
                <tr>
                    <td><?php echo $student->id; ?></td>
                    <td><?php echo $student->firstname . ' ' . $student->lastname; ?></td>
                    <td><?php echo $student->email; ?></td>
                    <td><?php echo $student->mobile; ?></td>
                    <td><?php echo $student->dob; ?></td>
                    <td><?php echo $student->gender; ?></td>
                    <td><?php echo $student->collagename; ?></td>
                    <td><?php echo $student->branch; ?></td>
                    <td><?php echo $student->year; ?></td>
                    <td><?php echo $student->skills; ?></td>
                    <td><?php echo $student->interests; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="11" style="text-align:center;">No students found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
