<?php

// выход из сессии

// удаление всех данных и куки (проверить как не удаляя куки будет себя 
    $_SESSION=array();
    session_destroy();
    session_write_close();
    setcookie("user", null);
    setcookie("sprut", null);
// переход
    $new_url = 'index.php';
    header('Location: '.$new_url);
    exit();
?>


