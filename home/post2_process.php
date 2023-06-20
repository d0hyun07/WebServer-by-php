<?php
if($_POST['myid'] != '이순신'){
    echo '<script>';
        echo "alert('야이 게이야 꺼져!');";
        echo 'history.back();';
    echo '</script>';
}else{
    echo '아이디 : '.$_POST['myid'];
    echo '<br>';
    echo '생일 : '.$_POST['mydate'];
}

?>

