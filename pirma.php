<?php

    $skaicius=165168515; //Ivedamas pradinis skaicius.


    $nariai=array();

    echo"Pradinis skaicius: ".$skaicius."<br><br>"; //Isvedamas pradinis skaicius.

    if($skaicius<=0){ //Tikrinama ar ivestas skaicius yra teigiamas.
        exit("Ivestas skaicius turi buti teigiamas.");
    }

    while($skaicius!=1){
        array_push($nariai, $skaicius);
        if($skaicius%2==0){ //Jei skaicius lyginis, jis dalinamas is 2, jei nelyginis, jis dauginamas is 3 ir pridedamas 1.
            $skaicius/=2;
        }
        else{
            $skaicius=3*$skaicius+1;
        }
    }

    echo "Skaiciai:<br>";
    for($i=0; $i<count($nariai); $i++){ //Isvedami gauti skaiciai.
        echo $nariai[$i]." -> ";
    }
    echo "1";
    echo "<br><br>Iteraciju skaicius: ".count($nariai); //Isvedamas iteraciju skaicius.
?>