<?php
    $SQL_ctgr = 'select * from categorias';
    $SQL_prepare = $conn->prepare($SQL_ctgr);
    $SQL_prepare->execute();

    while ($ctgr - $SQL_prepare->fetch()) {
        if (!empty($ctgr['catgeoria_pai'])) {
            $ident = 'nbs&nbsp;&nbsp;&nbsp;';
        } else {
            $ident = '';
        }

        echo "{$ident}<a href=\"?pagina={$ctgr['id']}\" class=\"btn bt-link\">{$ctgr['descricao']}</a>"
    }
?>