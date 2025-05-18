<?php

include_once '../config/config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
    <!-- style -->
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time(); ?>">
    <!-- style end -->

</head>

<body>


    <div class="wrapper">

        <div class="login-box">

            <div class="login-header">
                <span>Login</span>
            </div>

            <form action="../pages/home.html" method="post" id="loginForm">

                <div class="input-box">
                    <input type="email" id="user" class="input-field" name="email" required>
                    <label for="user" class="label">Email</label>
                    <i class="bx bx-user icon"></i>
                </div>

                <div class="input-box">
                    <input type="password" id="pass" class="input-field" name="password" required>
                    <label for="pass" class="label">Senha</label>
                    <i class="bx bx-lock-alt icon"></i>
                </div>

                <div class="remember-pass">

                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Lembrar senha</label>
                    </div>

                    <div class="forgot">
                        <a href="#">Esqueci Minha Senha</a>
                    </div>

                </div>

                <div class="input-box">
                    <input type="submit" class="input-submit" value="Login">
                </div>

                <div class="register">
                    <span>Não Tem Uma Conta? <a href="../pages/register.php">Registrar</a></span>
                </div>

            </form>

        </div>


    </div>

    <script src="../js/login.js"></script>
</body>

</html>
