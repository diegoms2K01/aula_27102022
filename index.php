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
    <center>
        <input type="text" name="value" value="<?php echo $value?>" readonly>
        <br>
        <br>
        <table border="1">
            <tr>
                <td>
                    <input type="submit" name="submit" value="7">
                </td>
                <td>
                    <input type="submit" name="submit" value="8">
                </td>
                <td>
                    <input type="submit" name="submit" value="9">
                </td>
                <td>
                    <input type="submit" name="op" value="/">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="4">
                </td>
                <td>
                    <input type="submit" name="submit" value="5">
                </td>
                <td>
                    <input type="submit" name="submit" value="6">
                </td>
                <td>
                    <input type="submit" name="op" value="*">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="1">
                </td>
                <td>
                    <input type="submit" name="submit" value="2">
                </td>
                <td>
                    <input type="submit" name="submit" value="3">
                </td>
                <td>
                    <input type="submit" name="op" value="-">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="0">
                </td>
                <td colspan="2">
                    <input type="submit" name="equals_to" value="=">
                </td>
                <td>
                    <input type="submit" name="op" value="+">
                </td>
            </tr>
        </table>
    </center>
</form>