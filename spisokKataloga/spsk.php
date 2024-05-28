<div class="spisok">
<div class="text2" align="center">
    <div class="spusk">Выберите что вас интересует:</div>
</div>
<?php
$mysqli=new mysqli('localhost', 'root', '', 'db_diamondPC');
$result=$mysqli->query("SELECT * FROM `".$_GET['nameK']."`");
$row = $result -> fetch_all(MYSQLI_ASSOC);
$dlina=250;
$h =200;
if($result-> num_rows>0){
    foreach ($row as $key => $value){ 
    echo "<div class='yacheika'>
        <img src='../image/".$_GET['nameK']."/".$value["img"]."' class='LeftIMG'>
        <div class='Linfo'>
            <div class='txt1'>Название: ".$value["name"]."</div>
            <div class='clr2'></div>
            <div class='cenabd'>Цена: ".$value["cena"]." руб.</div>
            <a href='../tovar/tovar.php?id_tovar=".$value["id_tovar"]."&table=".$_GET['nameK']."' class='adelete'><div class='btn3'><div class='textPod' align='center'>Подробнее...</div></div></a>
        </div>
    </div>";
    $a = 220;
    $h = $h + 220;
    $dlina += $a;
}
if ($dlina <=  1000){
    $dlina =1000;
    echo "<style>
    .footerSC{
        margin-top: ".$dlina."px;

    }
    </style>";
    $dlina=0;
}
else{
    echo "<style>
    .footerSC{
        margin-top: ".$dlina."px;

    }
    </style>";
    $dlina=0;

}

if ($h <=  1000){
    $h =900;
    echo "<style>
    .contentC{
        height: ".$h."px;

    }
    </style>";
    $h=0;
}
else{
}
}

?>
</div>