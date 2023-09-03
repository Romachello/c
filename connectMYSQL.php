<?php
$link = mysqli_connect("localhost", "root", "root", "clientbase");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно<br>");

    $rayon = mysqli_real_escape_string($link, $_POST["rayon"]);
    $phone = mysqli_real_escape_string($link, $_POST["tele"]);
    $rooms = mysqli_real_escape_string($link, $_POST["rooms"]);
    $adres = mysqli_real_escape_string($link, $_POST["adres"]);
    $produena = mysqli_real_escape_string($link, $_POST["produena"]);
    $srok = mysqli_real_escape_string($link, $_POST["srok"]);
    $proekt = mysqli_real_escape_string($link, $_POST["proekt"]);
    $dogovorr = mysqli_real_escape_string($link, $_POST["dogovorr"]);
    $sotrud = mysqli_real_escape_string($link, $_POST["ysl-sotr"]);
    $opis = mysqli_real_escape_string($link, $_POST["opis"]);
    $ochem = mysqli_real_escape_string($link, $_POST["ochem"]);
    $suenar = mysqli_real_escape_string($link, $_POST["suenar"]);
    
    $dateDog = mysqli_real_escape_string($link, $_POST["Date-dogovor"]);
    $numberCallOne = mysqli_real_escape_string($link, $_POST["numberCall-one"]);
    $numberCallTwo = mysqli_real_escape_string($link, $_POST["numberCall-two"]);
    $numberCallThree = mysqli_real_escape_string($link, $_POST["numberCall-three"]);


    $arr = [$numberCallOne, $numberCallTwo, $numberCallThree, $dateDog];

    for ($i = 0; $i <= 3; $i++){
      if ($arr[$i] == ''){
         $arr[$i] = date('Y-m-d',0);
         
      }
    }

    $sql = "INSERT INTO clientbaza (rayon, 
        telefon, kolichestvoKomnat, adres, uenaprodavua, srok, project, dogovor, 
        dataZakluchDogovora, kommisionnue, opisanie, oChemRazg, sledSuenarii, 
        zvonok1, zvonok2, zvonok3) VALUES ('" . $rayon . "', '" . $phone . "', '" . $rooms . "', '" . $adres . "', '" . $produena . "', 
       '" . $srok . "', '" . $proekt . "', '" . $dogovorr . "', '" . $arr[3] . "',
        '" . $sotrud . "', '" . $opis . "', '" . $ochem . "', '" . $suenar . "', '" . $arr[0] . "', 
        '" . $arr[1] . "', '" . $arr[2] . "')";

      

    if (mysqli_query($link, $sql)) {
      print ('Запись сделана');
    }
    else {
      print("Произошла ошибка при выполнении запроса<br>");
      echo "Error: " . $sql . "<br>" . mysqli_error($link) ."<br>";
    }
    $link->close();
}
?>