<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Login | KlikPajak</title>
</head>
<body>
    <div class="wrapper">
        <form action="proses/login-proces.php" method="post">
            <h1><u>LOGIN</u></h1>

            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }
            ?>

            <div class="input-box1">
                <input type="text" placeholder="Username" name="log_username" id="log_username" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="log_password" id="log_password" required />
                <span class="toggle-show" onclick="togglePasswordVisibility()">
                    <i class="bx bx-hide"></i>
                </span>
            </div>
            <div class="remember-forgot">
                <a href="forgot.html">Lupa Kata Sandi ?</a>
            </div>
            <button type="submit" class="btn" name="login" id="login">Login</button>
            <div class="register-link">
                <p>
                    Pengguna Baru?
                    <a href="" data-toggle="modal" data-target="#popupregister">Register</a>
                </p>
            </div>
        </form>
    </div>

    <!-- Pop Up Register -->
    <div class="modal fade" style="margin-top: 50px;" id="popupregister" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses/register-proses.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" required />
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required />
                        </div>
                        <div class="form-group">
                            <label for="con_password">Confirm Password</label>
                            <input type="password" class="form-control" id="con_password" name="con_password" required />
                        </div>
                        <div class="modal-footer mb-0">
                            <button type="submit" id="register" name="register" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Penutup Pop Up -->
    <header class="header">
        <h2>Klik<i>|Pajak</i></h2>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#">Profile</a>
            <a href="#">Product</a>
            <a href="#">Contact</a>
            <a href="#">About</a>
        </nav>
    </header>

    <script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('log_password');
        const toggleIcon = document.querySelector('.toggle-show i');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.classList.remove('bx-hide');
            toggleIcon.classList.add('bx-show');
        } else {
            passwordField.type = 'password';
            toggleIcon.classList.remove('bx-show');
            toggleIcon.classList.add('bx-hide');
        }
    }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>


