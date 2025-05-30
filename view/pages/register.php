<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MelodyeHub</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/register.css'>
    <script src='../js/register.js'></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="loginsection">
            <div class="wrapper"><!--wrapper-->
                <div class="logo">
                <a href="#"><img src="../assets/images/Group1.svg" alt="logo MelodyeHub"></a>
                </div> 
                <form action="">
                    <h1>Registrar-se</h1>
                    <div class="input-box"><!--input-box-->
                        <input type="text" placeholder="Nome de Usuário" 
                        required>
                        <i class='bx bxs-user'></i><!--bxs-user-->
                    </div>
                    <div class="input-box"><!--input-box--->
                        <input type="text" 
                        placeholder="Email" required>
                        <i class='bx bx-envelope'></i><!--bxs-lock-alt--> 
                    </div>
                    <div class="input-box"><!--input-box-->
                            <input type="tel" placeholder="Telefone" required>
                            <i class='bx bx-phone'></i>
                        </div>
                        <div class="input-box"><!--input-box-->
                            <input type="password" placeholder="Senha" required>
                            <i class='bx bx-show-alt'></i>
                        </div>
                        <div class="input-box"><!--input-box-->
                            <input type="password" placeholder="Confirmar Senha" required>
                            <i class='bx bx-show-alt'></i>
                        </div>
                    <button type="submit" class="btn">Cadastrar</button><!--btn-->
                    <div class="register-link">
                    <p>Já tem cadastro? <a href="../pages/login.php">Faça Login</a></p>
                    </div>
                </form>
           </div>
    </section>
</body>
</html>