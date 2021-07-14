<?php
        include 'JsonLoader.php';
        function Calcul($arr)
        {
            foreach($arr as $key=>$value) 
            {
                $firstNum = $value['firstNumber'];
                $secondNum = $value['secondNumber'];
                $thirdNum = $value['thirdNumber'];

                if($firstNum%2===0&& ($firstNum/$secondNum === $thirdNum))
                {
                     echo ($firstNum . '/' .$secondNum . '=' . $thirdNum . '<br>');
                }
            }
        }
        Calcul($data);
    