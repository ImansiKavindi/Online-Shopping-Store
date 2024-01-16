function updatePassword() {
    var newPassword = document.getElementById("password").value;
    var confirmPassword = document.getElementById("con_password").value;
    var userId = 27; // Replace with the actual user ID for which you want to update the password.

    // Check if the passwords match
    if (newPassword === confirmPassword) {
        // Create an AJAX request to update the password
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_password.php", true); // Replace with the URL of your server-side script
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Password updated successfully
                alert("Password updated successfully");
            }
        };

        // Send the request
        var data = "userId=" + userId + "&newPassword=" + newPassword;
        xhr.send(data);
    } else {
        // Passwords do not match
        alert("Passwords do not match");
    }
}
