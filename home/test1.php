<!doctype html> 
<html>
    <body>


        <table border=1 width=500>
            <tr>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4</td>
            </tr>
            

        </table>
        <?php
                echo '<script>';
                echo 'function mtyfun() {';
                    echo "document.getElementById('mytest').value = '부산소마고';";
                echo '}';
                echo '</script>';
                
            
            ?>

        <input type=text id=mytest>
        <input type=button value=눌러주세요 onclick=myfun()>
    </body>
    
</html>
