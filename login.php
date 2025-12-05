<?php 

require 'database/database.php';

$db = new Database();
$message = "";
$alertClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $user = $db->getUserByEmail($email);

    if ($user) {
        // Check if password matches
        if (password_verify($password, $user['password'])) {
            // Successful login
            session_start();
            $_SESSION['user_id'] = $user['id']; // store user id in session
            $_SESSION['email'] = $user['email'];
            header("Location: index.php");
            exit;
        } else {
            // Password incorrect
            $message = "Invalid Email or Password!";
            $alertClass = "alert-danger";
        }
    } else {
        // Email not found
        $message = "Invalid Email or Password!";
        $alertClass = "alert-danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="login-parent">

        <h1>Admin Portal</h1>

        <form action="login.php" method="POST">
            <div class="card text-center">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <input type="text" class="form-control mb-3" placeholder="Enter Email" required name="email">

                    <div class="password-input">
                        <h5 class="card-title">Password</h5>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter Password" required>
                            <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                        <a href="">Forget Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                </div>

                <div class="card-footer text-body-secondary">
                    <a href="signup.php">Create Account</a>
                </div>
            </div>
        </form>

        <?php if (!empty($message)): ?>
            <div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const icon = this.querySelector('i');

            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            } else {
                passwordField.type = "password";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            }
        });
    </script>
</body>

</html>