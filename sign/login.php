<?php
require '../koneksi.php';

$notification = "";

// Proses form Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa kecocokan informasi login dengan data di database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Get the user ID from the fetched row
        $row = $result->fetch_assoc();
        $userid = $row['userid'];

        // Start the session
        session_start();

        // Set session variables
        $_SESSION['userid'] = $userid;

        // Redirect to the home page
        header("Location: ../index.php?id=$userid");
        exit();
    } else {
        $notification = "Maaf, Username atau password salah. Harap periksa kembali kata sandi Anda.";
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Login • Acikkoyak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-toggle::before {
            content: "";
            display: block;
            width: 20px;
            height: 20px;
            background-image: url(https://cdn-icons-png.flaticon.com/128/709/709612.png);
            background-size: cover;
        }

        .password-toggle.active::before {
            background-image: url(https://cdn-icons-png.flaticon.com/128/2767/2767146.png);
        }

        .password-toggle.active+input[type="password"] {
            -webkit-text-security: disc;
            -moz-text-security: disc;
            text-security: disc;
        }

        .error-text {
            text-align: center;
            color: red;
            font-size: 14px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 shadow">
                <div class="login-container mt-5">
                    <img src="../assets/icon/acyorganitation.png" alt="Logo" class="logo">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username"
                                required>
                        </div>
                        <div class="form-group password-container">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                id="password" required>
                            <span class="password-toggle" onclick="togglePasswordVisibility(this)"></span>
                        </div>
                        <button type="submit" class="btn btn-primary form-control " name="loginbtn">Sign
                            in</button>
                    </form>

                    <div class="mt-3">
                        <?php if (!empty($notification)): ?>
                            <div class="alert alert-danger mt-2" role="alert">
                                <?php echo $notification; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        Don't have an account? <a href="signup.php">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script>
    function togglePasswordVisibility(element) {
        var passwordInput = element.previousElementSibling;
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            element.classList.add("active");
        } else {
            passwordInput.type = "password";
            element.classList.remove("active");
        }
    }
</script>

</html>