   <!-- <div class="container"><a href="index.php?option=com_studentportal&view=login"><button id="log">Login</button></a>
<div class="sign-container">
<form action="index.php?option=com_studentportal&task=signup_submit" method="post" onsubmit="return validateSignupForm();" enctype="multipart/form-data">
     <h1>Sign Up</h1>
   
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" id="password" required><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password" id="confirm_password" required><br><br><br>

     <label>Upload Profile Picture:</label><br><br>
     <input type="file" name="profile_image" accept="image/*"><br><br><br>

    <input type="submit" value="Submit">
</form>
</div>
</div> 
<script>
    function validateSignupForm() {
        var pass = document.getElementById('password').value;
        var confirmPass = document.getElementById('confirm_password').value;

        if (pass !== confirmPass) {
            alert("Passwords do not match");
            return false;
        }
        return true;
    }
</script> -->

<a href="index.php?option=com_user&view=register"></a>