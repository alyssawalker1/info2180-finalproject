
    <?php
        session_start();
    ?>

<!DOCTYPE html>
<html lan="en" and dir="Itr">
<head>
    <meta charset="utf-8">
    <title> Interactive Login Form</title>
    <link rel="stylesheet" href="login_style.css">
    <script src="log_in.js"></script>

</head>
<header>
    <img class="dolphin" src="dolphin.png" ALIGN="center" width="28" height="20" />
    <h1>
        Dolphin CRM
    </h1>
</header>
<body>
<form class="box" action="login.php" method="POST">

<h2>
    Login
</h2>
<input type="text" name="" placeholder="Enter Email Address" id="email">
<input type="password" name="" placeholder="Enter password" id="password">
<button id="Login">Login</button>
<footer>
    <hr><p>Copyright &copy; 2022, Dolphin CRM</p>
    </footer>
   
</form>
</body>
</html>