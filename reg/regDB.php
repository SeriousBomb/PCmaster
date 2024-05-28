<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysqli=new mysqli('localhost', 'root', '', 'db_diamondPC');
    $result= $mysqli->query("SELECT * FROM `polzovateli`");
    $row= $result->fetch_all(MYSQLI_ASSOC);
    if($result-> num_rows>0){
        foreach ($row as $key => $value){ 
            if ($value['email'] == $_POST["email"]){
                $osh=1; 
            }
            else{
                $osh=0;
            }
        }
    }
    if ($osh == 1){
        echo "Аккаунт с данной почтой уже созданно.";
    }
    else{
        $mysqli->query("INSERT INTO `polzovateli`(`FIO`, `email`, `password`) VALUES ('".$_POST['FIO']."','".$_POST['email']."','".$_POST['password']."')");
        header("Location: ../index.php");
    }
    ?>
    
</body>
</html>