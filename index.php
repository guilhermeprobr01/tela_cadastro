<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/index.css" id="223"> 
    <title>Cadastro</title>
</head>
<body>
                          
               
                 <div class="content">
                            <header>
                                <img src="./img/logo_icon.png" alt="Logo da RCC">
                                <h1>Cadastro</h1>
                            </header>
                <main>
                                <form action="processa.php" method="post">
                                                <div class="input-field">
                                                    <input type="text" placeholder="Seu Nick do Habbo" id="text" name="nome">
                                                    <label for="text">
                                                        <img src="./img/avatar.svg" alt="Usuário do Habbo" >
                                                    </label>
                                                </div>
                                                <div class="input-field">
                                                                <input type="email" placeholder="E-mail" id="password" name="email">
                                                                <label for="email">
                                                                    <img src="./img/lock.svg" alt="Email">
                                                                </label>
                                                </div>
                                                <div class="check">
                                                                <input type="checkbox" checked id="remind-pass">
                                                                <label for="remind-pass">Concordo com os Termos</label>
                                                </div>
                                                <input type="submit" value="Cadastrar" class="btn">
                                </form>
                            </main>
                
</div>
<?php
                    if (isset ($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset ($_SESSION['msg']);
                    }
                ?>
</body>
</html>