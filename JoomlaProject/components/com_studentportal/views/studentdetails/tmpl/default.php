<?php defined('_JEXEC') or die('Restricted access'); ?>

<!-- <h2>Student Details</h2> -->

<?php if ($this->student): ?>
    <p><strong>Name:</strong> <?php echo $this->student['firstname'] . ' ' . $this->student['lastname']; ?></p>
    <p><strong>Email:</strong> <?php echo $this->student['email']; ?></p>
    <p><strong>Mobile:</strong> <?php echo $this->student['mobile']; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $this->student['dob']; ?></p>
    <p><strong>Gender:</strong> <?php echo $this->student['gender']; ?></p>
    <p><strong>Address:</strong> <?php echo $this->student['address']; ?></p>
    <p><strong>State:</strong> <?php echo $this->student['state']; ?></p>
    <p><strong>College Name:</strong> <?php echo $this->student['collagename']; ?></p>
    <p><strong>Branch:</strong> <?php echo $this->student['branch']; ?></p>
    <p><strong>Year:</strong> <?php echo $this->student['year']; ?></p>
     <p><strong>10th Percentage:</strong> <?php echo $this->student['tenthh']; ?></p>
      <p><strong>12th Percentage:</strong> <?php echo $this->student['twelveth']; ?></p>
    <p><strong>Skills:</strong> <?php echo $this->student['skills']; ?></p>
    <p><strong>Interests:</strong> <?php echo $this->student['interests']; ?></p>
<?php else: ?>
    <p>No student found with the given ID.</p>
<?php endif; ?>
