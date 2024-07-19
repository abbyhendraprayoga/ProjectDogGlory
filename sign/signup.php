<!DOCTYPE html>
<html>

<head>
    <title>Sign Up • Acikkoyak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sign.css">
    <link rel="icon" href="../assets/icon/acyorganitation.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
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

<body>
    <div class="container">
        <div class="main d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 shadow">
                <div class="login-container mt-5">
                    <img src="../assets/icon/acyorganitation.png" alt="Logo" class="logo">
                    <form action="success.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group password-container">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <span class="password-toggle" onclick="togglePasswordVisibility(this)"></span>
                        </div>
                        <!-- <div class="form-group">
                            <select class="form-control" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-block btn-login">Sign Up</button>
                    </form>
                    <div class="error-text">
                        <?php if (!empty($notification)): ?>
                            <span>
                                <?php echo $notification; ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        Already have an account? <a href="login.php">Log in</a>
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