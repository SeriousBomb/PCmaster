<div class="spisok">
    <div class="spusk"></div>
    <div class="tovvar">
        <style>
            .footerC{
                margin-top: 1200px;
            }
        </style>
        <?php
        $mysqli=new mysqli('localhost', 'root', '', 'db_diamondPC');
        $result=$mysqli->query("SELECT * FROM `".$_GET['table']."` WHERE id_tovar=".$_GET['id_tovar']."");
        $row1 = $result -> fetch_all(MYSQLI_ASSOC);
        foreach ($row1 as $key => $value){ 
        echo "
        <div class='LefChast'>
        <img src='../image/".$_GET['table']."/".$value["img"]."' class='imageT'>
        <div class='textceni' align='center'>Цена: ".$value["cena"]." руб.</div>
        <div class='btnbuy'><div class='textBuy' align='center'>Купить</div></div>
        </div>
        ";
        }
        if ($_GET['table'] == "bashni"){
            foreach ($row1 as $key => $value){ 
             echo "
            <div class='RightChast'>
            <div class='textNaz'>".$value["name"]."</div>
            <div class='textNaz'>Характеристики:</div>
            <div class='opisT'>Объём: ".$value["obiem"]." мм.</div>
            <div class='opisT'>Количество трубок: ".$value["kolvotrubk"]."</div>
            <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
            
            </div>
            ";
            }
        }
        elseif ($_GET['table'] == "BlockPit"){
            foreach ($row1 as $key => $value){ 
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Форм-фактора: ".$value["form"]." мм.</div>
               <div class='opisT'>Мощность: ".$value["moshnost"]." Вт</div>
               <div class='opisT'>Разъём для материнской платы: ".$value["RazMatPlati"]."</div>
               <div class='opisT'>Разъём для процессора: ".$value["RazCPU"]."</div>
               <div class='opisT'>Разъём для видеокарты: ".$value["RazGPU"]."</div>
               <div class='opisT'>Разъёмы для 15pinSATA: ".$value["Raz15pinSATA"]." шт.</div>
               <div class='opisT'>Разъёмы для 3pinMolex: ".$value["Raz3pinMolex"]." шт.</div>

               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "CPU"){
            foreach ($row1 as $key => $value){ 
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Количество ядер: ".$value["kolyader"]." </div>
               <div class='opisT'>Частота: ".$value["chastota"]." МГц.</div>
               <div class='opisT'>Названия ядра: ".$value["YadroName"]."</div>
               <div class='opisT'>Кеш: ".$value["Kesh"]."</div>
               <div class='opisT'>Тепловыделения: ".$value["TeploVidel"]."</div>

               <div class='opisT'>Количество товаров: ".$value["kolvo"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "GPU"){
            foreach ($row1 as $key => $value){ 
                if ($value == 1){
                    $r = "Есть";
                }
                else{
                    $r="Нет";
                }
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Частота: ".$value["chastota"]." МГц.</div>
               <div class='opisT'>Текстурные блоки: ".$value["teksturblock"]." </div>
               <div class='opisT'>RTX: ".$r." </div>
               <div class='opisT'>tenzYadra: ".$value["tenzYadra"]." </div>
               <div class='opisT'>Объём: ".$value["obiem"]." ГБ</div>
               <div class='opisT'>Шина: ".$value["Shina"]." </div>
               <div class='opisT'>Пропускная способность: ".$value["PropuskSposob"]." </div>
               <div class='opisT'>Частота памяти: ".$value["ChastotaPamati"]." </div>
               <div class='opisT'>Разъёмы для вывода: ".$value["Vivod"]." </div>
               <div class='opisT'>Максимальное разрешения: ".$value["MaxRazreshenie"]." </div>
               <div class='opisT'>Интерфейс подключения: ".$value["IntPodklch"]." </div>
               <div class='opisT'>Рекомендуемый блок питания: ".$value["RekBlockPit"]." </div>

               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "korpus"){
            foreach ($row1 as $key => $value){ 
                if ($value["RTX"] == 1){
                    $r = "Есть";
                }
                else{
                    $r="Нет";
                }
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Форма: ".$value["form"]." </div>
               <div class='opisT'>Для материнсикх плат: ".$value["formMatplat"]." </div>
               <div class='opisT'>Объём корпуса: ".$value["raziemi"]." мм. </div>
               <div class='opisT'>Разъёмы: ".$value["raziemi"]." </div>
                
               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "MatPlat"){
            foreach ($row1 as $key => $value){ 
                if ($value["Seti"] == 1){
                    $r = "Есть";
                }
                else{
                    $r="Нет";
                }
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Форма: ".$value["form"]." </div>
               <div class='opisT'>Сокет: ".$value["socket"]." </div>
               <div class='opisT'>Чипсет: ".$value["chipset"]." </div>
               <div class='opisT'>Разъёмы: ".$value["raziemi"]." </div>
               <div class='opisT'>WI-FI, кроме LAN-кабеля: ".$value["Seti"]." </div>
               
               

               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "OZU"){
            foreach ($row1 as $key => $value){ 
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Тип плашки: ".$value["tip"]." </div>
               <div class='opisT'>Форма: ".$value["form"]." </div>
               <div class='opisT'>Количество в одном упаковке: ".$value["kolvo"]." шт.</div>
               <div class='opisT'>Суммарный объём в одном упаковке: ".$value["obiem"]." ГБ</div>
               <div class='opisT'>Частота: ".$value["chastota"]." </div>
               <div class='opisT'>Тайминги: ".$value["cl"]."-".$value["trcd"]."-".$value["trp"]."-".$value["tras"]." </div>
               <div class='opisT'>Напряжения питания: ".$value["naprajpit"]." Вт.</div>
               
               
                
               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        elseif ($_GET['table'] == "pamyat"){
            foreach ($row1 as $key => $value){ 
                echo "
               <div class='RightChast'>
               <div class='textNaz'>".$value["name"]."</div>
               <div class='textNaz'>Характеристики:</div>
               <div class='opisT'>Модель: ".$value["model"]." </div>
               <div class='opisT'>Объём: ".$value["obiem"]." </div>
               <div class='opisT'>Скорость чтения/вращения: ".$value["scorvrasheniya"]." </div>
               <div class='opisT'>Тип: ".$value["tip"]." </div>
               
               
               
                
               <div class='opisT'>Количество товаров: ".$value["kolvosht"]."</div>
               
               </div>
               ";
               }
        }
        else{
            echo "ошибка";
        }
        ?>
    </div>
</div>