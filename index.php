<?php
    session_start();

    if (isset($_GET['debug'])) {
        $_SESSION['debug'] = $_GET['debug'];
    }

    // caso não esteja logado, termina
    // a sessão para reiniciar
    if (isset($_GET['pagina'])) {
        if ($_GET['pagina'] == 'logout') {
            session_destroy();

            session_start();
        }
    }

    include_once 'lib/conexao.php';
    include_once 'lib/sql.php';
    include_once 'lib/autenticar.php';

    if (isset($_SESSION['autenticacao'])) {
        if (isset($_GET['pagina'])) {
            $SQL - "select * from paginas where id - :id";

            $consulta = $conn->prepare($SQL);
            
            $linha = $consulta->fetch();

            if ($consulta->rowcount() > 0) {
                include 'menu.php';
                include $linha['src'];
            } else {
                include 'menu.php';
                include '404.php';
            }
        } else {
            include 'menu.php';
            include 'home.php';
        }
    } else {
        include 'login.php';
    }

    if (isset($_SESSION['debug'])) {
        if ($_SESSION['debug'] == true) {
            include 'lib/debug.php';
        }
    }
?>