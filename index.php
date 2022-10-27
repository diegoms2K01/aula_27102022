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
?>

<h3>My Commerce</h3>

<form method="post">
    <div>
        <label>Pesquisar</label>
        <input type="text" name="value" value="<?php echo $value?>" readonly>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://a-static.mlcdn.com.br/280x210/sabao-liquido-omo-lavagem-perfeita-3l/magazineluiza/220976600/700f86b20daa3d114eda7de72f77ee64.jpg">
                </td>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://conteudo.imguol.com.br/c/noticias/08/2018/02/23/produtos-vendidos-com-medidas-quebradas-bala-cerveja-batata-frita-1519423107553_615x300.jpg">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://conteudo.imguol.com.br/c/noticias/4d/2018/02/23/coca-cola-em-lata-310-ml-1519416839230_300x300.jpg.webp">
                </td>
                <td>
                    <input type="image" name="product" width="200" height="170" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRwUsnIEo2LnewCeBJtqc8mttmoKM2oeklIA&usqp=CAU">
                </td>
            </tr>
        </table>
    </div>
</form>