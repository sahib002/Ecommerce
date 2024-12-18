<?php
// Include the database connection
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    
    // Check if username already exists
    $check_username = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($check_username);

    if ($result->num_rows > 0) {
        $error = "Username already taken.";
    } else {
        // Insert user into database
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php"); // Redirect to login page
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter a username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter a password" required>

            <label for="role">Register as</label>
            <select id="role" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
