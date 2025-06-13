<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
</head>
<body>
    <div class="box_login">
        <div class="parte1">
            <div class="imagem">
                <img src="img/imagem_principal.png" alt="">
            </div>
            <div class="link_criar_conta">
                <a href="">Se não tiver conta se cadastre</a>
            </div>
        </div>
        <div class="parte2">
            <div class="formulario">
                <h1 class="titulo_login">Login</h1>
                <form action="" method="post">
                    <div class="campo_gmail">
                        <i class='bx  bx-envelope-open'></i> 
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="campo_senha">
                        <i class='bx  bx-lock'></i>
                        <input type="password" name="senha" id="senha">
                        <i class='bx  bx-eye'  ></i> 
                    </div>

                    <input type="submit" value="Login" id="bnt_login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>