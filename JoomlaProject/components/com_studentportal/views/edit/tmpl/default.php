<?php
defined('_JEXEC') or die('Restricted access');

include_once(JPATH_COMPONENT . DS . 'includes' . DS . 'navbar.php');
$student = $this->student;
$skills = explode(",", $student['skills']);
$interests = explode(",", $student['interests']);
?>

<div class="form-container">
    <h2>Update Details</h2>
    <form action="index.php?option=com_studentportal&task=update" method="post" onsubmit="return validateform()">
        <input type="hidden" name="personel_id" value="<?= $student['id'] ?>">

        <label>First Name</label>
        <input type="text" id="firstname" name="firstname" value="<?= $student['firstname'] ?>" required>
        <div id="fnameError" class="error"></div>

        <label>Last Name</label>
        <input type="text" id="lastname" name="lastname" value="<?= $student['lastname'] ?>" required>
        <div id="lnameError" class="error"></div>

        <label>Email</label>
        <input type="text" id="email" name="email" value="<?= $student['email'] ?>" required>
        <div id="emailError" class="error"></div>

        <label>Mobile</label>
        <input type="text" id="mobile" name="mobile" value="<?= $student['mobile'] ?>" required>
        <div id="mobileError" class="error"></div>

        <label>Date of Birth</label>
        <input type="date" name="dob" value="<?= $student['dob'] ?>" required>

        <label>Gender</label>
        <select name="gender" required>
            <option <?= ($student['gender'] == "Male") ? "selected" : "" ?>>Male</option>
            <option <?= ($student['gender'] == "Female") ? "selected" : "" ?>>Female</option>
            <option <?= ($student['gender'] == "Other") ? "selected" : "" ?>>Other</option>
        </select>

        <label>Address</label>
        <input type="text" name="address" value="<?= $student['address'] ?>" required>

        <label>State</label>
        <input type="text" name="state" value="<?= $student['state'] ?>" required>

        <label>College Name</label>
        <input type="text" name="collagename" value="<?= $student['collagename'] ?>" required>

        <label>Branch</label>
        <select name="branch">
            <option <?= ($student['branch'] == "Computer Science") ? "selected" : "" ?>>Computer Science</option>
            <option <?= ($student['branch'] == "Electronics and Communication") ? "selected" : "" ?>>Electronics and Communication</option>
            <option <?= ($student['branch'] == "Mechanical") ? "selected" : "" ?>>Mechanical</option>
            <option <?= ($student['branch'] == "Electrical and Electronics") ? "selected" : "" ?>>Electrical and Electronics</option>
            <option <?= ($student['branch'] == "Civil") ? "selected" : "" ?>>Civil Engineering</option>
        </select>

        <label>Year</label>
        <select name="year">
            <option <?= ($student['year'] == "1st") ? "selected" : "" ?>>1st</option>
            <option <?= ($student['year'] == "2nd") ? "selected" : "" ?>>2nd</option>
            <option <?= ($student['year'] == "3rd") ? "selected" : "" ?>>3rd</option>
            <option <?= ($student['year'] == "4th") ? "selected" : "" ?>>4th</option>
        </select>

         <label>Tenth %</label>
        <input type="text" id="tenthh" name="tenthh" value="<?= $student['tenthh'] ?>" required>

         <label>Twelveth % </label>
        <input type="text" id="twelveth" name="twelveth" value="<?= $student['twelveth'] ?>" required>


        <div class="checkbox-group">
            <label>Skills</label>
            <div class="checkbox-option">
                <input type="checkbox" id="java" name="skills[]" value="Java" <?= in_array("Java", $skills) ? "checked" : "" ?>>
                <label for="java">Java</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="php" name="skills[]" value="PHP" <?= in_array("PHP", $skills) ? "checked" : "" ?>>
                <label for="php">PHP</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="python" name="skills[]" value="Python" <?= in_array("Python", $skills) ? "checked" : "" ?>>
                <label for="python">Python</label>
            </div>
        </div>

        <div class="checkbox-group">
            <label>Interests</label>
            <div class="checkbox-option">
                <input type="checkbox" id="coding" name="interests[]" value="Coding" <?= in_array("Coding", $interests) ? "checked" : "" ?>>
                <label for="coding">Coding</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="sports" name="interests[]" value="Sports" <?= in_array("Sports", $interests) ? "checked" : "" ?>>
                <label for="sports">Sports</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="cultural" name="interests[]" value="Cultural" <?= in_array("Cultural", $interests) ? "checked" : "" ?>>
                <label for="cultural">Cultural</label>
            </div>
        </div>

        <button type="submit">Update</button>
    </form>
</div>
