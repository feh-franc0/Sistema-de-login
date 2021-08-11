<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    
    <?php
        if(!isset($_SESSION['login'])){
            
            if(isset($_POST['acao'])){
                $login = 'fernando';
                $senha = '123456';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];
                
                if($login == $loginForm && $senha == $senhaForm){
                    //Logado com sucesso!
                    $_SESSION['login'] = $login;
                    header('Location: index.php');
                }else{
                    //algum erro ocorreu!
                    echo 'Dados inválidos.';
                }
            }

            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                //unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
                exit();
            }
            include('home.php');
        }
    ?>

</body>
</html>