<div class="text2" align="center">
    <div class="spusk">Выберите что вас интересует:</div>
</div>
<?php
$mysqli=new mysqli('localhost', 'root', '', 'db_diamondPC');
$result=$mysqli->query("SELECT * FROM `catalog`");
$row = $result -> fetch_all(MYSQLI_ASSOC);

if($result-> num_rows>0){
    foreach ($row as $key => $value){ 
    echo "
    <a href='../spisokKataloga/index.php?nameK=".$value["table"]."' class='adelete'><div class='ctlg' align='center'><div class='te'>".$value["name"]."</div></div></a>
    ";
    
}
}
?>





