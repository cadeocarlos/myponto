<?php
    //require_once('./app.lib/Sessao.php');
    new Sessao;
    if(!Sessao::getValue('logado'))
    {
        header("location:./?_task=Login&_action=login");
    }   else{
        echo "Expira em: " . session_cache_expire();
    }
?>