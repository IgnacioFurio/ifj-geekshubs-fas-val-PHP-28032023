<?php

    function dice($min,$max){
        return (rand($min,$max));
    };

    function rolls($repeat = 1, $max = 20, $min = 1){
            
            $total = 0;
            $resultados = [];
        
            for($i = 1; $i <= $repeat; $i++){  

                $result = rand($min, $max);

                if($result === 1){
                    echo "{$i} => {$result} es una pifia"."<br/>";
                } elseif($result === 20){
                    echo "{$i} => {$result} CRITICO"."<br/>";
                } else{
                    echo "{$i}"." => "."{$result}"."<br/>";
                };    

                $resultados["suma"] = $total;
                // $resultados["{$i}"] = $result;
                $total += $result;

            }
            echo $total;
        }
    

    echo rolls(2);

?>