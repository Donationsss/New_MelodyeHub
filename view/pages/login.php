<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MelodyeHub</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/login.css'>
    <script src='../js/login.js'></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<body>
    <div class="wrapper" data-aos="zoom-in"><!--wrapper--> 
        <div class="logo">
            <a href="#"><img src="../assets/images/Group1.svg" alt="logo MelodyeHub"></a>
        </div> 
        <form action="">
            <h1>Login</h1>
            <div class="input-box"><!--input-box-->
                <input type="text" placeholder="Nome de Usuário" 
                required>
                <i class='bx bxs-user'></i><!--bxs-user-->
            </div>
                <div class="input-box"><!--input-box--->
                <input type="password" 
                placeholder="Senha" required>
                <i class='bx bxs-lock-alt'></i><!--bxs-lock-alt-->
            </div>
                     <div class="remember-forgot">
                    <label><input type="checkbox">Relembre-Me</label>
                    <a href="#" class="register-link p a:hover">Esqueceu a Senha?</a>
                    </div>

                    <button type="submit" class="btn">Login</button><!--btn-->

            <div class="register-link"><!--register-link-->
                <p>Não tem uma conta? <a href="../pages/register.php">Registrar</a></p>
            </div>
        </form>
   </div>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>