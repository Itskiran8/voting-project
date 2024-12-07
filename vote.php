<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <script src="registration.js" defer></script>
</head>
<body>
    <h2>User Registration</h2>
    <form id="registrationForm">
        <label for="userId">Enter User ID:</label>
        <input type="text" id="userId" name="userId" required>
        <button type="submit">Register</button>
    </form>
    <p id="message"></p>
</body>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Define the allowed user ID
    const allowedUserId = "123456";
    // Function to handle form submission
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault();
        
        // Get the entered user ID
        const userId = document.getElementById("userId").value.trim();
        
        // Check if the entered user ID matches the allowed user ID
        if (userId === allowedUserId) {
            document.getElementById("message").textContent = "Registration successful!";
            // Here you can add additional code to proceed with registration logic
            // For example, send data to server, redirect to another page, etc.
        } else {
            document.getElementById("message").textContent = "Invalid User ID. Registration failed.";
        }
    });
});
</script>

</html>
