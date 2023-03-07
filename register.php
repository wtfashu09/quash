<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5829924980516480"
     crossorigin="anonymous"></script>
    <title>Quash Account - Sign Up</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
        </nav>
    </header>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><ion-icon name="card-outline"></ion-icon> </i>Quash Accounts</h2>
            <div class="text-item">
                <h2>Welcome! <br><span>

                    </span></h2>
                <p>Here you can buy multiple type of accounts in cheap.</p>
            </div>
        </div>
    <div class="form-box register">
                <form action="">
                <?php include('errors.php') ?>
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree T&C</label>
                        <a class='a-home' href="home.php">Visit without Sign Up</a>
                    </div>
                    <button class="btn">Sign Up</button>
                    <div class="create-account">
                        <p>Already Have An Account? <a href="login.php" class="login-link">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>