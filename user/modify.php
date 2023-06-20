<?php
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
    $query = "select * from myuser where num=".$_GET['num'];
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if($count == 0){
        echo "조회된 게시물 없음";
    }else{
        $row = mysqli_fetch_assoc($result);
    }
?>



<center>
<h2> 정보 수정 페이지 </h2>
<form method=post action=modify_update.php>
    이름 : <input type=text name=myname value =<?php echo $row['name'] ?>><BR>
    나이 : <input type=text name=myage value =  <?php echo $row['age'] ?>><BR>
    성별 : <input type=text name=mygender value = <?php echo $row['gender'] ?>><BR>
    직업 : <input type=text name=mywork value =<?php echo $row['work'] ?> ><BR>
    <input type=hidden name=mynum value=<?php echo $_GET['num'] ?>>
    <input type=submit value=확인>
</form>
</center>






