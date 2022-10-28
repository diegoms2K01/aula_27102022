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
?>

<style>
    .btn-login{
        float: right;
        text-align: right;
    }
    
    .align-to-center{
        text-align: center;
    }

    .div-table-prods{
        width: 70%;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h3 class="align-to-center">My Commerce</h3>

<input class="btn-login" type="submit" name="login" value="Fazer login">

<br>
<br>

<form class="align-to-center" method="post">
    <div class="align-to-center div-table-prods">
        <label>Pesquisar</label>
        <input type="text" name="pesquisanomeproduto" value="">
        <br>
        <br>
        <table class="align-to-center">
            <tr>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://a-static.mlcdn.com.br/280x210/sabao-liquido-omo-lavagem-perfeita-3l/magazineluiza/220976600/700f86b20daa3d114eda7de72f77ee64.jpg">
                    <br>
                    <input type="submit" value="Produto 1 - Descrição" name="produto1">
                </td>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://conteudo.imguol.com.br/c/noticias/08/2018/02/23/produtos-vendidos-com-medidas-quebradas-bala-cerveja-batata-frita-1519423107553_615x300.jpg">
                    <br>
                    <input type="submit" value="Produto 2 - Descrição" name="produto2">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://conteudo.imguol.com.br/c/noticias/4d/2018/02/23/coca-cola-em-lata-310-ml-1519416839230_300x300.jpg.webp">
                    <br>
                    <input type="submit" value="Produto 3 - Descrição" name="produto3">
                </td>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRwUsnIEo2LnewCeBJtqc8mttmoKM2oeklIA&usqp=CAU">
                    <br>
                    <input type="submit" value="Produto 4 - Descrição" name="produto4">
                </td>
            </tr>
        </table>
    </div>
</form>