<?php
        $json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
        $data = json_decode($json, true);
        function Calcul($arr)
        {
            for($i = 0; $i < count($arr); $i++)
            {
                $firstNum = $arr[$i]['firstNumber'];
                $secondNum = $arr[$i]['secondNumber'];
                $thirdNum = $arr[$i]['thirdNumber'];

                if($firstNum%2==0&& ($firstNum/$secondNum == $thirdNum)) echo ($firstNum . "/" .$secondNum . "=" . $thirdNum . "<br>\n");
            }
        }
        Calcul($data);
    ?>
    