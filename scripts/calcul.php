<?php
        
        include 'JsonLoader.php';
        function Calcul($arr)
        {
            foreach($arr as $key=>$value) 
            {
                $calc = $value['calculation'];
                $numbers = explode(" ",$calc);
                if($numbers[1]==='+'||$numbers[1]==='-')
                {
                    switch ($numbers[1]) {
                        case '+':
                            if($numbers[0]+$numbers[2]==$numbers[4])
                            { 
                                echo $calc . '<br>';
                            }
                            break;
                        case '-':
                            if($numbers[0]-$numbers[2]==$numbers[4])
                            { 
                                echo $calc . '<br>';
                            }
                            break;
                        default:
                            break;
                    }
                }
                else
                {
                    switch ($numbers[3]) {
                        case '+':
                            if($numbers[2]+$numbers[4]==$numbers[0])
                            {
                                echo $calc . '<br>';
                            }
                            break;
                        case '-':
                            if($numbers[2]-$numbers[4]==$numbers[0]) 
                            {
                                echo $calc . '<br>';
                            }
                            break;
                        default:
                            break;
                    }
                }
            }
        }
        Calcul($data);
    