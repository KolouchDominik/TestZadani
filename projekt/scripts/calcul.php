<?php
        $json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
        $data = json_decode($json, true);
        function Calcul($arr)
        {
            for($i = 0; $i < count($arr); $i++)
            {
                $calc = $arr[$i]['calculation'];
                $numbers = explode(" ",$calc);
                if($numbers[1]=="+"||$numbers[1]=="-")
                {
                    switch ($numbers[1]) {
                        case '+':
                            if($numbers[0]+$numbers[2]==$numbers[4]) echo $calc . "<br>\n";
                            break;
                        case '-':
                            if($numbers[0]-$numbers[2]==$numbers[4]) echo $calc . "<br>\n";
                            break;
                        default:
                            break;
                    }
                }
                else
                {
                    switch ($numbers[3]) {
                        case '+':
                            if($numbers[2]+$numbers[4]==$numbers[0])echo $calc . "<br>\n";
                            break;
                        case '-':
                            if($numbers[2]-$numbers[4]==$numbers[0])echo $calc . "<br>\n";
                            break;
                        default:
                            break;
                    }
                }
            }
        }
        Calcul($data);
    ?>
    