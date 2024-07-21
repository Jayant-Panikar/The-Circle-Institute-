function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    if (name == "" || name == null) {
        alert("Name should not be empty!");
        return false;
    }
    if (email == "" || email == null) {
        alert("Email should not be empty!");
        return false;
    }
    if (phone == "" || phone == null) {
        alert("Phone should not be empty!");
        return false;
    }
    if (isNaN(phone)) {
        alert("Contact Number must be in numeric format!");
        return false;
    }
    if (phone.length < 10) {
        alert("Contact Number must be at least 10 digits long!");
        return false;
    }
    if (message == "" || message == null) {
        alert("Message should not be empty!");
        return false;
    }
    return true;
}