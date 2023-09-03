<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Клиент БАЗА</title>
   <style>
      body {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }

      .form {
         background-color: antiquewhite;
         display: flex;
         flex-direction: column;
      }

      .form__parts {
         width: 100%;
         display: flex;
         flex-wrap: wrap;
         margin-bottom: 10px;
      }

      .form__part1 {
         width: 32%;
         display: flex;
         flex-wrap: wrap;
         flex-direction: column;
         margin-right: 1%;
      }

      .form__part2 {
         width: 32%;
         display: flex;
         flex-wrap: wrap;
         flex-direction: column;
         margin-right: 1%;
      }

      .form__part3 {
         width: 32%;
         display: flex;
         flex-wrap: wrap;
         flex-direction: column;
      }

      .form__item {
         padding: 3px;
      }

      .opis {
         resize: none;
         width: 95%;
         height: 40px;
      }

      .suenarii {
         resize: none;
         height: 40px;
      }

      .o_chem {
         resize: none;
         height: 40px;
      }

      .form__zvonok {
         display: flex;
         flex-direction: column;
      }

      .result-btn {}

      .h3 {
         margin: 0;
         padding: 5px;
         float: center;
      }
      .table{
         word-break:break-all;
         border: 2px solid black;
         width: 100vw;
      }
      .tr{
         background-color: yellow;
      }
      .itemtable{
         background-color: wheat;
      }
      .td {
         padding: 0;
         margin: 0;
      }
      .td-opis{
         width: 10vw;
      }
      .td-komm{
         width: 3vw;
      }
   </style>
</head>

<body>
   <p class="h3"><b>Добро Пожаловать в учётку продавцов.</b> Сегодня <?php $a = date("Y-m-d H:i:s");
                                                                     echo $a; ?></p>
   <form class="form" method="post" action="connectMYSQL.php">
      <div class="form__parts">
         <div class="form__part1">
            <div>
               <label for="rayon">Район: <input name="rayon" id="rayon" type="text" placeholder="Район" class="form__item"></label><br><br>
               <label for="phone">Телефон:<input name="tele" id="phone" type="tel" placeholder="+7XXXXXXXXXX" class="form__item"></label>
            </div><br>

            <label for="komnat">Количество Комнат:
               <div id="komnat" class="form__item" style="border: 3px solid black;">
                  1 комн<input type="radio" name="rooms" class="form__item" value="1">
                  2 комн<input type="radio" name="rooms" class="form__item" value="2">
                  3 комн<input type="radio" name="rooms" class="form__item" value="3">
                  4 комн. и более<input type="radio" name="rooms" class="form__item" value="4+">
               </div>
            </label>
            <br>
            <label for="phone">Адрес квартиры:<input name="adres" type="text" placeholder="Адрес квартиры" class="form__item width"></label><br>

            <div>
               Цена продавца:<input name="produena" type="text" placeholder="Цена продавца (руб)" class="form__item"><br><br>
               Срок:<input name="srok" type="text" placeholder="Срок" class="form__item">
            </div><br>

         </div>
         <div class="form__part2">


            <div>
               Проект?<input name="proekt" type="text" placeholder="Проект / Вероятность Успеха" class="form__item"><br><br>
               Договор
               <select name="dogovorr">
                  <option value="yes">Есть договор</option>
                  <option value="wait">Ожидание договора</option>
                  <option value="no">Отказ сотрудничества</option>
               </select><br><br>

               Дата заключения договора<br><br><input name="Date-dogovor" type="date" class="form__item">
            </div><br>
            Коммисионные<br>
            <select name="ysl-sotr" class="form__item">
               <option value="100%">100 комиссионных</option>
               <option value="5%">5% ком</option>
            </select>


            <label for="opis">Описание:<textarea id="opis" name="opis" type="text" placeholder="Описание" class="opis"></textarea></label>

         </div>
         <div class="form__part3">
            О чем поговорили?
            <textarea type="text" name="ochem" placeholder="О чем поговорили?" class="o_chem"></textarea>
            Сценарий след. контекста
            <textarea name="suenar" type="text" placeholder="Сценарий след. контекста" class="suenarii"></textarea>
            <div class="form__zvonok">
               <label for="date1">Дата 1 контр. звонка</label><input id="date1" name="numberCall-one" type="date" class="form__item">
               <label for="date2">Дата 2 контр. звонка</label><input id="date2" name="numberCall-two" type="date" class="form__item">
               <label for="date3">Дата 3 контр. звонка</label><input id="date3" name="numberCall-three" type="date" class="form__item">
            </div>
         </div>
      </div>

      <input class="result-btn" type="submit" value="Добавить в БД">

   </form>
   <?php
   $link = mysqli_connect("localhost", "root", "root", "clientbase");


   $sql = "SELECT * FROM clientbaza";
   if ($result = $link->query($sql)) {
      $rowsCount = $result->num_rows; // количество полученных строк
      echo "<p>Получено объектов: $rowsCount</p>";
      echo "<table class='table'><tr class='tr'><th>Id</th><th>Район</th><th>Телефон</th><th>Комнаты</th><th>Адрес</th><th>Цена(продавца)</th><th>Срок</th><th>Проект?</th>
      <th>Коммисионные</th><th>Описание</th><th>О чем говорили?</th><th>Сценарий след. контекста</th><th>1 контр.</th><th>2 контр.</th><th>3 контр.</th><th>Дата договора</th><th>Договор</th></tr>";
      foreach ($result as $row) {
         echo "<tr name class='itemtable'>";
         echo "<td class='td'><p>" . $row["id"] . "</p></td>";
         echo "<td class='td'><p>" . $row["rayon"] . "</p></td>";
         echo "<td class='td'><p>" . $row["telefon"] . "</p></td>";
         echo "<td class='td'><p>" . $row["kolichestvoKomnat"] . "</p></td>";
         echo "<td class='td'><p>" . $row["adres"] . "</p></td>";
         echo "<td class='td'><p>" . $row["uenaprodavua"] . "</p></td>";
         echo "<td class='td'><p>" . $row["srok"] . "</p></td>";
         echo "<td class='td'><p>" . $row["project"] . "</p></td>";
         echo "<td class='td-komm'>" . $row["kommisionnue"] . "</td>";
         echo "<td class='td-opis'>" . $row["opisanie"] . "</td>";
         echo "<td class='td'> " . $row["oChemRazg"] . "</td>";
         echo "<td class='td'>" . $row["sledSuenarii"] . "</td>";
         echo "<td class='td'>" . $row["zvonok1"] . "</td>";
         echo "<td class='td'>" . $row["zvonok2"] . "</td>";
         echo "<td class='td'>" . $row["zvonok3"] . "</td>";
         echo "<td class='td'>" . $row["dataZakluchDogovora"] . "</td>";
         echo "<td class='td'><p>" . $row["dogovor"] . "</p></td>";
         echo "</tr>";
      }
      
      echo "</table>";
      $result->free();
   } else {
      echo "Ошибка: " . $link->error;
   }
   $link->close();
   ?>
   <script src="script.js"></script>
</body>

</html>