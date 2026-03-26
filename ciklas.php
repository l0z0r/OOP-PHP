<?php
    class Ciklas{
        protected $nuo,$iki;

        function setData($nuo, $iki){
            $this->nuo = $nuo;
            $this->iki = $iki;
        }

        function Skaiciavimai($skaicius){ //Atliekamas skaiciavimas pagal Collatz seka.
            $nariai=array();
            while($skaicius!=1){
                array_push($nariai, $skaicius);
                if($skaicius%2==0){
                    $skaicius/=2;
                }
                else{
                    $skaicius=3*$skaicius+1;
                }
            }
            $didziausi=max($nariai); //Randamas didziausias skaicius gautame sekoje.
            $iteracijuSk=count($nariai); //Randamas iteraciju skaicius.

            return ['didziausias'=>$didziausi, 'iteracijuSk'=>$iteracijuSk];
        }

        function Statistika(){
            $didziausi=array();
            $iteracijuSk=array();
            for($i=$this->nuo; $i<=$this->iki; $i++){ //Atliekami skaiciavimai kiekvienam intervalo nariui.
                $result=$this->Skaiciavimai($i);
                $iteracijuSk[$i]=$result['iteracijuSk'];
                $didziausi[$i]=$result['didziausias'];
            }

            $DaugiausiaiIteraciju=max($iteracijuSk); //Randamas didziausias iteraciju skaicius.
            $SkaiciusDI=array_search($DaugiausiaiIteraciju, $iteracijuSk); //Randamas skaicius, kuris turejo daugiausiai iteraciju.
            $MaziausiaiIteraciju=min($iteracijuSk); //Randamas maziausias iteraciju skaicius.
            $SkaiciusMI=array_search($MaziausiaiIteraciju, $iteracijuSk); //Randamas skaicius, kuris turejo maziausiai iteraciju.
            $DidziausiasSkaicius=max($didziausi); //Randamas didziausias gautas skaicius visu iteraciju metu.
            $SkaiciusDS=array_search($DidziausiasSkaicius, $didziausi); //Randamas skaicius, kuris turejo didziausia gauta skaiciu visu iteraciju metu.

            return ['DaugiausiaiIteraciju'=>$SkaiciusDI, 'MaziausiaiIteraciju'=>$SkaiciusMI, 'DidziausiasSkaicius'=>$SkaiciusDS];
        }
        
    }
?>