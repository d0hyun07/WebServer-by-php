<?php
if($_GET['name'] != '안중근'){
    echo '<script>';
    echo "alert('나는 안중근을 원합니다!!');";
    echo 'history.back();';
    echo '</script>';
}else{
    echo '<h2>당신의 이름은 ';
    echo $_GET['name'];
    echo '이고, 나이는 ';
    echo $_GET['age'];
    echo '살입니다.</h2>';
}


?>