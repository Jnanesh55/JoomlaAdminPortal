function validateform() {
    let fname = document.getElementsByName('firstname')[0].value.trim();
    let lname = document.getElementsByName('lastname')[0].value.trim();
    let email = document.getElementsByName('email')[0].value.trim();
    let mobile = document.getElementsByName('mobile')[0].value.trim();

    document.getElementById("fnameError").textContent = '';
    document.getElementById("lnameError").textContent = '';
    document.getElementById("emailError").textContent = '';
    document.getElementById("mobileError").textContent = '';

    let isValid = true;
    const nameRegex = /^[A-Za-z]+$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/;
    const mobileRegex = /^[0-9]{10}$/;

    if (!nameRegex.test(fname)) {
        document.getElementById("fnameError").textContent = "Only letters allowed in First Name";
        isValid = false;
    }

    if (!nameRegex.test(lname)) {
        document.getElementById("lnameError").textContent = "Only letters allowed in Last Name";
        isValid = false;
    }

    if (!emailRegex.test(email)) {
        document.getElementById("emailError").textContent = "Enter a valid email";
        isValid = false;
    }

    if (!mobileRegex.test(mobile)) {
        document.getElementById("mobileError").textContent = "Enter a valid 10-digit mobile number";
        isValid = false;
    }

    return isValid;
}
