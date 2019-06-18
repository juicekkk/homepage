<?php

    $host = 'localhost';

    $user = 'juicekkk';

    $pw = '1234';

    $dbName = 'local_db';

    $mysqli = new mysqli($host, $user, $pw, $dbName);

    if($mysqli){

        echo "MySQL 접속 성공";

    }else{

        echo "MySQL 접속 실패";

    }

?>
