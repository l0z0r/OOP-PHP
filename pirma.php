<<<<<<< HEAD
<?php
    include_once 'ciklas.php'; //Prijungiamas ciklas.php

    $nuo=156156;
    $iki=256156; //Ivedamos intervalo ribos.


    echo "Intervalas: nuo ".$nuo." iki ".$iki.".<br><br>"; //Isvedamas intervalas.

    if($nuo<=0 || $iki<=0){ //Tikrinama, ar ivestas skaicius yra teigiamas.
        exit("Intervalo pradzia bei pabaiga privalo buti teigiami skaiciai.");
    }
    if($nuo>$iki){ //Tikrinama, ar intervalo pradzia nera didesne uz intervalo pabaiga.
        exit("Intervalo pradzia negali buti didesne uz intervalo pabaiga.");
    }

    $uzdavinys=new Ciklas(); //Sukuriamas objektas.
    $uzdavinys->setData($nuo, $iki); //Nustatomos intervalo ribos.

    echo "Daugiausiai iteraciju: ".$uzdavinys->Statistika()['DaugiausiaiIteraciju'].".<br>"; //Isvedama daugiausiai iteraciju.
    echo "Maziausiai iteraciju: ".$uzdavinys->Statistika()['MaziausiaiIteraciju'].".<br>"; //Isvedama maziausiai iteraciju.
    echo "Didziausias gautas skaicius visu iteraciju metu: ".$uzdavinys->Statistika()["DidziausiasSkaicius"].".<br>"; //Isvedamas didziausias gautas skaicius visu iteraciju metu.
=======
<?php
    include_once 'ciklas.php'; //Prijungiamas ciklas.php

    $nuo=156156;
    $iki=256156; //Ivedamos intervalo ribos.


    echo "Intervalas: nuo ".$nuo." iki ".$iki.".<br><br>"; //Isvedamas intervalas.

    if($nuo<=0 || $iki<=0){ //Tikrinama, ar ivestas skaicius yra teigiamas.
        exit("Intervalo pradzia bei pabaiga privalo buti teigiami skaiciai.");
    }
    if($nuo>$iki){ //Tikrinama, ar intervalo pradzia nera didesne uz intervalo pabaiga.
        exit("Intervalo pradzia negali buti didesne uz intervalo pabaiga.");
    }

    $uzdavinys=new Ciklas(); //Sukuriamas objektas.
    $uzdavinys->setData($nuo, $iki); //Nustatomos intervalo ribos.

    echo "Daugiausiai iteraciju: ".$uzdavinys->Statistika()['DaugiausiaiIteraciju'].".<br>"; //Isvedama daugiausiai iteraciju.
    echo "Maziausiai iteraciju: ".$uzdavinys->Statistika()['MaziausiaiIteraciju'].".<br>"; //Isvedama maziausiai iteraciju.
    echo "Didziausias gautas skaicius visu iteraciju metu: ".$uzdavinys->Statistika()["DidziausiasSkaicius"].".<br>"; //Isvedamas didziausias gautas skaicius visu iteraciju metu.
>>>>>>> 2ed2b0b7187e6acdf9fee2ec1dcc72741c7b8168
?>