 <div class="form-container">
        <h1>Registration Form</h1>

<form action="index.php?option=com_studentportal&task=submit" method="post" onsubmit="return validateform();">
    <?php echo JHTML::_('form.token'); ?>
    <div class="form-group">
                <label for="firstName" class="form-label">First Name <span class="required">*</span></label>
                <input type="text" id="firstName" name="firstname" required>
                <div id="fnameError" class="error"></div>

            </div>

            <div class="form-group">
                <label for="lastName" class="form-label">Last Name <span class="required">*</span></label>
                <input type="text" id="lastName" name="lastname" required>
                <div id="lnameError" class="error"></div>
            </div>
            
            <div class="form-group">
                <label for="email" class="form-label">Email<span class="required">*</span></label>
                <input type="text" id="email" name="email" required>
                 <div id="emailError" class="error"></div>
            </div>

            <div class="form-group">
                <label for="mobile" class="form-label">Mobile Number <span class="required">*</span></label>
                <input type="tel" id="mobile" name="mobile"  required>
                <div id="mobileError" class="error"></div>
            </div>

            <div class="form-group">
                <label for="dob" class="form-label">Date of Birth <span class="required">*</span></label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label class="form-label">Gender <span class="required">*</span></label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="female" name="gender" value="Female" required>
                    <label for="female">Female</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="other" name="gender" value="other" required>
                    <label for="other">Other</label>
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address <span class="required">*</span></label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="state" class="form-label">State<span class="required">*</span></label>
                <input type="text" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="collagename" class="form-label">Collage Name<span class="required">*</span></label>
                <input type="text" id="collagename" name="collagename" required>
            </div>


            <div class="form-group">
                <label for="branch" class="form-label">Engineering Branch <span class="required">*</span></label>
                <select id="branch" name="branch" required>
                    <option value="">Select your Branch</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Electronics and Communication">Electronics and Communication</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Electrical and Electronics ">Electrical and Electronics</option>
                    <option value="Civil">Civil Engineering</option>
                </select>
            </div>

            <div class="form-group">
                <label for="year" class="form-label">Year <span class="required">*</span></label>
                <select id="year" name="year" required>
                    <option value="">Select Year</option>
                    <option value="1st">Ist</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
            </div>

             <div class="form-group">
                <label for="tenthh" class="form-label">10th Percentage<span class="required">*</span></label>
                <input type="text" id="tenthh" name="tenthh" required>
            </div>

             <div class="form-group">
                <label for="twelveth" class="form-label">12th Percentage<span class="required">*</span></label>
                <input type="text" id="twelveth" name="twelveth" required>
            </div>

            <div class="form-group">

                <label class="form-label">Skills</label>
                <div class="checkbox-option">
                    <input type="checkbox" id="java" name="skills[]" value="Java">
                    <label for="java">Java</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="php" name="skills[]" value="PHP">
                    <label for="php">PHP</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="python" name="skills[]" value="Python">
                    <label for="python">Python</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Interests</label>
                <div class="checkbox-option">
                    <input type="checkbox" id="coding" name="interests[]" value="Coding">
                    <label for="coding">Coding</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="sports" name="interests[]" value="Sports">
                    <label for="sports">Sports</label>
                </div>
                <div class="checkbox-option">
                    <input type="checkbox" id="cultural" name="interests[]" value="Cultural">
                    <label for="cultural">Cultural</label>
                </div>
            </div>



            <div class="terms-section">
                <p>By registering, you agree that all information provided is accurate and complete.
                    The institution may use this data for academic purposes and communication.</p>

                <div class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the terms and conditions <span class="required">*</span></label>
                </div>
            </div>
        <br>
            <div class="form-group">
                <button type="submit">Submit Registration</button>
            </div>
</form>
</div>
